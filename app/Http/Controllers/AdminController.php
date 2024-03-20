<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\Staff;
use App\Models\Messages;

class AdminController extends Controller
{
    public function adminlogin(){
        return view("adminlogin");
    }

    public function adminreg(){
        return view("register");
    }

    public function message(){
        $message=messages::all();
        return view("messages", compact('message'));
    }

    public function staff(){
        $staff=staff::all();
        return view("staff", compact('staff'));
    }

    public function editstaff($id){
        $staff=staff::find($id);

        return view('editstaff', compact('staff'));
    }

    public function deleteStaff(Request $request){
        $staff=staff::find($request->staff_id);
        if($staff){
            $staff->delete();
            return redirect()->back()->with('status', 'Staff was deleted successfully');
        }else{
            return redirect()->back()->with('status', 'Staff was not deleted');
        }        
    }

    public function updatestaff(Request $request,$id){
        $staff=staff::find($id);
        if($request->image){
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('staffimage', $imagename);
            $staff->image=$imagename;
        }
        $staff->username=$request->input('username');

        $staff->position=$request->input('position');

        $staff->update();

        return redirect()->back()->with('status', 'Staff information was updated successfully');
    }

    public function addstaff(Request $request){
        $data = new staff;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('staffimage', $imagename);
        $data->image=$imagename;

        $data->username=$request->username;

        $data->position=$request->position;

        $data->save();

        return redirect()->back()->with('status', 'Staff was added successfully');
    }

    public function upload(Request $request){
        $data = new movie;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('movieimage', $imagename);
        $data->image=$imagename;

        $data->title=$request->title;

        $data->link=$request->link;

        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with('status', 'Movie was added successfully');
    }

    public function edit($id){
        $movie=movie::find($id);

        return view('editmovie', compact('movie'));
    }

    public function delete(Request $request){
        $movie=movie::find($request->movie_id);
        if($movie){
            $movie->delete();
            return redirect()->back()->with('status', 'movie was deleted successfully');
        }else{
            return redirect()->back()->with('status', 'movie was not deleted');
        }

        
    }

    public function update(Request $request,$id){
        $data=movie::find($id);
        if($request->image){
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('movieimage', $imagename);
            $data->image=$imagename;
        }
        $data->title=$request->input('title');

        $data->link=$request->input('link');

        $data->description=$request->input('description');

        $data->update();

        return redirect()->back()->with('status', 'Movie information was updated successfully');
    }
}
