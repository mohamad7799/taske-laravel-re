@extends('layout')

@section('styles')
    {{--  styles for the home page  and navebar --}}
    <link rel="stylesheet" href="{{ asset('css_files/navebar-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css_files/home-styles.css') }}">

@endsection

@section('section')


<section id="contact">

    <h1 class="section-header">Contact Us</h1>
    <div class="contact-wrapper">

    <!-- Left contact page -->

    <form id="contact-form" class="form-horizontal" role="form" method="post" action="{{route('contact-us.store')}}" >

        @csrf


        <div class="form-group">
            <div class="col-sm-12">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="NAME" name="name" value="{{old('name')}}" >
                @error('name')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="EMAIL" name="email" value="" >
                @error('email')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Phone number" name="phone" value="" >
                @error('phone')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <textarea class="form-control @error('message') is-invalid @enderror" rows="10" placeholder="MESSAGE" name="message" ></textarea>
        @error('message')
        <div class=" text-danger">{{ $message }}</div>
        @enderror

        <button class="send-button" id="submit" type="submit" value="SEND">

            <div class="svg-wrapper-1">
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" >
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                    </svg>
                </div>
            </div>
            <span>Send</span>
        </button>

        @if(@session('success'))
        <div class="alert alert-primary" role="alert">
        <h2 class="alert-heading ">{{session('success')}}</h2>
        </div>
        @endif

        </form>

    <!-- Left contact page -->

        <div class="direct-contact-container">

            <ul class="contact-list">
            <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Irbid, Jordan</span></i></li>

            <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="" title="Give me a call">+962 790278309</a></span></i></li>

            <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="" title="Send me an email">mohamadfoudeh19@gmail.com</a></span></i></li>

            </ul>

            <hr>
            <ul class="social-media-list">
            <li><a href="https://github.com/mohamad7799" target="_blank" class="contact-icon">
                <i class="fa fa-github" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa fa-codepen" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
            </ul>
            <hr>

            <div class="copyright">&copy; Simple Taske By Mohamad</div>

        </div>

    </div>

</section>



@endsection
