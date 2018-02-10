<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class ToDoController extends Controller
{
    //
    public function index(){
    	$tasks =Task::all();
    	return view('todo.index',['tasks'=>$tasks]);
     
    }
    public function create(Request $request){
    	if($request->input('task'))
    	{
    		echo "hii";
    		$task=new Task;
    		$task->content=$request->input('task');
    		$task->save();
    	}
    	return redirect()->back();
    }
    public function update($id){
    	$task=new Task;
    	$task->toggleStatus();
    	$task->save();
    	return redirect()->back();	
    }
    public function delete($id){
    	$task=Task::find($id);
    	$task->delete();
    	return redirect()->back();
    }
}
