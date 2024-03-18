<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PhoneNumber;

class EditSuperAdminPhoneNumbersLivewire extends Component
{

    public $id , $phone_number;

    public function render()
    {
        return view('livewire.edit-super-admin-phone-numbers-livewire');
    }

    public function editPhoneNumber($id){

        $this->validate(['phone_number' => 'required|digits:12']);
        $edit_phone_number = PhoneNumber::findOrFail($id);

        $edit_phone_number->phone_numbers = $this->phone_number;

        $edit_phone_number->update();


        $this->reset(['phone_number']);

        session()->flash('editPhone', 'Product updated successfully.');
    }
}
