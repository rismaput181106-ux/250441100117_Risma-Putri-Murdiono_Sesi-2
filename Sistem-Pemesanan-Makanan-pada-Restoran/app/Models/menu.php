<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use hasFactory;

    protacted $fillable = [
         'menu_id', 'nama_menu', 'harga', 'sks',  
    ];

    protacted function casts(); array
    {
        return[
            'harga' => 'decimal',
        ];
    }
}
