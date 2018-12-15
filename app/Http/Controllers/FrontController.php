<?php

namespace App\Http\Controllers;
use App\Category;
use App\Models;
use App\Motor;
use App\Upholstery;
use App\Car;
use App\Color;

class FrontController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view ('pages.index',compact('categories'));
    
    }

    public function show_category(Category $category){
        
        return view('pages.cars', compact('category'));
    }

    public function cars_filter(){

        return view('pages.models');
    }
    public function get_engine(){
        $motors = Motor::all();
        return view('pages.engine',compact('motors'));
    }
    public function get_trim(){
        $class = Upholstery::all();
        return view('pages.trim',compact('class'));
    }
    public function get_picker(){
        $colors = Color::all();
        return view('pages.picker',compact('colors'));
    }
    public function get_offerte(){
        return view('pages.offerte');
    }

    public function sorted_cars()
    {
        return view('pages.sorted_cars');
    }

    public function sorted_cars_ajax()
    {
        $gearshift = request('gearshift');

        $cars = Car::with(['colors' => function($q){
            $q->where('id',request('color'));
        }])->whereHas('motor', function ($query) {
            $query->where([
                    'category_id' => request('category'),
                    'gearshift' => request('gearshift'),
                    'type' => request('type'),
                    'benzine' => request('benzine')
                    ]);})->whereHas('colors', function($q)
                    {
                        $q->where('id','=',request('color'));
                    })->get();
        
        return $cars;
    }
    
}


