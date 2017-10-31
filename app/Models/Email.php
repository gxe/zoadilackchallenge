<?php
/*
 * Nick Wilging
 * 10/30/17
 *
 * Zoadilack Coding Challenge
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model {

    protected $connection = 'db1';
    protected $fillable = ['address'];
}