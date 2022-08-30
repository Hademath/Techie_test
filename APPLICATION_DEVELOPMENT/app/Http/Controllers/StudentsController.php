<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Subject;
use App\Models\Score;
use Illuminate\Support\Facades\DB;
class StudentsController extends Controller
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
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $newStudent = Students::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'sex' => $request->sex,
            'age' => $request->age,
             'class' => $request->class,

        ]);

        return redirect('students/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
          $students = Students::all(); 
	        return view('students', [
            'students' => $students,
        ]);
    }
  public function register()
    {
          $students = Students::all(); 
	        return view('register', [
            // 'students' => $students,
        ]);
    }
     public function student_record($id)
    {
          $students = Students::where('id', $id)->first();
          $firstname  =$students->firstname;
          $lastname =$students->lastname;

	        return view('record', [
        ]);
    }
  public function student_score($id, Request $request)
    {
          $student = Students::where('id', $id)->first();
          $firstname = $student->firstname;
          $lastname = $student->lastname;
          $maths=$request->maths;
          $english=$request->english;
          $physics =$request->physics;
          $chemistry=$request->chemistry;
          $history=$request->history;

           $recordScore = Subject::create([
            'name' => $firstname,
            'user_id' => $id,
            'maths' => $maths,
            'english' => $english,
            'physics' => $physics,
             'chemistry' => $chemistry,
             'history'=> $history,

        ]);
        if($recordScore){
            $recordScore=[];
            // $totalScore = Subject::where('user_id', $id)->sum(DB::raw('maths + english + physics + chemistry + history'));

              $totalScore = DB::table('subjects')->where('user_id', $id)->get();
              $total = ($totalScore->sum($maths+ $english+ $physics + $chemistry+ $history));
            Score::create([
                'student_id'=>$id,
                'toatal_score'=>$total,
            ]);
        }
        
        
        return redirect('students/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
