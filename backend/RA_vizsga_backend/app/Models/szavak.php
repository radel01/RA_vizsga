<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class szavak extends Model
{
    /** @use HasFactory<\Database\Factories\SzavakFactory> */
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=[
        'temanev',
    ];

   /*  public function temakAdat(){
        return $this->hasMany(tema::class, 'szavak(temaId)');
    } */
}
