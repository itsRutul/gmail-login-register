@extends('layout')
@section('content')
    
<div class="container-parts">
    <div class="sub-part1">
        <div class="gmail-logo">
            <img src="{{ asset('/img/logo.png') }}" class="search-icon" alt="Search Icon 1">
        </div>
        <div class="extra">
            @if(isset($user))
                <h1>Welcome, {{ $user->first_name }} {{ $user->last_name }}!</h1>
            @else
                <h1>Welcome!</h1>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="bttnn">
                <a href="/login">
                    <button class="buttnn2" type="button">Logout</button>
                </a>
            </div>
       </div>
     </div>
    </div>
  @stop
