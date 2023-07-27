<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                @role('adminedu')
                <h4>Selamat Datang, {{Auth::user()->name}}</h4> <!-- nama 1 -->
                @endrole
                @role('agen')
                <h4>Selamat Datang, {{Auth::user()->name}}</h4> <!-- nama 1 -->
                @endrole
                
              </div>
            </div>
          </div><!-- /.container-fluid -->
    </section>

    <section class="content">
            @role('agen')
            <!----------------------------------------------------------------------------------->
            <!-- Main content -->
                <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-copy"></i></span>
        
                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Pengguna Kode</span>
                        <span class="info-box-number">(Coming Soon)</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
        
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>
        
                    <div class="info-box-content">
                        <span class="info-box-text">Sudah daftar</span>
                        <span class="info-box-number">0</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
        
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-star"></i></span>
        
                    <div class="info-box-content">
                        <span class="info-box-text">Reward</span>
                        <span class="info-box-number">(Coming Soon)</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
        
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-flag"></i></span>
        
                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Pengunjung</span>
                        <span class="info-box-number">(Coming Soon)</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                </div>
        
                <!-- Default box -->
                <div class="card" style="background-color: #ffffff">
                <div class="card-header" style="background-color: #bbbbbb">
                    <h3 class="card-title">@yield('nama1')</h3> <!-- nama 2 -->
        
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
                    {{-- <h4> Link           = <h5><a href="https://penerimaan.uai.ac.id/" target="_blank">https://penerimaan.uai.ac.id/</a><h5> </h4> </br> --}}
                    <h4> Link           = <h5><a href="/" target="_blank">https://penerimaan.uai.ac.id/</a><h5> </h4> </br>
                    <h4> Kode Referral  = </h4>
                    {{-- <p id="text-to-copy" style="color: #f71313;">menunggu persetujuan "{{Auth::user()->name}}" dari admin</p> --}}
                    <p id="text-to-copy" style="color: #f71313;">Agen1</p>
                    <button id="copy-button">Salin kode ke Clipboard</button>
                    
                    <script>
                        // Fungsi untuk menyalin teks ke clipboard
                        function copyToClipboard(text) {
                            const textarea = document.createElement('textarea');
                            textarea.value = text;
                            document.body.appendChild(textarea);
                            textarea.select();
                            document.execCommand('copy');
                            document.body.removeChild(textarea);
                        }
                    
                        // Menangani klik pada tombol
                        const copyButton = document.getElementById('copy-button');
                        const textToCopy = document.getElementById('text-to-copy').innerText;
                        copyButton.addEventListener('click', () => {
                            copyToClipboard(textToCopy);
                            alert('Teks berhasil disalin ke clipboard!');
                        });
                    </script>
                    
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            @endrole

            @role('adminedu')
            <!-- Default box -->
            {{-- <div class="card" style="background-color: #ffffff">
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

                          @forelse ($profile__agen as $key=>$item)
                              <tr>
                                  <td>{{$key + 1}}</td>  
                                  <td>{{$item->first_name}}</td>
                                  <td>{{$item->role}}</td>
                                  <td>{{$key + 1}}</td>
                                  <td>{{$key + 1}}</td>
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
            </div> --}}
            <!-- /.card -->
            @endrole

            @role('calonmhs')
            <h4>Selamat, Anda sudah mendaftar!</h4> <!-- nama 1 -->
            <section class="content">
              <!-- Default box -->
              <div class="card" style="background-color: #ffffff">
                <div class="card-header" style="background-color: #bbbbbb">
                  <h3 class="card-title">Biodata</h3> <!-- nama 2 -->
        
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
                  Nama Lengkap </tab>: {{Auth::user()->name}} </br> 
                  Email : {{Auth::user()->email}} </br>
                  Password : {{Auth::user()->email}}</br>
                  Nomor Telepon : {{Auth::user()->email}}</br>
                  Nomor Telepon Orang Tua : {{Auth::user()->email}}</br>
                  Kode yang dipakai : {{Auth::user()->email}}</br>
                  Nama Agen : {{Auth::user()->email}}</br>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
              </div>
              <!-- /.card -->
            @endrole
    </section>
</div>