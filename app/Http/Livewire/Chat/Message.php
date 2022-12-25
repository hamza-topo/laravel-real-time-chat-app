<?php

namespace App\Http\Livewire\Chat;

use App\Events\Chat\Message as ChatMessage;
use App\Events\Hello;
use App\Models\Message as ModelsMessage;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class Message extends Component
{
    public User $user;
    public Collection $messages;
    public string $message = '';

    protected function getListeners()
    {
        $authId = auth()->user()->id;
        return [
            "echo:messages.{$authId},Chat\Message" => 'refreshMessages',
            'set-user' => 'setUser'
        ];
    }

    public function mount()
    {
        $this->getUser();
        $this->getMessages();
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function send()
    {
        try {
            ModelsMessage::create([
                'from_id' => auth()->user()->id,
                'to_id' => $this->user->id,
                'message' => $this->message
            ]);
            $this->getMessages();
            broadcast(new ChatMessage($this->user->id));
            $this->reset(['message']);
           
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function refreshMessages($event)
    {
        $this->getMessages();
    }

    public function getMessages()
    {
        $this->messages = ModelsMessage::whereIn('from_id', [auth()->user()->id, $this->user->id])
            ->orWhereIn('to_id', [auth()->user()->id, $this->user->id])->get();
    }
    public function getUser()
    {
        $this->user =  User::where('id', '!=', auth()->user()->id)->get()->first();
    }

    public function render()
    {
        return view('livewire.chat.message');
    }
}
