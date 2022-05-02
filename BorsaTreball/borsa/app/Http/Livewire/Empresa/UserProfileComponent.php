<?php

namespace App\Http\Livewire\Empresa;

use Illuminate\Support\facades\Auth;

use App\Models\Empresa;

use App\Models\User;

use Livewire\Component;

class UserProfileComponent extends Component
{
    public function render()
    {
        $empresa = Empresa::find(Auth::user()->id);
        return view('livewire.empresa.user-profile-component',['user'=>$empresa])->layout('layouts.base');
    }
}
