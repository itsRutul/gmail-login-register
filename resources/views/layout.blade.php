<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Gmail Registration</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">


        @yield('content')


     <div class="footer">
        <div class="dropdown">
            <button>English (United States)</button>
        </div>
        <ul class="extra2">
                <li class="help">
                    <a href="">Help</a>
                </li>
                <li class="Privacy">
                    <a href="">Privacy</a>
                </li>
                <li class="Term">
                    <a href="">Term</a>
                </li>
        </ul>
      </div>
    </div>
</body>
</html>
