<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Alphacreed Admin panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{url('admin/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Alpha Creed</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- ADD MOVIE BUTTON-->           
                    <a href="{{route('dashboard')}}" class="btn btn-primary ms-auto">Back</a>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                            {{ csrf_field() }}
                            <button type="submit" class="loggingout dropdown-item">Logout</button>
                        </form></li>
                    </ul>
                    
                    
        </nav>
        
            @include('sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Movie</h1>
                        
                        <div class="row justify-content-center">
                             <div class="col-6">
                             @if(session('status'))
                                  <h6 class="alert alert-success">
                                      {{ session('status') }}
                                  </h6>
                              @endif
                                <form action="{{url('update-data/'.$movie->id)}}" method="post">
                                  @csrf
                                  @method('PUT')
                                    <label for="">Movie Title</label>
                                    <input type="text" value="{{$movie->title}}" name="title" class="form-control">
                                    <label for="" class="mt-3">Description</label>
                                    <textarea name="description" id="" cols="20" rows="5" class="form-control">{{$movie->description}}</textarea>
                                    <label for="" class="mt-3">Movie Trailer Link</label>
                                    <input type="text" name="link" value="{{$movie->link}}" class="form-control">
                                    <label for="" class="mt-3">Movie Poster: </label>
                                    <input type="file" name="image" id="" value="movieimage/{{$movie->image}}">

                                    <div>
                                         <button type="submit" class="btn btn-primary bg-primary mt-5">Save changes</button>
                                    </div>
                                </form>
                             </div>
      
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        

<!-- DELETE MODAL STARTS HERE -->
  
  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Movie</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to Delete Movie?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Yes</button>
        </div>
      </div>
    </div>
  </div> 
  <!-- DELETE MODAL ENDS HERE    -->
        <!-- ADD MOVIE MODAL STARTS HERE --> 
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addModalLabel">Add Movie</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Add Movie</p>
            <form action="{{url('/uploadmovie')}}" method="post" enctype="multipart/form-data">
              @csrf
                 <label for="">Movie Title</label>
                 <input type="text" class="form-control" name="title">
                 <label for="" class="mt-3">Description</label>
                 <textarea name="description" id="" cols="20" rows="5" class="form-control"></textarea>
                 <label for="" class="mt-3">Movie Trailer Link</label>
                 <input type="text" class="form-control" name="link">
                 <label for="" class="mt-3">Movie Poster: </label>
                 <input type="file" name="image" id="">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger bg-danger">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>
        <!-- ADD MOVIE MODAL ENDS HERE -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('admin/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="admin/assets/demo/chart-area-demo.js"></script>
        <script src="admin/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="admin/js/datatables-simple-demo.js"></script>
    </body>
</html>
