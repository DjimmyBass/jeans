<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Coiff'Connect</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/login.css')}}" rel="stylesheet">
<link href="{{asset('css/logins.css')}}" rel="stylesheet">


  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Coiff'Connect</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="limiter">
    <div class="container-login100">



        <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
            <form class="login100-form validate-form p-b-33 p-t-5">

                <div class="wrap-input100 validate-input" data-validate = "Coiffeur / Client">
                    <input class="input100" type="text" name="Coiffeur / Client" placeholder="Coiffeur / Client">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="User name">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
                <br>
                <a href="{{route('registerpage')}}">
                    <h3 style="text-align: center">
                    Créer un compte
                    </h3>
                </a>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<section class="contact-section bg-black">
    <div class="container">



        <div class="social d-flex justify-content-center">
            <a href="#" class="mx-2">
                <img src="{{asset('icon/facebook.png')}}" alt="">
            </a>
            <a href="#" class="mx-2">
                <img src="{{asset('icon/twitter.png')}}" alt="">
            </a>
            <a href="#" class="mx-2">
                <img src="{{asset('icon/instagram.png')}}" alt="">
            </a>

        </div>

    </div>
</section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
Copyright &copy; Mon Site 2019
</div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <!-- Plugin JavaScript -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/fontawesome.min.js')}}"></script>

  <script src="{{asset('js/popper.min.js')}}"></script>
  <!-- Custom scripts for this template -->
  <script src="{{asset('js/holder.min.js')}}"></script>

  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>


