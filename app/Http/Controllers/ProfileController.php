<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Asraful Islam";
        $age = "40";

        $respose = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        Cookie::queue(
            'access_token', 
            '123-XYZ',      
            1,              
            '/',            
            $_SERVER['SERVER_NAME'], 
            false,         
            true          
        );        
        return response()->json($respose, 200);
    }
}

