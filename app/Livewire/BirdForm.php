<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BirdForm extends Component
{
    #[Validate('required|integer')]
    public int $birdCount;

    #[Validate('required|string')]
    public string $notes;

    public function submit()
    {
        // $this->validate([
        //     'birdCount'=> 'required|integer',
        //     'notes' => 'required|string',
        // ]);

        $this->validate();

        Entry::create([
            'bird_count' => $this->birdCount,
            'notes' => $this->notes,
        ]);

        $this->reset();
    }


    // public int $bird_count;
    // public string $notes;

    // public function submit()
    // {
    //     Entry::created($this->pull());
    // }
    public function render()
    {
        $bird_list = Entry::all();

        return view('livewire.bird-form', [
            'list' => $bird_list,
        ]);
    }
}
