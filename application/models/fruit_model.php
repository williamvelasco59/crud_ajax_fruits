<?php


class Fruit_model extends CI_Model{

    public function save(){
        $data = array(
            'name'  => $this->input->post('fruit_name'),
            'price' => $this->input->post('price'),
        );

        $result = $this->db->insert('fruits', $data);
        return $result;
    }

    public function fruit_list(){
        $res = $this->db->get('fruits');
        return $res->result();
    }

     public function update_fruit(){
         $fruit_id      = $this->input->post('fruit_id');
         $fruit_name    = $this->input->post('fruit_name');
         $price         = $this->input->post('price');

         $this->db->set('name', $fruit_name);
         $this->db->set('price', $price);
         $this->db->where('id', $fruit_id);

         $result = $this->db->update('fruits');

         return $result;
     }

     public function delete_fruit(){
        $fruit_id = $this->input->post('fruit_id');

        $this->db->where('id', $fruit_id);
        $result = $this->db->delete('fruits');

        return $result;
     }

}