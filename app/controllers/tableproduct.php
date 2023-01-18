<?php
class tableproduct extends controller{
    public function __construct()
    {
        $this->model('Database');
        $read = $this->model('crud');
        $read->productlist();
        $dashboard = $this->model('crud');

        $this->viewjs('tableproduct', ['query' => $read->query, 'dashboard' => $dashboard->dashboard()]);
    }
}