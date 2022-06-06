<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['type','name','description'];


    protected $casts = [
        'type' => 'integer'
    ];


    public function type_translated() {

        switch ($this->type) {
            case 1: return 'history';
            case 2: return 'aboutus';
            case 3: return 'rooms';
        }
    }
}
