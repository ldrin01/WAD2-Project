<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        $user =User::where('name',Auth::user()->name)->first();
        $units = $user->units;
        return view('home',compact('units'));
    }

    /**
     * redirect to add unit form.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function addTry(Request $request)
    {
        return view('addUnit');
    }
    public function addingPro(Request $request)
    {
        $unit = new Unit($request->all());

        Auth::user()->units()->save($unit);

        \Session::flash('flash_message','You successfuly added a new unit ');
        return redirect('home');
    }
    public function upDate($id)
    {
        $unit = Unit::findOrFail($id);

        return view('upDate',compact('unit'));
    }
    public function save(Request $request, $id)
    {
        $unit = Unit::findOrFail($id);
        $unit->upDate($request->all());

        return redirect('home');
    }
    public function delete($id)
    {
        $units = Unit::find($id)
        ->delete();

        \Session::flash('flash_message','Deleted');       
       return redirect('/home');
    }
    public function about(){
        return view('aboutUs');
    }
    public function help(){
        return view('help');
    }
}