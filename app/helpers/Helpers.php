<?php

use Illuminate\Container\Attributes\Auth;

function hasPermission(string $permissionName): bool
{
    $user = Auth::user();
    dd($user);
}
