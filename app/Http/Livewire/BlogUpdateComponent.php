<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\UpdateBlog;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

class BlogUpdateComponent extends Component
{
    use WithFileUploads;
    public $topic;
    public $blog_link;
    public $short_description;
    public $published_date;
    public $read_time;
    public $sub_category;
    public $image;
    public $passcode;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'topic' => 'required',
            'short_description' => 'required|max:155',
            'published_date' => 'required',  
            'read_time' => 'required',
            'sub_category' => 'required',
            'image' => 'required',
            'blog_link' => 'required',
            'passcode' => ['required', Rule::in(['1090'])],

        ]);
    }



    // clear the input field after submission
    private function resetInputFields()
    {
        $this->topic = '';
        $this->short_description = '';
        $this->published_date = '';
        $this->read_time = '';
        $this->sub_category = '';
        $this->image = '';
        $this->blog_link = '';
        $this->passcode = '';
    }

        public function storeBlogUpdate()
    {   $this->validate([
            'topic' => 'required',
            'short_description' => 'required|max:155',
            'published_date' => 'required',  
            'read_time' => 'required',
            'sub_category' => 'required',
            'image' => 'required',
            'blog_link' => 'required',
            'passcode' => ['required', Rule::in(['1090'])],
        ]); 



        $blogUpdate = new UpdateBlog();
        $blogUpdate->topic = $this->topic;
        $blogUpdate->blog_link = $this->blog_link;
        $blogUpdate->short_description = $this->short_description;
        $blogUpdate->published_date = $this->published_date;
        $blogUpdate->read_time = $this->read_time;
        $blogUpdate->sub_category = $this->sub_category;
        
        // generate the image name
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('blog', $imageName);
        $blogUpdate->image = $imageName;
        $blogUpdate->save();
        session()->flash('message', 'Blog Post has been recorded successfully!');
        $this->resetInputFields();
        
    }
    public function render()
    {
        return view('livewire.blog-update-component');
    }
}