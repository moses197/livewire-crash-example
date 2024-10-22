<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ReceiveEvent extends Component
{
    public string $message = 'No message yet';

    #[On('messageSent')]
    public function displayMessage($newMessage)
    {
        $this->message = $newMessage;
    }

    #[On('resetComponent')]
    public function resetComponent()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.receive-event');
    }
}
