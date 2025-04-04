<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return inertia('Dashboard/Group/Index');
    }

    public function show()
    {
        return inertia('Dashboard/Group/Show');
    }
}
