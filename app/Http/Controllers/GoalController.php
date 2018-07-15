<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\goal;
use DB;


class GoalController extends Controller
{
    public function postAddGoal(Request $request){
     $this->validate($request,['goal'=>'required','checklist'=>'required']);
     $goal_name=$request['goal'];
     $checklist=$request['checklist'];
     $today=date('Y-m-d');
     

     $goal = new goal();
     $goal->goal=$goal_name;
     $goal->checklist=$checklist;
     $goal->status='PENDING';
     $goal->start=$today;
     $goal->finish='1002-1-1';
     $goal->remarks="NULL";
     $goal->score="0";
     $goal->save();

     return redirect()->route('seegoals');
    }
    public function getGoals(){
        
        
    	$goals = goal::all();
    	
    	return view('/index', ['goals'=>$goals] );
    }
    public function postDeleteGoal($id){
        DB::delete('delete from goals where id=?',[$id]);
        return redirect()->route('seegoals');
    }
    public function accomplishAssesment($id){
        $goal=DB::select('select *from goals where id=?',[$id]);
        return view('accomplish', ['goal'=>$goal]);
    }
    public function postAccomplishGoal(Request $request,$id){
        $this->validate($request,['remarks'=>'required']);
        $score=$request['score'];
        $remarks=$request['remarks'];
        $today=date('Y-m-d h:i:s');
        $status='DONE';
        DB::update('update goals set finish=?,status=?,score=?,remarks=? where id=?',[$today,$status,$score,$remarks,$id]);
        return redirect()->route('seegoals');
    }
}
