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
}
