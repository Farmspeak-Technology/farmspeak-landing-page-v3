<?php

namespace App\Http\Livewire;

use App\Models\UpdateBlog;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        // getting all the blog post
        $allBlogPost = UpdateBlog::orderBy('created_at', 'DESC')->get();
        return view('livewire.blog-component',[
            'posts' => $allBlogPost,
        ]);
    }
}