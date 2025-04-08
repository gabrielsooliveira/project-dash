<?php

namespace App\Services\Group;

use App\Models\Group;
use Illuminate\Support\Facades\Auth;

class GroupService
{
    public function getAllUserGroups()
    {
       dd(Group::with('users')->where('user_id', Auth::id())->get());
        return $teste;
    }
}
