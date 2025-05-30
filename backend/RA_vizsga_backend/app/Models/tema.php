<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    /** @use HasFactory<\Database\Factories\TemaFactory> */
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=[
        'angol',
        'magyar',
        'temaId',
    ];

    /* public function szavak(){
        return $this->hasMany(szavak::class, 'szavak(temaId)');
    } */

}
