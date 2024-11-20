<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product_detailController extends Controller
{
    public function index(){
        return view("frontend.Product_detail");
    }
}
