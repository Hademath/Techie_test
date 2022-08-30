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
         
           if(!$student){
            $recordScore = Subject::create([
            'name' => $firstname,
            'user_id' => $id,
            'maths' => $maths,
            'english' => $english,
            'physics' => $physics,
             'chemistry' => $chemistry,
             'history'=> $history,

                  ]);
           }else{
             $recordScore = Subject::where('user_id', $id)->update([
            'name' => $firstname,
            'user_id' => $id,
            'maths' => $maths,
            'english' => $english,
            'physics' => $physics,
            'chemistry' => $chemistry,
            'history'=> $history,

        ]);
           }
       
   
           
            $User_subject = Subject::where('user_id', $id)->get()->first();
            $math = $User_subject->maths;
            $english = $User_subject->english;
            $physics = $User_subject->physics;  
            $chemistry = $User_subject->chemistry;
            $history = $User_subject->history;
            $total =array_sum([$math+$english+$physics+$chemistry+$history]);
            $mean_score = $total /5;
            $median_score = $total/2;
          
            // dd($total);
        
             if(!$User_subject){
                  $record=  Score::create([
                'total_score'=>$total,
                'student_id'=>$id,
                'mean_score'=>$mean_score,
                'median_score'=> $median_score,
            ]);
             }else{
                  $record=  Score::where("student_id", $id)->update([
                'total_score'=>$total,
                'student_id'=>$id,
                'mean_score'=>$mean_score,
                'median_score'=> $median_score,
            ]);
             }
        


    //          try{
    //    $record=  Score::create([
    //            'toatal_score'=>89.90,
           //     'student_id'=>$id,
    //         ]);
    //         }catch (\Illuminate\Database\QueryException $exception){

    //      dd($exception->getMessage());
    // }

        
        
        
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
