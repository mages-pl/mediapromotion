<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Role;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class UsersController extends Controller
{
    //]
    public function usersmanage() {
       // $users = DB::table('users')->latest()->paginate(10);
       $users = User::latest()->get();
// $roles = DB::table('roles')->where('user_id',$users['id'])->get();
        return view('users.usersmanage')->with('users',$users);
    }
    public function edit($id) {
        
        $role_usera = Role::pluck('nazwa_roli','id');

        $edycja_usera = User::find($id);


        return view('users.edit')->with('edycja_usera',$edycja_usera)->with('role_usera',$role_usera);
    }
    public function update($id, CreateUserRequest $request)  {

       // dd($request->all());
            $user = User::find($id);

            $user->update($request->all());

        return redirect('/usersmanage');
    }
}
