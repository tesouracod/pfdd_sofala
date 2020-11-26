<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;

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

    // // $year = new DateTime();
    // // $reg_date = $year->format('YYYY-MM-dd');
    // // $name = $request->name;
    // // $email = $request->email;
    // // $gender = $request->gender;
    // // $date_birth = $request->date_birth;
    // // $distrit_id = $request->distrit_id;
    // // $acdemic_leve = $request->academic_leve;
    // // $courseid = $request->course_id;
    // // $category = $request->category_id;
    // // // $request->reg_date;
    // // $phone = $request->phone;

    // $phone = '8422133';
    // $category = '0';
    // $date_birth = '2020-10-22';
    // $gender = 'm';
    // $email = 'asajsjs@gmail.co';
    // $name = 'ad';
    // $acdemic_leve = 'primw';

    // // //chamndo stror procedure ou forma que eu vinha fazendo usando array
    // // // $member = [
    // // //     'nome' => $name,
    // // //     'email' => $email,
    // // //     'gender' => $gender,
    // // //     'date_birth' => $date_birth,
    // // //     'distrit_id' => $distrit_id,
    // // //     'acdemic_leve' => $acdemic_leve,
    // // //     'courseid' => $courseid,
    // // //     'category' => $category,
    // // //     'reg_date' => $reg_date,
    // // // ];
    // // // DB::table('members')->insert($member);
    // // //  $member = [
    // // //                 'nome' => $name,
    // // //                 'email' => $email,
    // // //                 'gender' => $gender,
    // // //                 'date_birth' => $date_birth,

    // // //         'Academic_level' =>'m',

    // // //             ];
    // // //             DB::table('members')->insert($member);

    // $last_id= collect(DB::select('SELECT insert_new_member(?,?,?,?) ', [
    //         $name,
    //         $email,
    //         $gender,
    //         $date_birth,

    //     ]));
    //     return $last_id;


    // //     $ultimo_id = DB::select('select * from members ');
    // //     $id_ultimo_iserido = collect($last_id)->max('id');
    // //     dd($id_ultimo_iserido);
    // //     die;
    // //     DB::select('call insert_phone(?,?)', [$phone,  $id_ultimo_iserido]);

        // echo "deu certo";
    return view('layouts.index');
});



;
 route::get('cadastrar', [UsersController::class, 'create']);
route::post('Cadastrado', [UsersController::class, 'store']);
route::get('desabled_member', [UsersController::class, 'destroy']);










