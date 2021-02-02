<?php

namespace App\Http\Controllers;

use App\Models\LoginCreator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class LoginCreatorController extends Controller
{
    public function index(){

        $logins = LoginCreator::latest()->get();
        return view('login_creator.index', ['logins' => $logins]);
    }

    public function edit($id){

        $login_creator = LoginCreator::find($id);
        return view('login_creator.edit', compact('login_creator'));
    }

    public function update($id){
        request()->validate([
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'login' => 'required|min:3|max:10',
            'password'=> 'required|min:3|max:10',
        ]);

        $login_creator = LoginCreator::find($id);

        $login_creator->first_name = request('first_name');
        $login_creator->last_name = request('last_name');
        $login_creator->save();

        return redirect('/spp/login-creator');
    }

    public function test(Request $request){
        $checkedCheckboxes = $request->input('fields', []);

        $login_prints = LoginCreator::find($checkedCheckboxes);
        $test = 'test';

        return view('login_creator.print', ['login_prints' => $login_prints]);
    }

    public function print_logins(){
        $pdf = PDF::loadView('login_creator.pdf-view.index', compact('login_prints'));
//        $pdf->setOption('margin-top', '5');
//        $pdf->setOption('margin-left', '5');
        $pdf->setOption('dpi', '300');
        $pdf->setOption('page-size', 'a4');
        return $pdf->stream('invoice.pdf');
    }
}
