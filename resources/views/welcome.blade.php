<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SHOWTV</title>

      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            * {
              box-sizing: border-box;
            }

            body {
              overflow-x: hidden;
              margin: 0;
              padding: 0;
              font-family: 'Sunflower';
            }

            .post-module {
              position: relative;
              z-index: 1;
              display: block;
              background: #FFFFFF;
              min-width: 270px;
              height: 470px;
              -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
              -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
              box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
              -webkit-transition: all 0.3s linear 0s;
              -moz-transition: all 0.3s linear 0s;
              -ms-transition: all 0.3s linear 0s;
              -o-transition: all 0.3s linear 0s;
              transition: all 0.3s linear 0s;
            }
            .post-module:hover,
            .hover {
              -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
              -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
              box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
            }
            .post-module:hover .thumbnail img,
            .hover .thumbnail img {
              -webkit-transform: scale(1.1);
              -moz-transform: scale(1.1);
              transform: scale(1.1);
              opacity: 0.6;
            }
            .post-module .thumbnail {
              background: #000000;
              height: 400px;
              overflow: hidden;
            }
            .post-module .thumbnail .date {

              position: absolute;
              top: 11px;
              right: 0px;
              z-index: 1;
              background: #e74c3c;
              width: 112px;
              height: 43px;
              padding: 8.5px 0;
              -webkit-border-radius: 100%;
              -moz-border-radius: 100%;
              border-radius: 2%;
              color: #FFFFFF;
              font-weight: 700;
              text-align: center;
              -webkti-box-sizing: border-box;
              -moz-box-sizing: border-box;
              box-sizing: border-box;
            }
            .post-module .thumbnail .date .day {
              font-size: 18px;
            }
            .post-module .thumbnail .date .month {
              font-size: 12px;
              text-transform: uppercase;
            }
            .post-module .thumbnail img {
              display: block;
              width: 100%;
              height: 100%;
              -webkit-transition: all 0.3s linear 0s;
              -moz-transition: all 0.3s linear 0s;
              -ms-transition: all 0.3s linear 0s;
              -o-transition: all 0.3s linear 0s;
              transition: all 0.3s linear 0s;
            }
            .post-module .post-content {
              position: absolute;
              bottom: 0;
              background: #FFFFFF;
              width: 100%;
              padding: 30px;
              -webkti-box-sizing: border-box;
              -moz-box-sizing: border-box;
              box-sizing: border-box;
              -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
              -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
              -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
              -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
              transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
            }
            .post-module .post-content .category {
              position: absolute;
              top: -34px;
              left: 0;
              background: #e74c3c;
              padding: 10px 15px;
              color: #FFFFFF;
              font-size: 14px;
              font-weight: 600;
              text-transform: uppercase;
            }
            .post-module .post-content .title {
              margin: 0;
              padding: 0 0 10px;
              color: #333333;
              font-size: 26px;
              font-weight: 700;
            }
            .post-module .post-content .sub_title {
              margin: 0;
              padding: 0 0 20px;
              color: #e74c3c;
              font-size: 20px;
              font-weight: 400;
            }
            .post-module .post-content .description {
              color: #666666;
              font-size: 14px;
              line-height: 1.8em;
            }
            .post-module .post-content .post-meta {
              margin: 30px 0 0;
              color: #999999;
            }
            .post-module .post-content .post-meta .timestamp {
              margin: 0 16px 0 0;
            }
            .post-module .post-content .post-meta a {
              color: #999999;
              text-decoration: none;
            }
            .hover .post-content .description {
              display: block !important;
              height: auto !important;
              opacity: 1 !important;
            }

            .container:before,
            .container:after {
              content: '';
              display: block;
              clear: both;
            }
            .container .column {
              width: 33%;
              padding: 0 25px;
              -webkti-box-sizing: border-box;
              -moz-box-sizing: border-box;
              box-sizing: border-box;
              float: left;
            }
            .container .column .demo-title {
              margin: 0 0 15px;
              color: #666666;
              font-size: 18px;
              font-weight: bold;
              text-transform: uppercase;
            }
            .container .info {
              width: 300px;
              margin: 50px auto;
              text-align: center;
            }
            .container .info h1 {
              margin: 0 0 15px;
              padding: 0;
              font-size: 24px;
              font-weight: bold;
              color: #333333;
            }
            .container .info span {
              color: #666666;
              font-size: 12px;
            }
            .container .info span a {
              color: #000000;
              text-decoration: none;
            }
            .container .info span .fa {
              color: #e74c3c;
            }



        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
              @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>





    <div class="container">
      <div class="info">
        <h1>Latest Episodes</h1>
      </div>
      <!-- Normal Demo-->


      @foreach($epi as $p)
      <div class="column">
        <!-- Post-->
        <div class="post-module">
          <!-- Thumbnail-->
          <div class="thumbnail">
            <div class="date">
              <div class="day">{{ $p->airingtime }}</div>
            </div>
            <img src="{{ url($p->thumbnail) }}"/>
          </div>
          <!-- Post Content-->
          <div class="post-content">
            <div class="category">Photos</div>
            <h1 class="title">{{ $p->title }}</h1>
            <p class="description">{{ $p->description }}</p>
          </div>
        </div>
      </div>
    @endforeach
      <!-- Hover Demo-->

    </div>



    </body>



</html>
