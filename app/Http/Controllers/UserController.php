<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index'); // Load the Blade view
    }

    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $users = User::select(['id', 'name', 'email', 'created_at']);

            return DataTables::of($users)
                ->addColumn('action', function ($user) {
                    return '<a href="/users/edit/' . $user->id . '" class="btn btn-sm btn-primary">Edit</a>';
                })
                ->rawColumns(['action']) // Allow HTML in 'action' column
                ->make(true);
        }
    }
}
