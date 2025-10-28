<?php

// Home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});
