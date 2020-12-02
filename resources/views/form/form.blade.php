<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario de Inscricao</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="form_cadastro/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
     <link rel="stylesheet" href="{{asset('form_cadastro/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="form_cadastro/vendor/date-picker/css/datepicker.min.css">
     <link rel="stylesheet" href="{{ asset('form_cadastro/vendor/date-picker/css/datepicker.min.css')}}">

		<!-- STYLE CSS -->
        <link rel="stylesheet" href="form_cadastro/css/style.css">
     {{-- <link rel="stylesheet" href="{{ asset('form_cadastro/css/style.css')}}"> --}}

	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="form_cadastro/images/form2.png" alt="">
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
	                    		<input type="text" name="name" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Seu Email:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="email" name="email" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Número de Telefone:
	                    	</label>
	                    	<div class="form-holder">
                                <input type="text"  name="phone" class="form-control">
                                  @if(session('msg_phone'))
        <div class = "alert alert-danger">
             {{session('msg_phone ')}}
        </div>
@endif
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Morada:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" name="address" class="form-control">
	                    	</div>
	                    </div>
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		Sexo:
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
									<label class="male">
										<input type="radio" name="gender" value="M" checked> Masculino<br>
										<span class="checkmark"></span>
									</label>
									<label class="female">
										<input type="radio" name="gender" value="F"> Feminino<br>
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
	                    		<select name="" id="" name="province" class="form-control">
                                    <option value="" class="option">Escolhe uma Opcao</option>
                                       @foreach($province as $value)
                                    <option value="{{$value->id}}" class="option">{{$value->province}}</option>
                                    @endforeach
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Distrito:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" name="distrit_id" class="form-control">
                                    <option value="" class="option">Escolhe Distrito </option>
                                      @foreach($distrit as $value)
									<option value="{{$value->id}}" class="option">{{$value->district}}</option>
                                     @endforeach
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
	                    		<select name="" id="" name="academic_leve" class="form-control">
									<option value="1" class="option">1 Ano</option>
									<option value="2" class="option">2 Ano</option>
									<option value="3" class="option">3 Ano</option>
									<option value="4" class="option">4 Ano</option>
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
	                    		<select name="" id="" name="institution" class="form-control">
                                    <option value="" class="option">Escolhe uma Opcao</option>
                                      @foreach($institution as $value)
                                    <option value="{{$value->id}}" class="option">{{$value->institution}}</option>
                                     @endforeach
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Nome do Curso:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" name="course" class="form-control">
                                    <option  class="option">Escolhe uma Opcao</option>
                                       @foreach($course as $value)
                                    <option value="{{$value->id}}" class="option">{{$value->course}}</option>
                                    @endforeach
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label for="">
	                    		Já participou do PFDD?
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" name="" class="form-control">
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

        {{-- <script src="form_cadastro/js/jquery-3.3.1.min.js"></script> --}}
      <script src="{{ asset('form_cadastro/js/jquery-3.3.1.min.js')}}"></script>


		<!-- JQUERY STEP -->
        <script src="form_cadastro/js/jquery.steps.js"></script>
      <script src="{{ asset('form_cadastro/js/jquery.steps.js')}}"></script>


		<!-- DATE-PICKER -->
        {{-- <script src="form_cadastro/vendor/date-picker/js/datepicker.js"></script> --}}
      <script src="{{ asset('form_cadastro/vendor/date-picker/js/datepicker.js')}}"></script>

        {{-- <script src="vendor/date-picker/js/datepicker.en.js"></script> --}}
      <script src="{{ asset('form_cadastro/vendor/date-picker/js/datepicker.en.js')}}"></script>


        {{-- <script src="form_cadastro/js/main.js"></script> --}}
      <script src="{{ asset('form_cadastro/js/main.js')}}"></script>


<!-- Template created and distributed by Colorlib -->
</body>
</html>
