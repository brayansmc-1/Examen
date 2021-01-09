<?php

namespace talento\Http\Controllers;

use Illuminate\Http\Request;
use talento\Http\Requests;
use talento\Http\Controllers\Controller;
use talento\CLient;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use talento\Http\Requests\ClientRequest;

class ClientController extends Controller
{

    public function __construct(){
        
         $this->middleware('can:Clients.index')->only('index'); 
         $this->middleware('can:Clients.destroy')->only('destroy'); 
	     $this->middleware('can:Clients.edit')->only(['edit','update']); 
    	 $this->middleware('can:Clients.show')->only('show'); 
	     $this->middleware('can:Clients.create')->only(['create','store']); 

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Clients = Client::search($request->name)->orderBy('id','ASC')->paginate(8);

        return view('admin.Clients.index', compact('Clients'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.Clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request, Client $client)
    {

        $client = new Client($request->all());
        $client->password = bcrypt($request->password);
        $client -> save();

             Flash::success("El Usuario: " .$client->name." Fue Registrado Satisfactoriamente");
             return redirect()->route('Clients.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $Client = Client::find($id);

        return view('admin.Clients.view', compact('Client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Client = Client::find($id);
        return view('admin.Clients.edit', compact('Client'));
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
        $client = Client::find($id);
        $client->update($request->all());
      
        
        Flash::warning('El Cliente' . $client->name . ' ha sido actualizado ');
        return redirect()->route('Clients.index', $client->id);

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
         $client = Client::find($id);
         $client->delete();

        Flash::error("El Usuario {$client->name}  ha sido eliminado");
        return redirect()->route('Clients.index');
   
    }
}