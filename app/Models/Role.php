<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sweet1s\MoonshineRBAC\Traits\HasMoonShineRolePermissions;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory;

    use HasMoonShineRolePermissions;

    protected $with = ['permissions'];
}
