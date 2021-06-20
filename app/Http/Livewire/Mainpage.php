<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\posts;
class Mainpage extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'bootstrap'; //uncomment this line if you want to use bootstrap pagination theme

    public function render()
    {
        return view('livewire.mainpage',[
            'posts' => posts::latest()->paginate(10)
        ]);
    }
}
