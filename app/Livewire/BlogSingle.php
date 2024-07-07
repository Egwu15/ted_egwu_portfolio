<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;

class BlogSingle extends Component
{

    private $postSlug;
    private $maxPopularPosts = 4;
    private $maxCategories = 3;
    public $categories;
    public $post;
    public $popularPosts;




    public function mount($id)
    {
        $this->postSlug = $id;
        $this->post =  Post::where("slug", $id)->with(['user', 'category'])->first();
        $this->popularPosts = Post::orderBy('views', 'desc')->limit($this->maxPopularPosts)->get();
        if ($this->post->count() == 0) {
            abort(404);
        }
        $this->categories = Category::withCount(['posts as posts_count'])
            ->orderBy('posts_count', 'desc')
            ->limit($this->maxCategories)
            ->get();

       
    }

    public function render()
    {

        return view('livewire.blog-single');
    }
}
