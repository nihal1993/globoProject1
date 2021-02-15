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
 @include('inc.navadmin')
  <div class="d-flex" id="wrapper">

   @include('sidenav')

    <!-- Page Content -->
    @include('home')
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