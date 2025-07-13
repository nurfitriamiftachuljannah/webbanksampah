<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siresik | Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin2/sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin2/sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <div class="row">
                            <div class="col-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">
                                            <i class="fas fa-user-plus"></i> Daftar Akun Siresik
                                        </h1>
                                    </div>

                                    <form class="user" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" value="{{ old('nama') }}" required>
                                            @error('nama')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Masukkan Email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Masukkan Password" required>
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control form-control-user" placeholder="Konfirmasi Password" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Daftar
                                        </button>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <small>
                                            Sudah punya akun?
                                            <a href="{{ route('login') }}">Login di sini</a>
                                        </small>
                                    </div>
                                    <div class="text-center">
                                        <small>
                                            Ingin kembali ke Beranda? <a href="{{ route('welcome') }}">Klik di sini</a>
                                        </small>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- JS Files -->
    <script src="{{ asset('sbadmin2/sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/sbadmin2/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Sukses!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                title: "Gagal!",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif

</body>
</html>
