<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

class BlogSearch extends Component
{

    public $posts = [];


    public function updateSearch($search)
    {

        if ($search == '') {
            $this->posts = [];
            return;
        }

        $this->posts = Post::select('id', 'title', 'slug')
            ->where('title', 'like',  "%{$search}%")
            ->limit(5)
            ->get();

        if ($this->posts->count() > 0) {
            // Log the posts instead of using dd
            Log::info($this->posts);
        }
    }

    public function render()
    {
        return view('livewire.blog-search');
    }
}
