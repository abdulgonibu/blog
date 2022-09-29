<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Global Business Solution | Dashboard</title>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('/assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('/assets/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- summernote -->
  
  <!-- include libraries(jQuery, bootstrap) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

 
  <!-- ImageUpload -->
  <link  rel="stylesheet" href="{{ asset('/assets/plugins/image-uploader.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <link  rel="stylesheet" href="{{ asset('/assets/plugins/toastr/toastr.min.css')}}">

  @yield('stylesheets')

  <script src="{{ asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="{{ URL('/')}}" role="button">
        <i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         
          <span>{{ Auth::user()->name}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          <div class="dropdown-divider"></div>
          
          
          <div class="dropdown-divider">
          </div>
          <a href="{{ route('profile.view') }}"
                      
                      class="dropdown-item dropdown-footer">View Profile</a>
                <form id="" action="{{ route('profile.view') }}" method="POST" style="display: none;">
                                        @csrf
                </form>  

                <a href="{{ route('password.view') }}"
                      
                      class="dropdown-item dropdown-footer">Password Change</a>
                <form id="" action="{{ route('password.view') }}" method="POST" style="display: none;">
                                        @csrf
                </form>  
                
          <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                </form>                                     
        </div>

      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

 @include('backend.layouts.sidebar')

  @yield('content')
    <!-- /.content -->

  @stack('scripts')
 
  </div>
  <!-- /.content-wrapper -->
  @include('backend.layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('/assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('/assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

	
<!-- overlayScrollbars -->
<script src="{{ asset('/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/assets/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/assets/dist/js/pages/dashboard.js')}}"></script>
<!-- Imageupload -->
<script src="{{ asset('/assets/plugins/image-uploader.min.js')}}"></script>
<script src="{{ asset('/assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('/assets/plugins/select2/js/select2.full.min.js')}}"></script>


<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 200
    });
</script>

<script src="{{ asset('/assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('/assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('/assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{ asset('/assets/plugins/toastr/toastr.min.js')}}"></script>
<script>
var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000
  });
</script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
 <script type="text/javascript">
   $(function(){
     $(document).on('click', '#delete', function(e){
      e.preventDefault();
      var link = $ (this).attr("href");
      Swal.fire({
        title: 'Are you sure?',
        text: "Are you file delete",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          window.location.href = link;
          Swal.fire(
            'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
     })
   });
 </script>

 <script type="text/javascript">
   $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
    reader.onload = function(e){
      $('#showImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
   });

    });
 </script>

 
<script type="text/javascript">
   $(document).ready(function(){
    $('#images').change(function(e){
      var reader = new FileReader();
    reader.onload = function(e){
      $('#showImages').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
   });

    });
    </script>

    
<script type="text/javascript">
   $(document).ready(function(){
    $('#imagess').change(function(e){
      var reader = new FileReader();
    reader.onload = function(e){
      $('#showImagess').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
   });

    });
    </script>

    
<script type="text/javascript">
   $(document).ready(function(){
    $('#imagesss').change(function(e){
      var reader = new FileReader();
    reader.onload = function(e){
      $('#showfour').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
   });

    });
    </script>

      
<script type="text/javascript">
   $(document).ready(function(){
    $('#imagessss').change(function(e){
      var reader = new FileReader();
    reader.onload = function(e){
      $('#five').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
   });

    });
    </script>

      
<script type="text/javascript">
   $(document).ready(function(){
    $('#imagesssss').change(function(e){
      var reader = new FileReader();
    reader.onload = function(e){
      $('#six').attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
   });

    });
    </script>
    
    <script type="text/javascript">
    $(document).ready(function() {
      $('#product_image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#productshowImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });

    });
  </script>
<!-- <script type="text/javascript">
   $(function(){
     $(document).on('click', '#delete', function(e){
      e.preventDefault();
      var link = $ (this).attr("href");
      Swal.fire({
        title: 'Are you sure?',
        text: "Are you file delete",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          window.location.href = link;
          Swal.fire(
            'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
     })
   }); -->

   <script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

 <script src="{{ asset('/js/custom.js')}}"></script>
</body>
</html>
