<?php
namespace Usama\Blogpack\Controllers\Backend;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        return view('blogpack::backend.index');
    }
}