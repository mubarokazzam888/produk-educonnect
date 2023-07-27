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
            <h1>Hai {{Auth::user()->name}}</h1> <!-- nama 1 -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
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
<!----------------------------------------------------------------------------------->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card" style="background-color: #ffffff">
        <div class="card-header" style="background-color: #bbbbbb">
          <h3 class="card-title">Cek Biodata Semua Agen</h3> <!-- nama 2 -->

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
                  <th>NIK</th>
                  <th>Alamat</th>
                  <th>No.Rekening</th>
                  <th>No.Hp</th>
                  <th>Action</th>
                </tr>
                </thead>
            
                <tbody>
                  @forelse ($profile__agen as $key=>$item)
                    <tr>
                      <td>{{$key + 1}}</td>  
                      <td>{{$item->name}}</td>
                      <td>{{$key + 1}}</td>
                      <td>{{$key + 1}}</td>
                      <td>{{$key + 1}}</td>
                      <td>{{$key + 1}}</td>
                      <td>{{$key + 1}}</td>
                      <td>
                        {{-- <a href="/admin_edu/detail_informasi_agen/{{$item->id}}" class="btn btn-info btn-sm">Detail</a> --}}
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                      </td>
                    </tr>
                    @empty
                    <h4>Data Kosong</h4>
                  @endforelse
                </tbody>
            
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Nama Agen</th>
                    <th>Role</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>No.Rekening</th>
                    <th>No.Hp</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
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