<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Pagina inicial
    public function index(){
        return view('index')->with('posts',Post::orderBy('updated_at','DESC')->get());
    }
}
