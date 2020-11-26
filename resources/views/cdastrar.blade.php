<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>laravelSample</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css')}}">
         <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css')}}">
         <link rel="stylesheet" href="{{ asset('css/styles.min.css')}}">
</head>

<body>
    <div class="container">
        <h1>Cadastrar</h1>
        <form style="width: 50%;"   method="POST" action="{{url('save')}}">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        {{-- <input class="form-control inputs"  name="name" type="text" value=""> --}}
            <label>name</label>
            <input class="form-control inputs"  name="name" type="text" placeholder="name">
             <label>password</label>
            <input class="form-control inputs" type="password" name="password" placeholder="password">
             <label>email</label>
            <input class="form-control inputs" type="email" name="email" placeholder="email">

            <button class="btn btn-primary inputs"type="submit">cadastrar</button>
        </form>



               <div class="table-responsive" id="erro">


                @if(!empty($user) && count($user)>0)
                        <table class="table table-striped table-bordered table-hover" id="dt_studant">
                            <thead>
                                <tr class="info">

                                    <th>Nome</th>
                                    <th>Email</th>

                                    <th style="width:100px">Acção </th>
                                </tr>
                            </thead>
                            <tbody id="results">

                             @foreach( $user as $dados )
                                <tr>


                                    <td>
                              {{$dados->name}} </td>
                                     <td>
                                 {{$dados->email}}
                                    </td>


                                  <td style="width: auto;">
                                          <a class="btn btn-info btn-xs " href="{{ url("edit/{$dados->id}") }}" ><i class="fa fa-edit"></i></a>
                                          <a class="btn btn-danger btn-xs " href="{{ url("delete/{$dados->id}") }}" ><i class="fa fa-edit"></i></a>


                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                        <div id="">{!!$user->links()!!}</div>
                          @else
                    <div class="well" id="">
                        <h1> Funcionario não encontrado</h1>
                    </div>
                          @endif
                    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
