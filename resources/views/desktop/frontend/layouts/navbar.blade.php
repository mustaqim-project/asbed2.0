    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand p-0">
                    {{-- <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> LifeSure</h1> --}}
                    <img src="desktop/frontend/img/logoo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="blog.html" class="nav-item nav-link">Blog</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <div class="nav-btn px-3">
                            @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                <div class="nav-item dropdown">
                                    <a href="#" class="btn btn-primary rounded-pill flex-shrink-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="dropdown-toggle">{{ Auth::user()->name }}</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                                        </form>
                                    </div>
                                </div>
                                @else
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#loginModal">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    Register
                                </a>
                                @endif
                                @endauth
                            </nav>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                    {{-- <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada"
                        data-wow-delay=".9s">
                        <i class="fa fa-phone-alt fa-2x"></i>
                        <div class="position-absolute" style="top: 7px; right: 12px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a> --}}
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    @php
    use App\Models\Aktifitas;
    $aktifitas = aktifitas::all()->pluck('nama', 'id');
    @endphp


    <!-- Modal CSS -->
    <style>
        /* General Modal Styling */
        .modal-content {
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            background-color: #fff;
        }

        .modal-header {
            border-bottom: none;
            padding-bottom: 10px;
        }

        .modal-title {
            font-weight: bold;
            color: #058789;
        }

        .modal-body {
            padding-top: 0;
        }

        .form-label {
            color: #333;
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
        }

        .input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .btn-primary2 {
            background-color: #058789;
            border-color: #058789;
            padding: 12px;
            border-radius: 5px;
            font-weight: bold;
            width: 100%;
            color: #fff;
        }

        .modal-footer {
            border-top: none;
            padding-top: 10px;
            text-align: center;
        }

        .upload-file {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #058789;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .divider {
            margin: 20px 0;
            border-bottom: 1px solid #ddd;
        }

        /* Image Preview Styling */
        #image_preview {
            display: block;
            width: 100%;
            max-width: 200px;
            height: auto;
            margin-bottom: 10px;
        }

        .mt-4,
        .mb-4 {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .btn-close {
            background-color: transparent;
            border: none;
            font-size: 1.5rem;
            color: #333;
        }

    </style>

    <!-- Login Modal Start -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to Your Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary2 w-100">Log in</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-center w-100">Don't have an account? <a href="{{ route('register') }}">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->

    <!-- Register Modal Start -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Create a New Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Username -->
                        {{-- <div class="mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input id="username" class="form-control" type="text" name="username"
                                value="{{ old('username') }}" required placeholder="Username">
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div> --}}

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Tanggal Lahir -->
                <div class="mb-4">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input id="tanggal_lahir" class="form-control" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                    <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                </div>

                <!-- Tinggi Badan -->
                <div class="mb-4">
                    <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
                    <input id="tinggi_badan" class="form-control" type="number" name="tinggi_badan" value="{{ old('tinggi_badan') }}" required placeholder="Tinggi Badan">
                    <x-input-error :messages="$errors->get('tinggi_badan')" class="mt-2" />
                </div>

                <!-- Berat Badan -->
                <div class="mb-4">
                    <label for="berat_badan" class="form-label">Berat Badan (kg)</label>
                    <input id="berat_badan" class="form-control" type="number" name="berat_badan" value="{{ old('berat_badan') }}" required placeholder="Berat Badan">
                    <x-input-error :messages="$errors->get('berat_badan')" class="mt-2" />
                </div>

                <!-- Jenis Kelamin -->
                <div class="mb-4">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                    <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                </div>

                <!-- Aktifitas -->
                <div class="mb-4">
                    <label for="aktifitas_id" class="form-label">Pilih Aktifitas</label>
                    <select id="aktifitas_id" name="aktifitas_id" class="form-control">
                        <option value="">Pilih Aktifitas</option>
                        @foreach ($aktifitas as $id => $nama)
                        <option value="{{ $id }}" {{ old('aktifitas_id') == $id ? 'selected' : '' }}>{{ $nama }}
                        </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('aktifitas_id')" class="mt-2" />
                </div>

                <!-- Profile Picture Upload -->
                <div class="mb-4">
                    <img id="image_preview" src="#" alt="Image Preview" style="display:none;" />
                    <label class="upload-file">
                        <input type="file" id="profile_picture" name="profile_picture" class="form-control" accept="image/*">
                        Upload Image
                    </label>
                    <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />
                </div>

                <button type="submit" class="btn btn-primary2 w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- Register Modal End -->

    <!-- JavaScript to Show Image Preview -->
    <script>
        document.getElementById('profile_picture').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('image_preview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        });

    </script>
