@extends('layouts.guest.app')

@section('content')
<div class="row h-100 justify-content-center">
    <div class="col-lg-6 col-12">
        <div id="auth-left">
            <h1 class="auth-title text-center">Masuk</h1>
            <h4 class="text-center">Masukkan NIS dan Token dari Panitia</h4>
            <br>
            <form method="POST" action="{{ route('login_user') }}">
                @csrf
             
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="NIS (5412**)" name="email">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
    <input type="text" class="form-control form-control-xl" placeholder="Token" name="token" id="passwordInput">
    <div class="form-control-icon">
        <i class="bi bi-shield-lock"></i>
    </div>
    <div class="password-toggle-icon" onclick="togglePasswordVisibility()">
        <i class="bi bi-eye"></i>
    </div>
</div>

<style>
    .password-toggle-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("passwordInput");
        var passwordToggleIcon = document.querySelector(".password-toggle-icon i");

        if (passwordInput.type === "text") {
            passwordInput.type = "password";
            passwordToggleIcon.classList.remove("bi-eye-slash");
            passwordToggleIcon.classList.add("bi-eye");
        } else {
            passwordInput.type = "text";
            passwordToggleIcon.classList.remove("bi-eye");
            passwordToggleIcon.classList.add("bi-eye-slash");
        }
    }
</script>
                @if (session('error'))
                <div class="alert alert-light-warning color-warning">
                    {{ session('error') }}
                </div>
                @endif
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Masuk</button>
            </form>
        </div>
    </div>
</div>
@endsection
