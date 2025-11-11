<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar que se cree bien(es la validación que indica que campo es requerido, que sea unico verificando en roles)
        $request->validate(['name' => 'required|unique:roles,name']);

        //Si pasa la validación, crea el rol
        Role::create(['name' => $request->name]);

        //Variable de un solo uso para alerta
        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Rol creado con éxito',
            'text' => 'El rol ha sido creado exitosamente'
            
        ]);

        //Te redireccionara a la tabla principal
        return redirect()->route('admin.roles.index')->with('success','Role created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //Restringir la accion para los 4 primeros roles fijos
        if ($role->id <=4){
            //Variable de un solo uso para alerta
            session()->flash('swal', [
                'icon' => 'error',
                'title' => 'Error',
                'text' => 'No puedes editar este rol, es un rol de sistema.'
            ]);
            return redirect()->route('admin.roles.index');
        }

        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //validar que se inserte bien
        $request->validate(['name' => 'required|unique:roles,name,' . $role->id]);

        //Si el campo no cambió, no actualices
        if($role->name === $request->name){
                session()->flash('swal',
            [
                'icon' => 'info',
                'title' => 'Sin cambios',
                'text' => 'No se detectaron modificaciones'
            ]);

            //Redirecciona al mismo lugar
            return redirect()->route('admin.roles.edit', $role);
        }

        //Si pasa la validación, editara el rol
        $role->update(['name'=> $request->name]);

        //Variable de un solo uso para alerta
        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Rol Actualizado con éxito',
            'text' => 'El rol ha sido Actualizado exitosamente'
        ]);

        //Te redireccionara a la tabla principal
        return redirect()->route('admin.roles.index', $role);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {

        if ($role->id <=4){
            //Variable de un solo uso para alerta
            session()->flash('swal', [
                'icon' => 'error',
                'title' => 'Error',
                'text' => 'No se puede eliminar este rol, es un rol de sistema.'
            ]);
            return redirect()->route('admin.roles.index');
        }

        //Borrar el elemento
        $role->delete();

        //Alerta
        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Rol Eliminado con éxito',
            'text' => 'El rol ha sido eliminado exitosamente'
        ]);

        //redireccionar al mismo lugar
        return redirect()->route('admin.roles.index');
    }
}
