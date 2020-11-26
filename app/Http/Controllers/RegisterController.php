<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('index');
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
        $courseid = $request->course_id;
        $category = $request->category_id;
        // $request->reg_date;
        $phone = $request->phone;

        $phone = '84222';
        $category = '0';
        $date_birth = '2020-10-22';
        $gender = 'm';
        $email = 'asajsjs@gmail.co';
        $name = 'ad';
        $acdemic_leve = 'primw';
        try {
       
            DB::select('call insert_new_member(?,?,?,?,?,?,?,?,?)', [
                $name,
                $email,
                $gender,
                $date_birth,
                $distrit_id,
                $acdemic_leve,
                $courseid,
                $category,
                $reg_date
            ]);
            return;

            $ultimo_id = DB::select('select * from members ');
            $id_ultimo_iserido = collect($ultimo_id)->max('id');
            DB::select('call insert_phone(?,?)', [$phone,  $id_ultimo_iserido]);

            echo "deu certo";
            return redirect()->back() - with('msg', 'submissao com sucesso');
        } catch (\PDOException $e) {
            return redirect()->back()->with('msgErr', 'ocorreu um ' . $e);
        }


    }






















































































































    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {
        //
    }
}
