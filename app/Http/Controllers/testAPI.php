<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testAPI extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'name' => 'Test API',
            'email' => 'test@example.com'
        ];
        return response()->json($data);
    }
}
