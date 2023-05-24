<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactUs;
use App\Mail\ContactFormMail;
use App\Mail\ContactSuccessMail;
use Illuminate\Support\Facades\Mail;

class ContactUsComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $country;
    public $message;
    public $reason;


    protected $listeners = [
        'updateMyHiddenValue' => 'updateHiddenValue',
    ];

    public function updateHiddenValue($value)
    {
        $this->country = $value;
    }
    
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'message' => 'required',
            'reason' => 'required',

        ]);
    }

        // clear the input field after submission
    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
        $this->reason = '';
    }


    public function storeContact()
    {   $this->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'country' => 'required',
        'message' => 'required',
        'reason' => 'required'
        ]);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => $this->country,
            'reason' => $this->reason,
            'message' => $this->message,
        ];

        

        $contact = new ContactUs();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->country = $this->country;
        $contact->reason = $this->reason;
        $contact->message = $this->message;
        $contact->save();

        try{
            Mail::to('elitetouchconcept@gmail.com')->send(new ContactFormMail($data));
             Mail::to($this->email)->send(new ContactSuccessMail($data));
            session()->flash('message', 'Thank you for contact us, an agent will reach out to you');

            $this->resetInputFields();
        }catch(\Exception $e){
            session()->flash('error_msg', 'Something went wrong!'.$e);
        }
    }

    public function render()
    {
        return view('livewire.contact-us-component');
    }
}