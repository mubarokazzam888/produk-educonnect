<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @role('adminedu')
  <title>Admin</title>
  @endrole
  @role('agen')
  <title>Agen</title>
  @endrole
  <title>Calon Mahasiswa</title>

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
    {{-- @include('partial.nav') --}}
  @include('partial.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    {{-- @include('partial/admin.sidebar') --}}
    @include('partial.sidebar')

      <!-- Content Wrapper. Contains page content -->
            <!-- Default box -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                          <div class="col-sm-6">
                            <h4>Selamat Datang, {{Auth::user()->name}}</h4> <!-- nama 1 -->
                            
                          </div>
                        </div>
                      </div><!-- /.container-fluid -->
                </section>
            
                <section class="content">
            <div class="card" style="background-color: #ffffff">
                <div class="card-header" style="background-color: #bbbbbb">
                <h3 class="card-title">Tabel Database Agen</h3> <!-- nama 2 -->
                
                @push('script')
                <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
                <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
                <script>
                  $(function () {
                    $("#example1").DataTable();
                  });
                </script>
                @endpush
                
                @push('style')
                    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bst4/dt-1.11.3/datatables.min.css"/>
                @endpush

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
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>#</th>  
                          <th>Nama Agen</th>
                          <th>Role</th>
                          <th>Kode MGM</th>
                          <th>Sudah Daftar</th>
                          <th>Reward</th>
                          <th>Jumlah Pengunjung</th>
                        </tr>
                        </thead>
                    
                        <tbody>

                          @forelse ($hal_utama as $key=>$item)
                              <tr>
                                  <td>{{$key + 1}}</td>  
                                  <td>{{$item->first_name}}</td>
                                  <td>{{$item->role}}</td>
                                  <td>{{$item->role}}</td>
                                  <td>{{$item->role}}</td>
                              </tr>
                            @empty
                              <tr>
                                  <td>Data Masih Kosong</td>
                              </tr>
                          @endforelse

                        </tbody>
                    
                        <tfoot>
                        <tr>
                            <th>#</th>  
                            <th>Nama Agen</th>
                            <th>Role</th>
                            <th>Kode MGM</th>
                            <th>Sudah Daftar</th>
                            <th>Reward</th>
                            <th>Jumlah Pengunjung</th>
                        </tr>
                        </tfoot>
                      </table>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
            </div>
        </section>
    </div>
            <!-- /.card -->
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
