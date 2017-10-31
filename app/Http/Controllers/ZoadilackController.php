<?php
/*
 * Nick Wilging
 * 10/30/17
 *
 * Zoadilack Coding Challenge
 */

namespace App\Http\Controllers;

use App\Logic\Mail;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZoadilackController extends Controller {

    public function index() {
        return view('index', ['db1' => DB::connection('db1')->getConfig(), 'db2' => DB::connection('db2')->getConfig(), 'emailCount' => Email::all()->count()]);
    }

    public function notify(Request $request) {
        $this->validate($request, [
            'address'   => 'required|email'
        ]);

        # Validated, send the message
        Mail::sendDatabaseConfiguration(config('mail.from.address'), $request->get('address'));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

}