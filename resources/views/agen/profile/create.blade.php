<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agen</title>

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
            <h1>@yield('nama')</h1> <!-- nama 1 -->
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
          <h3 class="card-title">Edit Profile</h3> <!-- nama 2 -->

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

                    <form class="form-horizontal" action="/agen/profile" method="POST">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input class="text-muted" placeholder="..." name="address" type="text">
                        </div>
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
            
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Depan</label>
                        <div class="col-sm-10">
                          <input class="text-muted" placeholder="..." name="first_name" type="text">
                        </div>
                        @error('first_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
            
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nama Belakang</label>
                        <div class="col-sm-10">
                          <input class="text-muted" placeholder="..." name="last_name" type="text">
                        </div>
                        @error('last_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input class="text-muted" placeholder="..." name="date_of_birth" type="text">
                        </div>
                        @error('date_of_birth')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
            
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input class="text-muted" placeholder="..." name="NIK" type="text">
                        </div>
                        @error('NIK')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
            
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No.Rek</label>
                        <div class="col-sm-10">
                          <input class="text-muted" placeholder="xxxx-xxxx-xxxx" name="no_rek" type="text">
                        </div>
                        @error('no_rek')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
            
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input class="text-muted" placeholder="08xx-xxxx-xxxx-xxx" name="phone_number" type="text">
                        </div>
                        @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
            
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Sebagai</label>
                        <div class="col-sm-10">
                          {{-- <input class="text-muted" placeholder="mahasiswa/i, Dosen, Umum?" name="role" type="text"> --}}
                          <input type="radio" name="gender" value="Mahasiswa/i" name="role"> Mahasiswa/i <br>
                          <input type="radio" name="gender" value="Dosen" name="role"> Dosen <br>
                          <input type="radio" name="gender" value="Karyawan" name="role"> Karyawan <br>
                          <input type="radio" name="gender" value="Umum" name="role"> Umum <br>
                        </div>
                        @error('role')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      </br>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        
                    </form>

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
