<x-admin-layout :breadcrumbs="[
    [
        'name'=>'Dashboard',
        'href'=> route('admin.dashboard'),
    ],
    [
       'name'=>'Roles',
        'href'=> route('admin.roles.index'), 
    ],
    ['name' => 'Nuevo'],
]">

</x-admin-layout>