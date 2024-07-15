@extends('layout')
@section('content')
<div class="container-parts">
    <div class="sub-part1">
        <div class="gmail-logo">
            <img src="{{ asset('/img/logo.png') }}" class="search-icon" alt="Search Icon 1">
        </div>
        <div class="extra">
            <h1 class="GA">
                <span>Choose your Gmail address</span>
            </h1>
            <div class="EN">
                <span>create your gmail</span>
            </div>
        </div>
    </div>
    <div class="sub-part2">
        <form method="POST" action="{{ route('register.step2.post') }}">
            @csrf
            <div class="input-wrapper">
                <input type="text" id="email" name="email" placeholder="example@gmail.com">
            </div>
    </div>
    <div class="sub-part3">
        <div class="bttn"> 
            <button type="submit" value="save">Next</button> 
        </div>
    </div>
    </form>
</div>
@stop
