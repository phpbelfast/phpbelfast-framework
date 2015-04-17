<?php
namespace PhpBelfast\Repos;

use PhpBelfast\Models\Post;

class PostRepo {

    public function getAll()
    {
        return Post::with('author')->orderBy('created_at','DESC')->get();
    }

    public function getById($id)
    {
        $post = Post::where('id','=',$id)->with(['author'])->first();
        if(empty($post->id)) {
            return false;
        } else {
            return $post;
        }
    }
} 