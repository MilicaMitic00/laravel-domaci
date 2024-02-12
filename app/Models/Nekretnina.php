<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nekretnina extends Model
{
    use HasFactory;
    protected $table='nekretninas';

    public $primaryKey='id';
}
