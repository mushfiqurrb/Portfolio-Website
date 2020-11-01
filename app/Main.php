<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $fillable = [
        'person_name', 'quality', 'image'];
}
