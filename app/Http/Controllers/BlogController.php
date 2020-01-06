<?php

namespace App\Http\Controllers;

use App\Http\Services\impl\BlogImplService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogservice;

    public function __construct(BlogImplService $blogImplService)
    {
        $this->blogservice = $blogImplService;
    }

    public function index()
    {
        $blogs = $this->blogservice->getAll();

        return view('index', compact('blogs'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->blogservice->store($request);
        return redirect()->route('blog');
    }
}
