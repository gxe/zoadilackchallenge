<?php
/*
 * Nick Wilging
 * 10/30/17
 *
 * Zoadilack Coding Challenge
 */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class ConnectionInfo extends Mailable {

    use Queueable, SerializesModels;

    protected $fromAddress;

    public function __construct($from) {
        $this->fromAddress = $from;
    }

    public function build() {
        return $this->view('emails.connection')->from($this->fromAddress)->with(['db1' => DB::connection('db1')->getConfig(), 'db2' => DB::connection('db2')->getConfig()]);
    }
}
