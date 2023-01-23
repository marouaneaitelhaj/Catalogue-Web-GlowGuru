<?php
class home extends controller{
    public function __construct()
    {
        $this->model('Database');
        $suggestion = $this->model('crud');
        $suggestion->suggestion();
        $cover = $this->model('crud');
        $cover->cover();
        $this->view('index', ['suggestion' => $suggestion->query, 'cover' => $cover->query]);
        // echo ;
    }
}