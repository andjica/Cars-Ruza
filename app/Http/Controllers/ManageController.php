<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ManageController extends Controller
{
    public function get_admin(){
        return view('pages.admin.index');
    }
    public function add_cars(){
        return view('pages.admin.add_cars');
    }
    public function manage_enegine_type(){
        return view('pages.admin.manage_engine_type');
    }
    public function manage_colors(){
        return view('pages.admin.manage_colors');
    }
}