<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\comments;
class Commentform extends Component
{
    public $post_id;

    public $name;
    public $email;
    public $comment_content;
    public function add_comment()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment_content' => 'required|max:250',
            ]);
            comments::create([
                'auther' => $this->name,
                'email' => $this->email,
                'posts_id' => $this->post_id,
                'comment_content' => $this->comment_content,
            ]);
            session()->flash('message', 'Comment Added Successfully.');

    }
    public function render()
    {
        return view('livewire.commentform');
    }
}
