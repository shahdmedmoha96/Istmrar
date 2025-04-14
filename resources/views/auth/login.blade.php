<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100"
        style="background: linear-gradient(135deg, rgb(41, 55, 73), rgb(255, 202, 88));">
        <div class="form-container text-center">
            <h3 class="mb-4">Log in</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email"
                        autofocus>
                    @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 form-check text-start">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button type="submit" class="btn btn-dark w-100">Log in</button>

                @if (Route::has('password.request'))
                    <p class="mt-3">
                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </p>
                @endif

                <p class="mt-3">Don't have an account? <a href="{{ route('register') }}">Create an account</a></p>
            </form>
        </div>
    </div>
</body>

</html>
