<?php

namespace App\Livewire\User\Home;

use App\Models\Cake\Cake;
use Livewire\Component;

class UserHomeIndex extends Component
{
    public $get_cake;

    public function mount()
    {
        $cake = Cake::first();

        $this->get_cake = $cake;
    }

    public function choiceCake($id)
    {
        $cake = Cake::find($id);

        $this->get_cake = $cake;
    }

    public function render()
    {
        return view('livewire.user.home.user-home-index', [
            'cakes' => Cake::select('id', 'image')->get(),
        ])
            ->extends('layouts.user.app')
            ->section('content');
    }
}
