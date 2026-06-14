<?php
function hasPermission(string $permissionName): bool
{
    return $this->roles()
        ->whereHas('permissions', function ($query) use ($permissionName) {
            $query->where('name', $permissionName);
        })
        ->exists();
}
