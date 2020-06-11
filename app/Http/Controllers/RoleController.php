<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles= Role::all();

        return view('/admin/roles', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('/admin/createRole');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles'
        ])->validate();

        try {
            Role::create([
                'name' => $request->name

            ]);

            return redirect()->route('role.index')->with('success', 'a new role  has been added successfully');
        } catch (ModelNotFoundException $exception) {

            return back()->with('error', 'error adding a new role');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

          $role=Role::find($id);

        return view('admin/editRole', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ])->validate();

        try {
            $roles=Role::where('id',$id)->update(['name' => $request->name]);


            return redirect()->route('role.index')->with('success', 'roles successfully updated');
        } catch (ModelNotFoundException $exception) {

            return back()->with('error', 'error not found or role update failed ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $role=Role::where('id',$id)->delete();
         return redirect()->route('role.index')->with('success', 'roles successfully deleted');
        } catch (ModelNotFoundException $exception) {

            return back()->with('error', 'error not found or role delete failed ');
        }
    }
}
