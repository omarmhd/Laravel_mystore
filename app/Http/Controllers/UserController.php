<?php

namespace App\Http\Controllers;

use App\Role;
use App\RoleUser;
use App\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $users=User::all();
        return view('admin/users' ,compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $user=User::find($id);
            $roles=Role::all();
            return view('admin\editUser',compact('user','roles'));

              }
            catch(ModelNotFoundException $exception){
                return back()->with('error',' not found user '.$id) ;

            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


        try {


          $role_id= $request->role_id;

                 RoleUser::where('user_id', $id )->update([
                'name' => $request->name ??'',
                'user_id'=>$id ?? '',
                'role_id'=>$role_id ?? '']);

            return redirect()->route('user.index')->with('success', 'user successfully updated');
        } catch (Exception $exception) {

        dd( $exception->getMessage());
            return back()->with('error', 'error not found or role update failed ');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user=User::find($id);
         $user->delete;
    }
}
