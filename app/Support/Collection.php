<?php 
namespace App\Support;

class Collection{
    protected $items = [];
    public function get(){
        return $this->items;
    }
    public function construct(array $items){
        $this->items = $items;
    }
    public function count(){
        return count($this->items);
    }
}