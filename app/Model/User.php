<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class User extends Model
{
    use HasRoles;
    //
}
