@extends('layout')
@section('content')

<div class="container-parts">
    <div class="sub-part1">
        <div class="gmail-logo">
            <img src="{{ asset('/img/logo.png') }}" class="search-icon" alt="Search Icon 1">
        </div>
        
        <div class="extra">
            <h1 class="GA">
                <span>Create a strong password</span>
            </h1>
            <div class="EN">
                <span>Create a strong password with a mix of letters, numbers and symbols</span>
            </div>
        </div>
    </div>
    <div class="sub-part2">
        <form method="POST" action="{{ route('register.submit') }}">
            @csrf
            <div class="input-wrapper">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="input-wrapper">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="password_confirmation" placeholder="Confirm Password">
            </div>
    </div>
    <div class="sub-part3">
        <div class="bttn"> 
            <button type="submit" value="save">Submit</button>
        </div>
    </div>
    </form>
    <div>
        @if(session('success'))
            <p>User created successfully!</p>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
@stop
