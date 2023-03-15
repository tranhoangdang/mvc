<?php
class Dashboard{
    public function index(){
        echo 'Trang Dashboard';
    }

    public function detail($id){
        echo 'Trang chi tiet Dashboard - '.$id;
    }
}