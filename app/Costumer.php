<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $table='costumers';
    protected $fillable=['Nama', 'Nomor'];
}
