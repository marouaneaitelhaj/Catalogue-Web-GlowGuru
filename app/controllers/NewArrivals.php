<?php
class NewArrivals extends controller{
    public function __construct()
    {
        $this->model('Database');
        $read = $this->model('crud');
        $read->productlist();
        // $dashboard->dashboard();
        $this->viewjs('productlist', ['query' => $read->query]);
    }
}