<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {

        return view('admin.categories.show', compact('user'));
    }
}
