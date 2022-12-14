<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fruit extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('fruit_model');
    }

    public function index(){
        $this->load->view('fruit_view');
    }

    public function save(){
        $data = $this->fruit_model->save();
        echo json_encode($data);
    }

    public function fruit_data(){
        $data = $this->fruit_model->fruit_list();
        echo json_encode($data);
    }
    
    public function update(){
        $data = $this->fruit_model->update_fruit();
        echo json_encode($data);
    }

    public function delete(){
        $data = $this->fruit_model->delete_fruit();

        echo json_encode($data);
    }
}