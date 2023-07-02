<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login | Employee Data Master</title>
        @vite('resources/sass/app.scss')
    </head>
<body class="bg-primary">
    <div class="container-sm mt-5 p-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-4 shadow-lg">
                    <div class="mb-5 text-center">
                        <i class="bi-hexagon-fill fs-1 text-primary"></i>
                        <h4>Employee Data Master</h4>
                    </div>

                    <hr>

                    <div class="col mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>

                    <div class="col mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col d-grid">
                            <button type="submit" class="btn btn-primary btn-lg mt-3"><i class="bi-box-arrow-in-right me-2"></i> Log In</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
