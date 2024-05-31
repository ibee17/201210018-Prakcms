<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\Response;
  
class SitemapController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(): Response
    {
        $posts = Post::latest()->get();
  
        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }
}