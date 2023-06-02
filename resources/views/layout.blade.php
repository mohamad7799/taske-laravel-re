<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mohamad Taske</title>

    {{-- bootstrap styles --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    {{-- styles --}}
    @yield('styles')



</head>
<body>

    <nav class="navbar">
        <a href="#" class="logo"><img src="{{asset('images/logo.png')}}" alt="">  </a>
        <div class="nav-links">
            <ul>
                <li class="active"><a href="{{url('/')}}" ><button class="cta"><span>Contact Us</span></button></a></li>
                {{-- <li><a href=""><button class="cta"><span>Login</span></button></a></li>
                <li><a href=""><button class="cta"><span>Rejester</span></button></a></li> --}}
                <li><a href="{{route('welcome')}}">
                        <button class="cta">
                        <span>Get Started</span>
                        <svg viewBox="0 0 13 10" height="10px" width="15px">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                        </button>
                    </a>
                </li>

            </ul>
        </div>

        <input type="checkbox" id="checkbox" class="checkbox">
        <label for="checkbox" class="toggle">
            <div class="bars" id="bar1"></div>
            <div class="bars" id="bar2"></div>
            <div class="bars" id="bar3"></div>
        </label>

    </nav>

    <header>
        @yield('section')
    </header>

    {{-- scripts --}}

    <script src="{{asset('js_files/navebar.js')}}"></script>
    <script src="{{asset('js_files/home.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/fc90259c94.js" crossorigin="anonymous"></script>


</body>
</html>
