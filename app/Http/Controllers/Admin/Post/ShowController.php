<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class ShowController extends Controller
{
  public function __invoke(Post $post)
  {
    $category = Category::find($post->category_id);

    return view('admin.posts.show', compact('post', 'category'));
  }
}