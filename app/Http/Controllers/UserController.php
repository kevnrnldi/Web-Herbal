<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //mengatur user


    public function index()
    {
        $data = User::get();

        if ($data->isEmpty()) {
            return view('index')->with('message', 'Data tidak ditemukan');
        }

        return view('index', compact('data'));
    }
}
