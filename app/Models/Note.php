<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'label',
        'subject',
        'date_creation',
        'date_before_expiration',
        
    ];
    * @var array
    */
   protected $casts = [
       'date_before_expiration' => 'datetime',
   ];
   
}
