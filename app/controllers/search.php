<?php
class search extends controller
{
    public function __construct()
    {
        $this->model('Database');
        $search = $this->model('crud');
        $this->view('search', ['search' => $search->search()]);
    }
}
