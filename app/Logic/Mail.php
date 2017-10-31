<?php
/*
 * Nick Wilging
 * 10/30/17
 *
 * Zoadilack Coding Challenge
 */

namespace App\Logic;

use App\Mail\ConnectionInfo;
use App\Models\Email;
use Illuminate\Support\Facades\DB;

class Mail {

    public static function sendDatabaseConfiguration($to, $from) {
        # Mail to address
        \Illuminate\Support\Facades\Mail::to($to)->send(new ConnectionInfo($from));

        # Log sent mail, only to DB1 though
        Email::create(['address' => $to]);
    }
}