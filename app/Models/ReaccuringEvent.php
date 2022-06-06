<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReaccuringEvent extends Model
{
    use HasFactory;


    protected $fillable = ['type','name','description','start'];


    protected $casts = [
        'start' => 'datetime:Y-m-d H:i:s',
        'type' => 'integer'
    ];


    public function type_translated() {

        switch ($this->type) {
            case 1: return 'Intern';
            case 2: return 'Mit Anmeldung';
            case 3: return 'Öffentlich';
        }
    }
}
