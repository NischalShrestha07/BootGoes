<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BootGoes authentication page">
    <title>Login | BootGoes</title>


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="auth-body">
    <button class="icon-button theme-toggle auth-theme-toggle" type="button" data-theme-toggle
        aria-label="Switch color theme" title="Switch color theme">
        <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
    </button>
    <main class="auth-page">
        <section class="auth-card">
            <a class="auth-brand" href="{{route('frontend.login')}}"><span class="brand-icon"><i
                        class="bi bi-grid-1x2-fill"
                        aria-hidden="true"></i></span><span><strong>BootGoes</strong><small>Sign in to your admin
                        workspace.</small></span></a>
            <form action="{{route('authenticate')}}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="mb-4">
                    <p class="eyebrow mb-1">Secure Access</p>
                    <h1 class="h3 mb-1">Login</h1>
                    <p class="text-muted mb-0">Sign in to your admin workspace.</p>
                </div>
                <div class="mb-3"><label class="form-label" for="loginEmail">Email address</label><input
                        class="form-control" name="email" placeholder="Enter Email Address" value="{{old('name')}}"
                        id="loginEmail" type="email" required>
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between"><label class="form-label"
                            for="loginPassword">Password</label><a class="small fw-semibold"
                            href="{{route('forgot.password')}}">Forgot?</a></div><input class="form-control"
                        id="loginPassword" name="password" placeholder="Enter Password" type="password" minlength="6"
                        required>
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-check mb-4"><input class="form-check-input" type="checkbox" id="rememberMe"><label
                        class="form-check-label" for="rememberMe">Remember me</label></div>
                <button class="btn btn-primary w-100" type="submit"><i class="bi bi-box-arrow-in-right"
                        aria-hidden="true"></i> Sign In</button>
            </form>

            <div class="auth-footer">New here? <a href="{{route('frontend.register')}}">Create an account</a></div>
        </section>
    </main>

    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>