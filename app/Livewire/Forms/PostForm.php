<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $postModel;
    
    public $title = '';
    public $coment = '';

    public function rules(): array
    {
        return [
			'title' => 'required|string',
			'coment' => 'required|string',
        ];
    }

    public function setPostModel(Post $postModel): void
    {
        $this->postModel = $postModel;
        
        $this->title = $this->postModel->title;
        $this->coment = $this->postModel->coment;
    }

    public function store(): void
    {
        $this->postModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->postModel->update($this->validate());

        $this->reset();
    }
}
