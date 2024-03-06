<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerPage extends Controller
{
    public function home() { 
        return 'Welcome'; 
    } 

    public function about() { 
        return 'Name: Azahra Salsabila <br> NIM: 2241720073'; 
    } 

    public function articles($id) { 
        return "Article Page with ID $id"; 
    } 
}
