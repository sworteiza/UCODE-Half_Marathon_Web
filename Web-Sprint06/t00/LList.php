<?php
    class LList{
        public $head;
        public $size;

        public function __construct(){
            $this->head = null;
            $this->size = 0;
        }

        function add($data){
            $node = new LLItem($data);
            if($this->size == 0){
                $this->head = $node;
            }else{
                $current = $this->head;
                while($current->next){
                    $current = $current->next;
                }

                $current->next = new LLItem($data);
            }
            $this->size++;
        }

        function addArr($data){
            for($i = 0; $i < count($data); $i++){
                $this->add($data[$i]);
            }
        }

        function ToString(){
            $curr = $this->head;
            $str = "";
            while($curr){
                $str .= $curr->data . ", ";
                $curr = $curr->next;
            }
            return $str;
        }

        function  clear(){
            $this->head = NULL;
        }

        function count(){
            return $this->size;
        }

        function contains($value){
            $curr = $this->head;
            $fl = false;
            while($curr){
                if($curr->data == $value){
                    $fl = true;
                    return $fl;
                }
                $curr = $curr->next;
            }
            return $fl;
        }

        function remove($value){
            if($this->size == 0){
                return NULL;
            }

            if($this->head->data == $value){
                $this->head = $this->head->next; 
                return $this;
            }

            $prev = $this->head;
            $thisNode = $prev->next;
            while($thisNode){
                if($thisNode->data == $value){
                    break;
                }
                $prev = $thisNode;
                $thisNode = $thisNode->next;
            }
            if($thisNode == NULL){
                return NULL;
            }
            $prev->next = $thisNode->next;
            $this->size--;
            return $this;
        }

        function removeAll($value){
            $curr = $this->head;
            while($curr){
                if($curr->data == $value){
                    $this->remove($value);
                }
                $curr = $curr->next;
            }
        }

        function getFirst(){
            return $this->head->data;
        }

        function getLast(){
            $last = $this->head;
            while($last->next != NULL){
                $last = $last->next;
            }
            return $last->data;
        }

    }

?>