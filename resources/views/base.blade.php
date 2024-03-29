<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caffeinsearch - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .navbar{
            background-color: #A4907C;
        }


        .footer{
            background-color: #A4907C;
        }


        .loginBtn{
            background-color: #F1DEC9;
        }


        .isiFilter{
            border-radius: 10px;
        }

        .btnFull{
            background-color: #C8B6A6;
            color: white;
            padding: 10px;
            font-weight: 500;
        }


        .btnOut{
            border: 1px solid #C8B6A6;
            color: #C8B6A6;
            padding: 10px;
            font-weight: 500;
        }

        #content {
        }

        /*** Direct Element Rules ***/

        .filter .dropdown > button {
            width: 100%;
        }

        #carousel .carousel-item > img {
            max-height: 600px;
        }

        /* START m-card-container */
        #m-card-container > .card {
            width: 250px;
            /* display: inline-block; */
        }
        /* END m-card-container */

        /* START content */
        #content > h1, #content > h3 {
            margin-bottom: 24px;
        }

        #content > h3 {
            margin-top: 24px;
        }
        /* END content

    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg py-4 px-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">'Logo Caffeinsearch'</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Feeds</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
            </ul>
              <button class="loginBtn btn" type="submit">Sign In</button>
          </div>
        </div>
      </nav>

      <div class="content">
        @yield('content')
      </div>

    <footer class="footer text-center py-4 ">
        <h6>&#169 Caffeinsearch 2023</h6>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
