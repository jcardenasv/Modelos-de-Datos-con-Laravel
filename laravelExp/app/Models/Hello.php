<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hello extends Model
{
    public static function helloWorldMessage()
    {
        return "HELLO WORLD 2!";
    }
}
