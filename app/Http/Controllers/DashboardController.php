<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index() {
    //     $cars = Car::all();

    //     if($cars->number_type == 'خصوصي') {
    //         $count = Car::all()->count();
    //         dd($count);
    //     }
        
        
        
        

    // }
    
    // $value1 , $value2 , $value3 , $value4
    
    public function dataChart (){
        $data = [
            'value3' => Car::where('number_type' , 'حمل' )->count(),
            'value2' => Car::where('number_type' , 'أجرة' )->count(),
            
            'value1' => Car::where('number_type' , 'خصوصي' )->count(),
            'value4' => Car::where('number_type' , 'حكومي' )->count(),
            
            ];
        return view ('dashboard' , compact('data'));

            return view ('dashboard');

    }
}
