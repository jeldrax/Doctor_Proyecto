<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder; 

class UserTable extends DataTableComponent
{
    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function builder(): Builder
    {
        return User::query()->with('roles');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            
            Column::make("Email", "email")
                ->sortable(),

            Column::make("Número de id", "id_number")
                ->sortable(),
            
            Column::make("Teléfono", "phone")
                ->sortable(),

            // ✅ SOLUCIÓN 1: Mapear "Rol" al campo "id" (o cualquier otro real)
            // Esto evita que busque la columna "rol" que no existe.
            Column::make("Rol", "id") 
                ->format(function($value, $row, $column) {
                    return $row->roles->first()?->name ?? 'Sin Rol';
                })
                ->html(),

            // ✅ SOLUCIÓN 2: Mapear "Acciones" al campo "id" también.
            // Esto evita el error "Unknown column 'acciones'".
            Column::make("Acciones", "id")
                ->format(function($value, $row, $column) {
                    return view('admin.users.actions', ['user' => $row]);
                })
                ->html(), 
        ];
    }
}