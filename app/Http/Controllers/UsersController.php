<?php

namespace talento\Http\Controllers;

use Illuminate\Http\Request;
use talento\Http\Requests;
use talento\Http\Controllers\Controller;
use talento\User;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use talento\Http\Requests\UserRequest;

class UsersController extends Controller
{

    public function __construct(){
        
         $this->middleware('can:Users.index')->only('index'); 
         $this->middleware('can:Users.destroy')->only('destroy'); 
	     $this->middleware('can:Users.edit')->only(['edit','update']); 
    	 $this->middleware('can:Users.show')->only('show'); 
	     $this->middleware('can:Users.create')->only(['create','store']); 

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::search($request->name)->orderBy('id','ASC')->paginate(8); 
        $role = Role::select('name')->pluck('name');  

        return view('admin.Users.index', compact('users','role'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $role = Role::select('name','id')->orderBy('id','ASC')->pluck('name','id');
       return view('admin.Users.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request, User $user)
    {

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
      //  $user->roles()->sync($request->get('role'));
        $user -> save();
      //  dd('Usuario creado');

             Flash::success("El Usuario: " .$user->name." Fue Registrado Satisfactoriamente");
             return redirect()->route('Users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $user = User::find($id);

        return view('admin.Users.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $role = Role::select('name','id')->OrderBy('id','DESC')->pluck('name','id');
        $permissions = Permission::get();
        $asignar = $user->permissions->pluck('id')->toArray();
        

        return view('admin.Users.edit', compact('user','permissions','asignar','role'));
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
        $user = User::find($id);
        $user->update($request->all());
        $user->permissions()->sync($request->get('permissions'));
        $user->roles()->sync([$request->input('user_id')]);
      
        
        Flash::warning('El Usuario ' . $user->name . ' ha sido actualizado ');
        return redirect()->route('Users.index', $user->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $user = User::find($id);
         $user->delete();

        Flash::error("El Usuario {$user->name}  ha sido eliminado");
        return redirect()->route('Users.index');
   
    }
}