<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = ['id','status'];

    const BORRADOR =1;
    const REVISION =2;
    const PUBLICADO =3;

    public function stocks(){
        return $this->MorphMany('App\Models\Stock','stockable');
    }
    
}
