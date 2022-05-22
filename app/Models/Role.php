<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type','name'];

    protected $table = 'roles_man';


    public static function getX(){

        $max = Role::where('type', 'x')->orderByDesc('created_at')
            ->limit(1)->first();;
        return $max->name;

    }

    public static function getXX(){

        $max = Role::where('type', 'xx')->orderByDesc('created_at')
            ->limit(1)->first();;
        return $max->name;

    }

    public static function getXXX(){

        $max = Role::where('type', 'xxx')->orderByDesc('created_at')
            ->limit(1)->first();;
        return $max->name;

    }

    public static function getXXXX(){

        $max = Role::where('type', 'xxxx')->orderByDesc('created_at')
            ->limit(1)->first();;
        return $max->name;

    }

}
