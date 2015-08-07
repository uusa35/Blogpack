<?php
namespace Usama\Blogpack\Controllers\Frontend;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        return view('blogpack::frontend.index');
    }
}