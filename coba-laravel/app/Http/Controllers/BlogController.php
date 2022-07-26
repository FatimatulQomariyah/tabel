<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            "blog" => blog::all()
        ]);  
    }
}
