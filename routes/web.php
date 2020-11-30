<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {


    $phone = '8422133';
    $category = '0';
    $date_birth = '2020-10-22';
    $gender = 'm';
    $email = 'asajsjs@gmail.co';
    $name = 'ad';
    $acdemic_leve = 'primw';
    $distrit_id=1;
    $course_id=1;
    $category_id=null;
    $year = new DateTime();



    //  $member = [
    //                 'nome' => $name,
    //                 'email' => $email,
    //                 'gender' => $gender,
    //                 'date_birth' => $date_birth,

    //         'Academic_level' =>'m',

    //             ];
    //             DB::table('members')->insert($member);

    // $last_id= (DB::select(
    //     'SELECT insert_new_member(?,?,? ,?,?,? ,?,?,?) '
    // , [
    //         $name,
    //         $email,
    //         $gender,
    //         $date_birth,
    //         $distrit_id,
    //          $acdemic_leve,

    //         $course_id,
    //         $category_id,
    //         $year,
    //     ]

    // ));
    // dd($last_id);
    // die;
    // return   $last_id;
    //   DB::select( collect('CALL $insert_new_member(?,?,?,?, ?) '
    // , [

    //         $name,
    //         $email,
    //         $gender,
    //         $date_birth,
    //          $acdemic_leve

    //     ]));
    //     return;


        // $ultimo_id = DB::select('select * from members ');
        // $id_ultimo_iserido = collect($ultimo_id)->max('id');
        // // dd($id_ultimo_iserido);
        // // die;
        // DB::select('call insert_phone(?,?)', [$phone,  $id_ultimo_iserido]);

        // echo "deu certo";
    return view('layouts.index');
});



;
 route::get('cadastrar', [UsersController::class, 'create']);
route::post('Cadastrado', [UsersController::class, 'store']);
route::get('desabled_member', [UsersController::class, 'destroy']);

route::get('login', [LoginController::class, 'create']);











