<?php

namespace App\Http\Controllers\default;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $tasks = (new TasksController)->index();
        return view('pages.home',compact('tasks'));
    }
}
