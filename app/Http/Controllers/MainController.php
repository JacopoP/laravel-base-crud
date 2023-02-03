<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    public function Home(){
        $saints = Saint::all();
        $data = [
            'saints' => $saints,
        ];
        return view('pages.home', $data);
    }

    public function selectSaint($id){
        $saint = Saint::find($id);
        $data = [
            'saint' => $saint
        ];
        return view('pages.show_saint', $data);
    }

    public function goToCreateSaint(){
        return view('pages.form');
    }

    public function addSaint(Request $request){
        $data = $request->all();

        $saint = new Saint();
        $saint->name = $data['name'];
        $saint->miracles_number = $data['miracles_number'];
        $saint->santification_date = $data['santification_date'];
        $saint->birthplace = $data['birthplace'];

        $saint->save();

        return redirect() -> route('home');
    }

    public function deleteSaint($id){
        $saint = Saint::find($id);
        $saint -> delete();
        return redirect() -> route('home');
    }
}
