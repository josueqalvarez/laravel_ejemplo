<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
/*
    1. añadirle comments en modelo de Blog
    2. unir users y comments con el Blog en el controlador
    3. Probar los resultados en la vista
    4. Implementar en la vista
*/
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user', 'category')->latest()->get();
    
        return view('blogs.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        $blog->load('user', 'category', 'answers.comments.user');
    
        return view('blogs.show', compact('blog'));
    }
}
