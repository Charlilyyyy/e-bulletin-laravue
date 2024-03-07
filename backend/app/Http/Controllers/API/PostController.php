<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return [
            [
                'user' => 'taufik',
                'description' => 'im bored, lets hangout kfc',
                'date' => '23-05-2023',
                'time' => '12:34'
            ],
            [
                'user' => 'kai',
                'description' => 'who knows how to sing',
                'date' => '23-05-2023',
                'time' => '12:32'
            ],
            [
                'user' => 'zach',
                'description' => 'i just bought new ps5',
                'date' => '23-05-2023',
                'time' => '12:30'
            ]
        ];
    }
}
