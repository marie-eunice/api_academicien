<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academicien extends Model
{
    use HasFactory;
    protected $fillable = ["toto", "nom", "prenom"];
    public $timestamps = false;
}