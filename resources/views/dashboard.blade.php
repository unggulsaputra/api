
<!DOCTYPE html>
<html>
@include('layout.master.head')
@section('content-header','Dashboard')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    @include('layout.master.logo')
    <!-- Header Navbar: style can be found in header.less -->
    @include('layout.master.navbar')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  @include('layout.master.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('layout.master.content-header')
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     @include('layout.master.box')
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        @include('layout.master.grafik')
        @include('layout.master.calendar')
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layout.master.footer')

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->

@include('layout.master.script')
</body>
</html>
