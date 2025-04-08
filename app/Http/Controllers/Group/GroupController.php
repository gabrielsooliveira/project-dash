<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Services\Group\GroupService;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $groupService;

    public function __construct(
        GroupService $groupService
    )
    {
        $this->groupService = $groupService;
    }

    public function index()
    {
        $data = $this->groupService->getAllUserGroups();
        return inertia('Dashboard/Group/Index', $data);
    }

    public function show()
    {
        return inertia('Dashboard/Group/Show');
    }
}
