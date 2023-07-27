<aside class="main-sidebar sidebar-dark-primary elevation-4" 
@role('adminedu')
style="background-color: #5e7298"
@endrole
@role('agen')
style="background-color: #7a91ba"
@endrole
>
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{asset('dist/img/logouai.png')}}" width="230">
  </a>

      <!-- Sidebar -->
      <div class="sidebar">

    <!-- Sidebar -->
    <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             @role('adminedu')
             <li class="nav-item">
              <a href="/admin_edu" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Halaman Admin
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/admin_edu/cek_mgm" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Cek MGM
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/admin_edu/informasi_agen" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Informasi Agen
                </p>
              </a>
            </li>
            @endrole

            @role('agen')  

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="/agen/profile" class="d-block">{{Auth::user()->name}}</a>
              </div>
            </div>


            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Halaman Utama
                  </p>
                </a>
              </li>

            <li class="nav-item">
              <a href="/agen/informasi" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Informasi
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/agen/bantuan" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Bantuan
                  </p>
              </a>
            </li>
              @endrole

              <li class="nav-item">
              <!-- Authentication -->
                <form href="../widgets.html"  method="POST" action="{{ route('logout') }}">
                    @csrf

                    <i class="nav-icon far fa-sign-out"></i>
                    <x-dropdown-link :href="route('logout')" class="nav-link bg-danger"
                          onclick="event.preventDefault();
                                  this.closest('form').submit();">
                          {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
              </li>
      </ul>
    </nav>
  </div>
</aside>