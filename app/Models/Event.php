<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    //Salvar dados JSON Via laravel
    protected $casts = [
        'itens' => 'array'
    ];
    //Salvar data no banco com laravel
    protected $dates = ['date'];

    //Relacionamento do usuario com os eventos(One to Many)

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    protected $guarded = [];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
