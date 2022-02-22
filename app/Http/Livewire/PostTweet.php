<?php

namespace App\Http\Livewire;

use DG\Twitter\Exception;
use DG\Twitter\Twitter;
use Illuminate\View\View;
use Livewire\Component;

class PostTweet extends Component
{
    public string $message = "";

    protected array $rules = [
        'message' => 'required|max:120',
    ];

    protected array $messages = [
        'message.required' => 'É obrigatório escrever o recado',
        'message.max' => 'Só é permitido enviar uma mensagem de até 120 caracteres',
    ];

    public function submit()
    {
        $this->validate();

        try {
            $twitter = new Twitter(env("TWITTER_CONSUMER_KEY"), env("TWITTER_CONSUMER_SECRET"),
                env("TWITTER_ACCESS_TOKEN"), env("TWITTER_ACCESS_TOKEN_SECRET"));
            $twitter->send($this->message);
            session()->flash('message', 'Recado enviado com sucesso!');

        } catch (Exception) {
            session()->flash('message', 'Erro ao enviar o recado! Tente novamente');
        }

    }


    public function render(): View
    {
        return view('livewire.post-tweet');
    }
}
