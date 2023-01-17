<?php
class tableproduct extends controller{
    public function __construct()
    {
        $this->model('Database');
        $read = $this->model('crud');
        $read->productlist();
        $this->viewjs('tableproduct', ['query' => $read->query]);
    }
}