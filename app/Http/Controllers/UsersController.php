<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use DateTime;
use PDOException;
// use DB;

class UsersController extends Controller
{

    public function index()
    {
        //
        $member  = DB::select('CALL view_member()');
        return view('', compact('member'));
    }
    //pfdd.epizy.com
    //    senha ailina!@20$20
    // user epiz_27296552:

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $distrit = DB::table('district')->get();
        $province = DB::table('province')->get();
        $institution = DB::table('institution')->get();
        $course = DB::table('course')->get();
        $address = DB::table('address')->get();

        return view('form.form', compact('distrit', 'course', 'province', 'address', 'institution'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $year = new DateTime();
        $reg_date = $year->format('YYYY-MM-dd');
        $name = $request->name;
        $email = $request->email;
        $gender = $request->gender;
        $date_birth = $request->date_birth;
        $distrit_id = $request->distrit_id;
        $acdemic_leve = $request->academic_leve;
        $course_id = $request->course_id;
        $category = $request->category_id;
        // $request->reg_date;
        $phone = $request->phone;
        $province = $request->province;

        $phone = '84222';
        $category = '0';
        $date_birth = '2020-10-22';
        $gender = 'm';
        $email = 'asajsjs@gmail.co';
        $name = 'ad';
        $acdemic_leve = 'primw';
         $verify_phone=  DB::select('select phone from contact ');
        if(count($verify_phone)>0){

        return redirect()->back()->with('msg_phone', 'Este numero de telefone ja existe.');
        }

        try {
            //chamndo stror procedure ou forma que eu vinha fazendo usando array

            $member = [
                'nome' => $name,
                'email' => $email,
                'gender' => $gender,
                'date_birth' => $date_birth,
                'Academic_level' => $acdemic_leve,
                'distrit_id' => $distrit_id,
                'course_id ' => $course_id,

            ];
            DB::table('members')->insert($member);

            // DB::select('SELECT insert_new_member(?,?,?,?,?,?,?,?,?)',  [
            //     'nome' => $name,
            //     'email' => $email,
            //     'gender' => $gender,
            //     'date_birth' => $date_birth,
            //     'Academic_level' => $acdemic_leve,
            //     'distrit_id' => $distrit_id,
            //     'course_id ' => $course_id,

            // ]);
            // return;

            $ultimo_id = DB::select('select * from members ');
            $id_ultimo_iserido = collect($ultimo_id)->max('id');
            DB::select('call insert_phone(?,?)', [$phone,  $id_ultimo_iserido]);

            // echo "deu certo";
            return redirect()->back() - with('msg', 'submissao com sucesso');
        } catch (\PDOException $e) {
            return redirect()->back()->with('msgErr', 'ocorreu um ' . $e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users, $id)
    {
        //
        $data_member = $users::find($id);
        return view('', compact('data_member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        $id = $request->id;
        $Dados = Users::find($id);
        $year = new DateTime();
        $reg_date = $year->format('YYYY-MM-dd');
        $name = $request->name;
        $email = $request->email;
        $gender = $request->gender;
        $date_birth = $request->date_birth;
        $distrit_id = $request->distrit_id;
        $acdemic_leve = $request->academic_leve;
        $courseid = $request->course_id;
        $category = $request->category_id;
        $request->reg_date;
        //ecolher  o que a peesoa tem permissao de alterar
        try {
            DB::select('CALL update_member(?,?,?,?,?,?,?,?)', [
                $name, $email,

                $gender, $date_birth, $distrit_id, $acdemic_leve, $courseid, $id
            ]);
        } catch (PDOException $e) {
            return redirect()->back()->with('msg_err', 'Ocorreu um erro de:\n' . $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users, $id)
    {
        //
        // $data_to_delete = $users::find($id);


        // $data_to_delete->category_id = '';
        // $data_to_delete->update();
        DB::select('call alter_user_category(?,?)', ['0', $id]);
        return redirect()->back();
    }
}
