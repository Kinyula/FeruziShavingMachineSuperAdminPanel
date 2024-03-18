<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PhoneNumber;
use App\Models\User;

class ViewTotalNormalSystemAdminsLivewire extends Component
{
    public function render()
    {
        return view('livewire.view-total-normal-system-admins-livewire', ['NormalAdmins' => User::with(['phone'])->where('role_id', '0')->get()]);
    }

    public function deletePhoneNumber($id){
        $delete_phone_number = User::where("id", $id)->exists() ? User::findOrFail($id)->delete() : false;
        session()->flash('deletePhoneNumber', 'Admin is deleted successfully.');
    }
}
