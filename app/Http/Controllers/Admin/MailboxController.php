<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function inbox()
    {
        return view('backend.mailbox.index');
    }

    public function compose()
    {
        return view('backend.mailbox.compose');
    }

    public function read_message()
    {
        return view('backend.mailbox.readmail');
    }
}
