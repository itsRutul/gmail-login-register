@extends('layout')
@section('content')
        <div class="container-parts">
            
            <div class="sub-part1">
                <div class="gmail-logo">
                    <img src="{{ asset('/img/logo.png') }}" class="search-icon" alt="Search Icon 1">
                </div>
                
                <div class="extra">
                <h1 class="GA">
                    <span>Basic information</span>
                </h1>
                <div class="EN">
                    <span>Enter your birthday and gender</span>
                </div>
                </div>
            </div>
            <div class="sub-part2">
                <form action= "{{ route('auth') }}" method="post">
                <div class="input-wrapper">
                    <label for="day">Day:</label>
                    <select id="day" name="day">
                        <option value="">Day</option>
                        <!-- Add options for days -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <!-- Add more options for days -->
                    </select>
                    <label for="month">Month:</label>
                    <select id="month" name="month">
                        <option value="">Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <!-- Add more options for months -->
                    </select>
                    <label for="year">Year:</label>
                    <select id="year" name="year">
                        <option value="">Year</option>
                        <!-- Add options for years -->
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <!-- Add more options for years -->
                    </select>
                </div>
                <div class="input-wrapper">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                </form>
            </div>
            <div class="sub-part3">
                <div class="bttn"> 
                    <a href="/email">
                        <button type="submit" value="save">Next</button>
                    </a>
                </div>
            </div>
        </div>
        @stop
      


     