<?php

namespace App\Services\Device;

use App\Models\Post;

class Service
{
  public function store($data)
  {
    $tagsId = $data['tags'];
    unset($data['tags']);

    $post = Post::create($data);

    $post->tags()->attach($tagsId);
  }

  public function update($data, $post)
  {
    $tagsId = $data['tags'];
    unset($data['tags']);

    $post->update($data);
    $post->tags()->sync($tagsId);
  }
}