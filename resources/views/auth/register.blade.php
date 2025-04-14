<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center"
        style="height: 100vh; background: linear-gradient(135deg, rgb(255, 202, 88), rgb(41, 55, 73));">
        <div class="form-container text-center bg-white p-4 rounded shadow" style="max-width: 400px; width: 100%;">
            <h3 class="mb-4">Create an account</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- الاسم الكامل --}}
                <div class="mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" placeholder="Full Name" required>
                    @error('name')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                {{-- البريد الإلكتروني --}}
                <div class="mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" placeholder="E-mail" required>
                    @error('email')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>




                {{-- كلمة المرور --}}
                <div class="mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="Password" required>
                    @error('password')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                {{-- تأكيد كلمة المرور --}}
                <div class="mb-3">
                    <input type="password" class="form-control" name="password_confirmation"
                        placeholder="Confirm Password" required>
                </div>

                {{-- زر التسجيل --}}
                <button type="submit" class="btn btn-dark w-100">Register</button>

                {{-- رابط تسجيل الدخول --}}
                <p class="mt-3">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
            </form>
        </div>
    </div>
</body>

</html>
