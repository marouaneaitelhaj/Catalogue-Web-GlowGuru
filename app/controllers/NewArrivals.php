<?php
class NewArrivals extends controller{
    public function __construct()
    {
        $this->model('Database');
        $read = $this->model('crud');
        $read->productlist();
        $this->viewjs('productlist', ['query' => $read->query]);
    }
}