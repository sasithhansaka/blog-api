<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\All\Blogs\BlogInterface; 


class BlogController extends Controller
{
    public function __construct(
        protected BlogInterface $blogInterface,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allBlogs = $this->BlogInterface->all(['display_name', 'trees_planted', 'created_at','message']);
    

    // dd($allCategories);
    return Inertia::render('Home/Index', [
        'allDonations' => $allBlogs,
    ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
