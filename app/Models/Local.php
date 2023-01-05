<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
   
    public function lista()
    {
        return (object) [
          'nome'=>'Pedro',
          'tel'=>'997171238'   
        
        ];
    }
}
