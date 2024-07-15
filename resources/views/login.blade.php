@extends('layout')
@section('content')
    
<div class="container-parts">
    <div class="sub-part1">
        <div class="gmail-logo">
            <img src="{{ asset('/img/logo.png') }}" class="search-icon" alt="Search Icon 1">
        </div>
        <div class="extra">
            <h1 class="GA">
                <span>Sign in</span>
            </h1>
            <div class="EN">
                <span>to continue to Gmail</span>
            </div>
        </div>
    </div>

    <div class="sub-part2">
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="input-wrapper">
                <input type="text" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="input-wrapper">
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <div class="checkbox-wrapper">
                        <label for="showPasswordCheckbox">Show Password</label>
                        <input type="checkbox" id="showPasswordCheckbox" onclick="togglePassword()">
                    </div>
                </div>
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="bttnn">
                <a href="/register">
                    <button class="buttnn1" type="button">Create account</button>
                </a>
                <button class="button-link" type="submit">Next</button>
            </div>
        </form>
     </div>
  </div>
  @stop

</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var showPasswordCheckbox = document.getElementById("showPasswordCheckbox");
        if (showPasswordCheckbox.checked) {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

