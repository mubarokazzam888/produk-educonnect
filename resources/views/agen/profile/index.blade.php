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

</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    @include('partial.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('partial/sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile Agen {{Auth::user()->name}}</h1> <!-- nama 1 -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!----------------------------------------------------------------------------------->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
          
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="{{asset('dist/img/user2-160x160.jpg')}}"
                           alt="User profile picture">
                    </div>
          
                    <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
          
                    <p class="text-muted text-center">{{Auth::user()->name}}</p>
          
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
          
                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Tentang saya</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> User</strong>
          
                    <p class="text-muted">
                      {{-- Username : {{Auth::user()->name}}</br>Password : {{Auth::user()->password}} --}}
                      Username : {{Auth::user()->name}}</br>
                      Email : {{Auth::user()->email}}
                    </p>
                    
                    <hr>
                    {{--           
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
          
                    <p class="text-muted">{{Auth::user()->name}}</p> --}}
          
              
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
          
          
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card card-primary">
                  <div class="card-header">
                      <h3 class="card-title">Biodata saya</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="settings">
                        <form class="form-horizontal">

                        @forelse ($profile__agen as $key=>$item)

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nama Depan</label>
                            <div class="col-sm-10">
                              <p class="text-muted">
                                {{$item->first_name}}
                              </p>
                            </div>
                          </div>
          
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Nama Belakang</label>
                            <div class="col-sm-10">
                              <p class="text-muted">
                                {{$item->last_name}}
                              </p>
                            </div>
                          </div>
          
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                              <p class="text-muted">
                                {{$item->NIK}}
                              </p>
                            </div>
                          </div>
          
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">No.Rek</label>
                            <div class="col-sm-10">
                              <p class="text-muted">
                                {{$item->no_rek}}
                              </p>
                            </div>
                          </div>
          
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                              <p class="text-muted">
                                {{$item->phone_number}}
                              </p>
                            </div>
                          </div>
          
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                              <p class="text-muted">
                                {{$item->role}}
                              </p>
                            </div>
                          </div>
          
                            <div class="form-group row">
                              <div class="col-sm-10">
                                  <div class="col-sm-6">
                                     <!-- Tambahkan input untuk data profil lainnya jika diperlukan -->
                                     {{-- @forelse ($user as $key=>$item)
                                     <form action="/agen/edit_profile/{{$item->id}}" method="POST">
                                        <a href="/agen/edit_profile/{{$item->id}}" class="btn btn-primary">Edit Profil</a>
                                      </form> --}}
                                      {{-- <a href="/agen/editprofile" class="btn btn-warning">Edit Profil</a> --}}
                                  </div>
                              </div>
                            </div>

                        @empty
                            <tr>
                                <td>Data Masih Kosong</td>   
                                <a href="/agen/editprofile" class="btn btn-primary">Tambah Profile</a>
                            </tr>
                        @endforelse

                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
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

</body>
</html>
