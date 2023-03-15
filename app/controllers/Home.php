<?php
class Home extends Controller{

    public $topic;

    public function __construct(){
        $this->topic = $this->model('HomeModel');
    }

    public function index(){
        /* $data = $this->topic->getListTopic();
        echo '<pre>';
        print_r($data);
        echo '</pre>'; */

        /* $data = $this->topic->find(1);
        echo '<pre>';
        print_r($data);
        echo '</pre>'; */

        //$this->topic->deleteCategory(11);

        $data = [
            'name' => "Cong Nghe"
        ];

        $check = $this->db->table('categories')->delete();
        var_dump($check);

    }
}