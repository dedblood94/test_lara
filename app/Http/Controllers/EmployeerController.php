<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employeer;

class EmployeerController extends Controller
{
    public function show()
    {
        return view('show',['data'=>Employeer::orderBy('id','desc')->take(10)->get()]);
    }
    public function create(Request $request){
        $employeer = new Employeer();
        $employeer->fname =$request->input('fname');
        $employeer->sname =$request->input('sname');
        $employeer->pname =$request->input('pname');
        $employeer->save();
        return redirect('/show');
    }
    public function update($id){
    $employeer = new Employeer();
    return view('update',['data'=>$employeer->find($id)]);
    }
    public function updateSubmit($id,Request $request){
        $employeer = Employeer::find($id);
        $employeer->fname =$request->input('fname');
        $employeer->sname =$request->input('sname');
        $employeer->pname =$request->input('pname');
        $employeer->save();
        return redirect('/show');
    }
    public function delete($id){
    $employeer = Employeer::find($id);
    $employeer->delete();
    return redirect('/show');
    }
    public function find(Request $request){
        $employeer = Employeer::where('fname', 'like', '%'.$request->fname.'%')->take(4)->get();
        return view('/find',['data'=>$employeer]);
    }
}
