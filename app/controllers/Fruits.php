<?php

Class Fruits extends Controller{
    public function index(){

        $data = [
            "records" => ""
        ];

        $this->view("fruits/index", $data);
    }

}

?>