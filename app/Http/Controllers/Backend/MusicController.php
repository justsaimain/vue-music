<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        return view('backend.music.index');
    }

    public function fetchMusic()
    {
        return 'Fetch';
    }
}
