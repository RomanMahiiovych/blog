<?php
/**
 * Created by PhpStorm.
 * User: Ragnar
 * Date: 14.10.2019
 * Time: 16:54
 */

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class AdminController
{
    public function index(){
        $users = User::all();

        return view('admin', [
            'users' => $users]);
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $user = User::create([
            'userId' => $request->get('userId'),
            'roleId' => $request->get('roleId')
        ]);
        if (!$user){
            return redirect()->back();
        }
        $request->session()->flash('flesh_message', 'Users role create');
        return redirect()->route('admin');
    }

    public function show($id){
        $user = User::findOrFail($id);
        $userRole = $user->roles[0];
        return view('admin.show', [
            'user' => $user,
            'role' => $userRole
        ]);
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $userRole = $user->roles[0];
        return view('admin.edit', [
            'user' => $user,
            'role' => $userRole
        ]);
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $userRole = $user->roles[0]->id;
        /*dd($userRole);*/
        if(is_integer($userRole)) {
            dd($userRole);
            /*$userRole->fill($request->all());*/
        }
        if(!$userRole->save() ){
            return redirect()->back()->withErrors('Update error');
        }

        $request->session()->flash('flash_message', 'Users role updated');
        return redirect()->route('admin');
    }
}