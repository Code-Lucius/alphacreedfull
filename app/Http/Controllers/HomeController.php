<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\Staff;
use App\Models\Messages;

class HomeController extends Controller
{
    public function index(){
        $data=movie::all();
        $latest=Movie::orderBy('created_at','desc')->take(3)->get();
        $blogg=$this->api();
        $blog = array_slice($blogg->articles, 0, 10);
        $footernews = array_slice($blogg->articles, 0, 4);

        return view("home")->with('data', $data)->with('latest', $latest)->with('blog', $blog)->with('footernews', $footernews);
    }

    public function about(){
        $staff=staff::all();

        return view("about", compact("staff"));
    }

    public function contact(){

        return view("contact");
    }

    public function api(){
        $client = new Client();
        $url = "https://gnews.io/api/v4/top-headlines?category=entertainment?lang=en?country=us&apikey=d3ad43a9e05966023758752ddcfc16d1";

        $params = [
            //If you have any Params Pass here
        ];

        $headers = [
            // 'api-key' => 'k3Hy5qr73QhXrmHLXhpEh6CQ'
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());        
            return $responseBody;        
    }

    public function blog(){
        $responseBody = $this->api();
        return view('blog', compact('responseBody'));
    }

    public function message(Request $request){
        $message = new messages;

        $message->name=$request->contactName;

        $message->email=$request->contactEmail;

        $message->message=$request->contactMessage;

        $message->save();

        return redirect()->back()->with('status', 'Your message was sent successfully');
    }
}
