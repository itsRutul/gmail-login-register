@extends('layout')
@section('content')

<div class="container-parts">
    <div class="sub-part1">
        <div class="gmail-logo">
            <img src="{{ asset('/img/logo.png') }}" class="search-icon" alt="Search Icon 1">
        </div>
        <div class="extra">
            <h1 class="GA">
                <span>Create a Google Account</span>
            </h1>
            <div class="EN">
                <span>Enter your name</span>
            </div>
        </div>
    </div>
    <div class="sub-part2">
        <form method="POST" action="{{ route('register.step1.post') }}">
            @csrf
            <div class="input-wrapper">
                <input type="text" id="first_name" name="first_name" placeholder="first name">
            </div>
            <div class="input-wrapper">
                <input type="text" id="last_name" name="last_name" placeholder="last name(optional)">
            </div>
    </div>
    <div class="sub-part3">
        <div class="bttn"> 
            <button type="submit">Next</button>
        </div>
    </div>
    </form>
</div>

@stop
