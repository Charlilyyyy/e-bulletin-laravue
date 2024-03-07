<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return [
            'user' => 'taufik',
            'description' => 'im bored, lets hangout kfc',
        ];
    }
}
