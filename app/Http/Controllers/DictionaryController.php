<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function showDictionary(){
        return view('dictionary');
    }

    public function translate(Request $request){
        $notSearch = 'not search';
        $arrayVietnamese = ['chao', 'Linh', 'bai'];
        $arrayEnglish = ['hello', 'Handsome', 'goodbye'];
        $input = $request->vietnam;
        foreach ($arrayVietnamese as $key => $item){
            if ($input == $arrayVietnamese[$key]){
                return $arrayEnglish[$key];
            }
        }
        return view('translate', compact('notSearch'));
    }
}
