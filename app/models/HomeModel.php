<?php
//Ke thua tu class Model
class HomeModel extends Model{
    function tableFill(){
        return 'topics';
    }

    function fieldFill(){
        return 'name';
    }

    function primaryKey(){
        return 'id';
    }

    public function getDetail($id){
        $data = [
            'Item 1',
            'Item 2',
            'Item 3'
        ];
        return $data[$id];
    }

    public function getListTopic(){
        //$data = $this->db->table('topics')->where('id', '>', 3)->select('id, name')->limit(3)->orderBy('id','DESC')->get();
        $data = $this->db->table('topics')->join('categories', 'categories.id=topics.categoryId')->select('topics.name as topic, categories.name as categories')->get();
        return $data;
    }

    public function deleteCategory($id){
        $this->db->table('categories')->where('id','=',$id)->delete();
    }
}