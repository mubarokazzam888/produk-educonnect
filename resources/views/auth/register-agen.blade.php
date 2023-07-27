<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Pendaftaran MGM</title>
    <link rel="icon" href="/HalamanAgen" sizes="32x32">
    <!-- <link href="https://penerimaan.uai.ac.id/file/template/limitless/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->

    <!--Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://penerimaan.uai.ac.id/file/template/bulkit/css/app.css">
    <link rel="stylesheet" href="https://penerimaan.uai.ac.id/file/template/bulkit/css/core.css">

    <!-- CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">

    <script src="https://penerimaan.uai.ac.id/file/template/bulkit/js/app.js"></script>
    <script src="https://penerimaan.uai.ac.id/file/template/bulkit/js/core.js"></script>
    <script src="https://penerimaan.uai.ac.id/file/template/limitless/js/plugins/loaders/blockui.min.js"></script>

    <script src="https://kit.fontawesome.com/929e18ab79.js" crossorigin="anonymous"></script>


    <!-- CDN -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}
    <style>
        .example {
            background-color: #eee;

            overflow-y: scroll;
            /* Add the ability to scroll */
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .example::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body>
    <!-- <div class="pageloader"></div>
        <div class="infraloader is-active"></div>-->

    <!-- Wrapper -->
    <div class="login-wrapper columns is-gapless">
        <!-- Form section -->

        <div class="column is-7 overflow-auto">
            <div style="overflow: scroll;height:714px" class="example">
                <div class="hero">
                    <div class="hero-heading">
                        <div class="auth-logo mt-30 has-text-centered">
                            <a href="/"><img class="dark-logo switcher-logo" src="https://penerimaan.uai.ac.id/file/images/logouai.png" alt="" width="180"></a>
                        </div>
                    </div>
                    <div class="hero-body mb-80 ">
                        <div class="container">


                            <div class="columns is-vcentered">
                                <div class="column is-9 is-offset-1">
                                    <!-- <div class="flex-card light-bordered light-raised">
                                    <div class="card-body"> -->
                                    <div class="auth-content has-text-centered">
                                        <h3 class="title is-3 is-styled">Registrasi Agen </h3>
                                        <p class="title">Daftar akun agen anda sekarang!</p>
                                        <!-- <hr> -->
                                    </div>
                                    <form method="POST" action="{{ route('register.agen') }}">
                                        @csrf
                                        {{-- <input  type="hidden" id="jenjang" name="jenjang" value="Kelas Karyawan"/> --}}

                                        <!-- <div class="columns pt-8"> -->
                                        {{-- <div class="row mt-2">
                                            <div class="col">
                                                <div class="control">
                                                    <label>First name <span style='font-size:12px;'></span> </label>
                                                
                                                    <input class="input is-medium mt-3" tabindex="1" type="text"/>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="control">
                                                    <label>Last name <span style='font-size:12px;'></span> </label>
                                                    
                                                    <input class="input is-medium mt-3" tabindex="2" type="text"/>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <!-- </div> -->

                                        <!-- <div class="columns pt-8"> -->
                                        <div class="row mt-2">

                                            {{-- Yang Masuk ke DB --}}
                                            <div class="col">
                                                <div class="control" for="name" :value="__('Name')">
                                                    <label>Nama Lengkap <span style='font-size:12px;'></span> </label>
                                                    <input class="input is-medium mt-3" tabindex="1" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
                                                </div>
                                            </div>

                                            {{-- Yang Masuk ke DB --}}
                                            <div class="col">
                                                <div class="control" for="email" :value="__('Email')">
                                                    <label>Email <span style='font-size:12px;'>(Gunakan Email Aktif)</span> </label>
                                                    <input class="input is-medium mt-3" tabindex="2" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- </div> -->

                                        <!-- <div class="columns pt-8"> -->
                                        {{-- <div class="row mt-2">
                                            
                                            <div class="col">
                                                <div class="control" for="name" :value="__('Name')">
                                                    <label>Username <span style='font-size:12px;'></span> </label>
                                                    <input class="input is-medium mt-3" tabindex="1" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="control">
                                                    <label>Date of birth <span style='font-size:12px;'></span> </label>
                                                    <input class="input is-medium mt-3" tabindex="2" type="text"/>
                                                    
                                                </div>
                                            </div>

                                        </div> --}}
                                        <!-- </div> -->
                                        
                                        <div class="row mt-2">
                                            {{-- Yang Masuk ke DB --}}
                                            <div class="col">
                                                <div class="control" for="password" :value="__('Password')">
                                                    <label>Password (Min:8 digit)</label>
                                                    <input class="input is-medium mt-3" tabindex="3" id="password" type="password" name="password" required autocomplete="new-password"/>
                                                </div>
                                            </div>
                                            {{-- Yang Masuk ke DB --}}
                                            <div class="col">
                                                <div class="control" :value="__('Confirm Password')">
                                                    <label>Confirm Password</label>
                                                    <input class="input is-medium mt-3" tabindex="4" id="password_confirmation" type="password" name="password_confirmation" required/>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- </div> -->

                                        {{-- <div class="row mt-2">
                                                <div class="col">
                                                    <div class="">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <span class="pl-2">Dosen</span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <span class="pl-2">Mahasiswa/i </span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <span class="pl-2">Karyawan </span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="">
                                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                                        <span class="pl-2">Umum </span>
                                                    </div>
                                                </div>
                                        </div> --}}
                                        
                                        <!-- <div class="columns pt-8"> -->
                                        {{-- <div class="mt-2">

                                            <div class="">
                                                <div class="control">
                                                    <label>Phone number <span style='font-size:12px;'></span> </label>
                                                    
                                                    <input class="input is-medium mt-3" tabindex="1" type="text"/>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="control">
                                                    <label>Address <span style='font-size:12px;'></span> </label>
                                                    
                                                    <textarea class="textarea is-medium mt-3" tabindex="2" type="text"> </textarea>
                                                </div>
                                            </div>
                                            
                                        </div> --}}
                                        <!-- </div> -->

                                        <div class="has-text-right">
                                            <!-- <button class="button is-light button-cta is-bold no-lh">
                                                    Cancel
                                                </button> -->

                                            {{-- Terms and conditions --}}
                                            <div class="form-group">
                                                <div class="form-check">
                                                    {{-- <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required> --}}
                                                    <input class="form-check-input is-invalid" type="checkbox">
                                                    <label class="form-check-label" for="invalidCheck3">
                                                        Agree to <a href="https://drive.google.com/file/d/1msXCRdxfnP4Ljx47XBYyJPSFFoCD-8Vs/view?usp=sharing" style="color: rgb(255, 0, 0);" target="_blank">terms and conditions</a>
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>

                                            <button tabindex="7" type="submit" id="daftarBtn" class="
                                                    button
                                                    btn-align
                                                    button-cta
                                                    is-bold
                                                    no-lh
                                                    raised
                                                    primary-btn
                                                    ">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </form>
                                    <!-- <p>Ada Pertanyaan ? <a href="#">Klik disini.</a></p>
                                        <p>Lupa Password ? <a href="https://penerimaan.uai.ac.id/login/lupa_password">Klik disini.</a></p> -->
                                    <!-- </div>
                                </div> -->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image section (hidden on mobile) -->
        <div class="column login-column is-12  hero-banner">
            <div class="hero is-fullheight is-theme-primary is-relative">
                <div class="colums">
                    <div class="column is-6">
                        <!--section 1 !-->
                        <div class="section-title has-text-centered" style="margin-top: 110px;">
                            <div class="
                                signup-context
                                primary-card
                                light-raised
                                padding-50
                                ">
                                <h2 class="subtitle is-light is-4 has-text-left">
                                    <i data-feather="info"></i> Petunjuk
                                </h2>
                                <!-- Icon block -->
                                <div class="argument">
                                    <div class="icon">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                    <div class="argument-text light-text">
                                        Sudah punya akun agen silahkan, <a href="/agen/login" style="color: black;">Klik disini</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>

</html>