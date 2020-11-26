<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario de Inscricao</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		{{-- <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css"> --}}
     <link rel="stylesheet" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
		<!-- DATE-PICKER -->
		{{-- <link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css"> --}}
     <link rel="stylesheet" href="{{ asset('vendor/date-picker/css/datepicker.min.css')}}">

		<!-- STYLE CSS -->
        {{-- <link rel="stylesheet" href="css/style.css"> --}}
     <link rel="stylesheet" href="{{ asset('css/style.css')}}">

	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="images/form2.png" alt="">
			</div>
            <form action="">
            	<div class="form-header">
            		<a href="#">PFDD - 16 Anos Impulsionando o Desenvolvimento Sustentavel do Distrito</a>
            		<h3>INSCREVA-SE</h3>
            	</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 26px;">
	                    	<label for="">
	                    		Nome Completo:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Seu Email:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Número de Telefone:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Morada:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Sexo:
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
									<label class="male">
										<input type="radio" name="gender" value="male" checked> Masculino<br>
										<span class="checkmark"></span>
									</label>
									<label class="female">
										<input type="radio" name="gender" value="female"> Feminino<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>
	                </section>

					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row">
	                    	<label for="">
	                    		Data de Nascimento:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp1">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Província:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
									<option value="" class="option">Tete</option>
									<option value="" class="option">Sofala</option>
									<option value="" class="option">Maputo</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Distrito:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
									<option value="" class="option">Distrito1</option>
									<option value="" class="option">Distrito2</option>
									<option value="" class="option">Distrito3</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                </section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row">
	                    	<label for="">
	                    		Nível Académico:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
									<option value="" class="option">1 Ano</option>
									<option value="" class="option">2 Ano</option>
									<option value="" class="option">3 Ano</option>
									<option value="" class="option">4 Ano</option>
									<option value="" class="option">Licenciado</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Nome da Universidade:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
									<option value="" class="option">UCM</option>
									<option value="" class="option">UZ</option>
									<option value="" class="option">UP</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Nome do Curso:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
									<option value="" class="option">Informatica</option>
									<option value="" class="option">UZ</option>
									<option value="" class="option">UP</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Já participou do PFDD?
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
									<option value="" class="option">Sim</option>
									<option value="" class="option">Não</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                </section>
            	</div>
            </form>
		</div>

        {{-- <script src="js/jquery-3.3.1.min.js"></script> --}}
      <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>


		<!-- JQUERY STEP -->
        <script src="js/jquery.steps.js"></script>
      <script src="{{ asset('js/jquery.steps.js')}}"></script>


		<!-- DATE-PICKER -->
        <script src="vendor/date-picker/js/datepicker.js"></script>
      <script src="{{ asset('vendor/date-picker/js/datepicker.js')}}"></script>

        {{-- <script src="vendor/date-picker/js/datepicker.en.js"></script> --}}
      <script src="{{ asset('vendor/date-picker/js/datepicker.en.js')}}"></script>


        <script src="js/main.js"></script>
      {{-- <script src="{{ asset('js/main.js')}}"></script> --}}


<!-- Template created and distributed by Colorlib -->
</body>
</html>
