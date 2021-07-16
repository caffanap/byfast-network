<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //
    public function index(Newsletter $newsletter)
    {
        $data = $newsletter->all();
        return view('admin.newsletter', ['newsletter' => $data]);
    }
}
