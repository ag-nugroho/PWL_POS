<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Pengguna</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    <style>
        <style>
        /* Background gradient */
        body {
            background: linear-gradient(to right, #e1f5fe, #f5f5f5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Source Sans Pro', sans-serif;
        }

        /* Positional icon on the background */
        body::before {
            content: '';
            position: absolute;
            top: 20px;
            right: 20px;
            width: 250px;
            height: 250px;
            opacity: 0.1;
        }

        /* Card styling */
        .login-box {
            width: 400px;
            position: relative;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        /* Custom header */
        .card-header {
            background-color: #ffffff;
            border-bottom: none;
        }

        .card-header .h1 {
            font-size: 24px;
            font-weight: 700;
            color: #2575fc;
        }

        /* Button styling */
        .btn-primary {
            background-color: #2575fc;
            border-color: #2575fc;
            transition: background-color 0.4s ease, border-color 0.4s ease;
            border-radius: 30px;
        }

        .btn-primary:hover {
            background-color: #1c59d8;
            border-color: #1c59d8;
        }

        /* Input field styling */
        .form-control {
            border-radius: 30px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0px 0px 12px rgba(37, 117, 252, 0.3);
        }

        /* Social auth links styling */
        .social-auth-links a {
            border-radius: 30px;
            background-color: #f5f5f5;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .social-auth-links a:hover {
            transform: scale(1.05);
            background-color: #2575fc;
            color: white;
        }

        /* Footer margin */
        .login-footer {
            margin-top: 20px;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center"><a href="{{ url('/') }}" class="h1"><b>Point</b>Ease</a></div>
            <div class="card-body">
                <p class="login-box-msg">Buat akun baru</p>
                <form action="{{ url('postregister') }}" method="POST" id="form-register">
                    @csrf
                    <div class="input-group mb-3">
                        <select name="level_id" id="level_id" class="form-control" required>
                            <option value="">Pilih Level</option>
                                @foreach ($level as $l)
                                    <option value="{{ $l->level_id }}">{{ $l->level_nama }}</option>                                
                                @endforeach
                                <small id="error-level_id" class="error-text form-text text-danger"></small>
                            <span class="fas fa-user"></span>
                            </select>
                        <small id="error-fullname" class="error-text text-danger"></small>    
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <small id="error-username" class="error-text text-danger"></small>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <small id="error-nama" class="error-text text-danger"></small>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Masukkan password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <small id="error-password" class="error-text text-danger"></small>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="social-auth-links text-center mt-2">
                    <p>- OR -</p>
                    <a href="{{ url('login') }}" class="btn btn-block btn-outline-secondary">
                        <i class="fas fa-sign-in-alt mr-2"></i>Sudah memiliki akun? Masuk                        
                    </a>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $("#form-register").validate({
                rules: {
                    level_id: {
                        required: true,
                        number: true
                    },
                    username: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    },
                    nama: {
                        required: true,
                        minlength: 3,
                        maxlength: 100
                    },
                    password: {
                        required: true,
                        minlength: 6,
                        maxlength: 20
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function(response) {
                            if (response.status) {
                                // Tampilkan pesan sukses
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message
                                }).then((result) => {
                                    // Setelah pesan sukses, arahkan ke halaman login
                                    if (result.isConfirmed) {
                                        window.location.href = response.redirect;
                                    }
                                });
                            } else {
                                // Tampilkan error validasi jika ada
                                $('.error-text').text('');
                                $.each(response.msgField, function(prefix, val) {
                                    $('#error-' + prefix).text(val[0]);
                                });
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Terjadi Kesalahan',
                                    text: response.message
                                });
                            }
                        }
                    });
                    return false;
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>    
</body>
</html>
