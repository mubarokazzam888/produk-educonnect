<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

  @stack('style')

</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    @include('partial.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('partial.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hai, Admin {{Auth::user()->name}}</h1> <!-- nama 1 -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!----------------------------------------------------------------------------------->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card" style="background-color: #ffffff">
        <div class="card-header" style="background-color: #bbbbbb">
          <h3 class="card-title">Biodata Agen {{Auth::user()->name}}</h3> <!-- nama 2 -->

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal">
            
            
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <p class="text-muted">
                            Azzam12
                          </p>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <p class="text-muted">
                            Jakarta Timur, Indonesia
                          </p>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Depan</label>
                        <div class="col-sm-10">
                          <p class="text-muted">
                              Muhammad Mubarok
                          </p>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nama Belakang</label>
                        <div class="col-sm-10">
                          <p class="text-muted">
                              Azzam
                          </p>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <p class="text-muted">
                              3192939102313
                          </p>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No.Rek</label>
                        <div class="col-sm-10">
                          <p class="text-muted">
                              7171-7171-7171
                          </p>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <p class="text-muted">
                              mmazzam34@gmail.com
                          </p>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                          <p class="text-muted">
                              089627929495
                          </p>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Sebagai</label>
                        <div class="col-sm-10">
                          <p class="text-muted">
                              Mahasiswa
                          </p>
                        </div>
                      </div>
            
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Gambar NIK</label>
                          <div class="col-sm-10">
                              <div class="col-sm-6">
                                  <img class="img-fluid" src="{{asset('dist/img/ktp_cowo.jpg')}}" alt="Photo">
                              </div>
                          </div>
                        </div>
            
                        <div class="form-group row">
                          <div class="col-sm-10">
                              <div class="col-sm-6">
                                <a href="/admin_edu/informasi_agen" class="btn btn-primary">Kembali</a>
                              </div>
                          </div>
                        </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    {{-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io"><EduConnect class="io"></EduConnect></a>.</strong> All rights reserved. --}}
    <strong> </strong> EduConnect
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>

@stack('script')
</body>
</html>
