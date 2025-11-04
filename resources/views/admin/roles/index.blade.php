<x-admin-layout :breadcrumbs="[
    [
        'name'=>'ITMérida',
        'href'=> route('admin.dashboard'),
    ],
    [
       'name'=>'DSC',
        'href'=> route('admin.dashboard'),
    ],
    ['name' => 'Roles'],
]">

    <x-slot name="action">
        <x-wire-button href="{{route('admin.roles.create')}}" green>
            <i class="fa-solid fa-plus"></i>
            Nuevo
        </x-wire-button>
    </x-slot>

    @livewire('admin.datatables.role-table')
</x-admin-layout>