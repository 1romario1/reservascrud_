<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consultarRol['Roles']=Roles::paginate(3);
        return view('roles.index',$consultarRol);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $insertarRole=request()->except('_token');
        Roles::insert($insertarRole);
        return response()->json($insertarRole);
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $rol=Roles::findOrfail($id);
        return view('roles.show',['rol'=>$rol]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $roles=Roles::findOrfail($id);
        return view('roles.edit',compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $actualizar=request()->except(['_token','_method']);
        Roles::where('id','=',$id)->update($actualizar);

        $roles=Roles::findOrfail($id);
        return view('roles.index',compact('roles'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Roles::destroy($id);
        return redirect('roles');
    }
}
