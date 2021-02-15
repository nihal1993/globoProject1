<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>projectBlog</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('/css/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>
 @include('inc.navbar')
  <div class="d-flex" id="wrapper">

    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <h1 class="mt-4">create Blog</h1>
         <form method="POST" action="{{ action('HomeController@create')}}">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="exampleFormControlTextarea1">Blog</label>
    
                                <div class="col-md-6">
                                    
                                    <textarea name="blog" class="form-control" id="blog" rows="7" value="{{ old('blog') }}" required autofocus></textarea>

                                    @if ($errors->has('blog'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('blog') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
      </div>
    </div>

    <!-- Page Content -->
   
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  {{-- Success Alert --}}
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- Error Alert --}}
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

  <!-- Bootstrap core JavaScript -->
  
  <script src="{{url('/jquery/jquery.min.js')}}"></script>
  <script src="{{url('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>



    <script>
        //close the alert after 3 seconds.
        $(document).ready(function(){
        setTimeout(function() {
            $(".alert").alert('close');
        }, 3000);
        });
    </script>

</body>

</html>
