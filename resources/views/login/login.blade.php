<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="login/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login/css/style.css">
	<link rel="stylesheet" type="text/css" href="login/css/font-awesome.css">
</head>
<body>
	<div class="container px-4 py-5 mx-auto">
	    <div class="card card0">
	        <div class="d-flex flex-lg-row flex-column-reverse">
	            <div class="card card1">
	                <div class="row justify-content-center my-auto">
	                    <div class="col-md-8 col-10 my-5">
	                        <div class="form-group">
	                        	<label class="form-control-label text-muted"><h5>E-mail</h5></label>
	                        	<input type="text" id="email" name="email" placeholder="Seu email" class="form-control">
	                        	</div>
	                        <div class="form-group">
	                        	<label class="form-control-label text-muted"><h5>Senha</h5></label>
	                        	<input type="password" id="psw" name="psw" placeholder="Sua senha" class="form-control">
	                        </div>
	                        <div class="row justify-content-center my-3 px-3">
	                        	<button class="btn-block btn-color">Login </button>
	                        </div>
	                        <div class="row justify-content-center my-2"> <a href=" {{url('/reset_password') }}"><small class="text-muted">Esqueseu a Senha?</small></a> </div>
	                    </div>
	                </div>
	                <!--<div class="bottom text-center mb-5">
	                    <p href="#" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2">Create new</button></p>
	                </div> -->
	            </div>
	            <div class="card card2">
	                <div class="my-auto mx-md-5 px-md-5 right">
	                    <h3 class="text-white">We are more than just a company</h3> <small class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<script src="login/js/jquery-3.2.1.min.js"></script>
	<script src="login/login/js/bootstrap.min.js"></script>
	<script src="login/js/bootstrap.bundle.min.js"></script>
</body>
</html>