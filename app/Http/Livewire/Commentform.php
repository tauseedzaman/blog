<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\comments;
use Livewire\WithPagination;

class Commentform extends Component
{
    use WithPagination;

    public $post_id;
    public $comments_Count;

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
           $comment =  comments::create([
                'auther' => $this->name,
                'email' => $this->email,
                'posts_id' => $this->post_id,
                'comment_content' => $this->comment_content,
            ]);
            session()->flash('message', 'Comment Added Successfully.');
            $this->name = "";
            $this->email = "";
            $this->comment_content = "";
            $this->comments_Count++;

    }
    public function render()
    {
        return view('livewire.commentform',[
            'comments' => comments::latest()->paginate(4)
        ]);
    }
}
