<x-admin-layout :breadcrumbs="[
    [
        'name'=>'ITMérida',
        'href'=> route('admin.dashboard'),
    ],
    [
       'name'=>'DSC',
        'href'=> route('admin.dashboard'),
    ],
    ['name' => 'Usuarios'],
]">

    <x-slot name="action">
        <x-wire-button href="{{route('admin.users.create')}}" blue>
            <i class="fa-solid fa-plus"></i>
            Nuevo
        </x-wire-button>
    </x-slot>

</x-admin-layout>