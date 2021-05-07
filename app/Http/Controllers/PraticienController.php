<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Praticien;

class PraticienController extends Controller
{
    public function liste(){
        return view("viewpraticien", ["prat" => Praticien::all()]);
    }
}