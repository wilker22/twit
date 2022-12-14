<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $message = 'sss';

    public function render()
    {
        $tweets = Tweet::with('user')->get();
        return view('livewire.show-tweets', compact('tweets'));
    }
}
