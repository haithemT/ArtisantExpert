<?php

namespace Feed\Form;

use Zend\Form\Form;


class PostForm extends Form
{
    public function __construct($name = null)
    {
        // We will ignore the name provided to the constructor
        parent::__construct('post');
        $this->setAttribute('class', 'form-horizontal push-10-t');
        
        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'title',
            'type' => 'text',
            'attributes' => [
                'class' => 'form-control'
            ],
            'options' => [
                'label' => 'Username',
                
            ],
        ]);
        $this->add([
            'name' => 'content',
            'type' => 'textarea',
            'attributes' => [
                'class' => 'form-control'
            ],
            'options' => [
                'label' => 'Content',
            ],
        ]);
        $this->add([
            'name' => 'excerpt',
            'type' => 'textarea',
            'attributes' => [
                'class' => 'form-control'
            ],
            'options' => [
                'label' => 'Excerpt',
            ],
        ]);
        $this->add([
            'name' => 'status',
            'type' => 'select',
            'attributes' => [
                'class' => 'form-control'
            ],
            'options' => [
                'label' =>'Status',
                'value_options' =>[
                'publish'   => 'Publish',
                'draft'     => 'Draft',
                'pending'   => 'Pending'
            ]
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value'     => 'Add new user',
                'id'        => 'submitbutton',
                'class'     => 'btn btn-primary'
            ],
        ]);
        $this->add([
            'name' => 'csrf',
            'type' => 'Zend\Form\Element\Csrf',
            'options' => [
                'csrf_options' => [
                    'timeout' => 600
                ]
            ]
        ]);
        $this->add([
            'name' => 'picture',
            'type' => 'file',
            'attributes' => [
                'class' => 'form-control'
            ],
            'options' => [
                'label' => 'Image/Video',
            ],
        ]);
    }
}