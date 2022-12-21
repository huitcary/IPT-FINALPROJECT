<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Dashboard extends Component
{
    public function recentPosts (){
        $recents = Post::orderBy('created_at', 'desc')
        ->limit(50)
        ->get();


        $allPosts = Post::count();
        return compact('recents', 'allPosts');
    }
    public function render()
    {
        return view('livewire.posts.dashboard', $this->recentPosts());
    }
}



