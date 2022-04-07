<?php

class Review
{
    public $id;
    public $name;
    public $review;
    public $category_id;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->category_id, 'integer');
    }
}