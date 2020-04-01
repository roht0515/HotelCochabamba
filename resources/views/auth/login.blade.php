<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
<!-- Styles -->
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>


 <style>
     .border-red
     {     
       border: 0.5px red solid;
     }
     .letter-red{
         color: red;
       
     }
  
  .hidden
     {
      display: none;
     }
 </style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
          
			<div class="wrap-login100 ">
           
				<div class="login100-pic js-tilt" data-tilt>
                    <span class="login100-form-title">¿Eres nuevo aqui?</span>
                    <h6 class="">registrate y descubre varias ofertas para su hospedaje</h6>
                  <!--  <img src="/images/img-01.png" alt="IMG">  -->
                    <div class="text-center p-t-30">
						<a class="txt2" href="{{ route('register') }}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</div>

                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100  @error('email') border-red  @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Email">                     
                                         
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        
                    </div>
                    @error('email')
                 
                    <span id="span-email" class="txt2 letter-red"  role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   
                     @enderror 

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" >

                        @error('password')
                          <span class="txt2 red" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button  type="submit"  class="login100-form-btn">
							Login
                        </button>              
					</div>

                    @if (Route::has('password.request'))
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
                        </span>
                        <a class="txt2" href="{{ route('password.request') }}">
                            {{ __('Username / Password?') }}
                        </a>	
					</div>
                    @endif
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
        
        $(document).on("keyup", "input", function() {
        $("#span-email").removeClass("letter-red");
        $("#span-email").addClass("hidden");
        $("input").removeClass("border-red");
        
    });
    
	</script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>
 
     
</body>
</html>