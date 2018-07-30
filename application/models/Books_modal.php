<?php
/**
 * Created by PhpStorm.
 * User: irigpratit
 * Date: 7/29/18
 * Time: 10:42 PM
 */

//function get_search($search_book){
//
//    $this->db->like('product_name', $search_book);
//    $query = $this->db->get('product_name');
//    return $query->result();
//}


//function get_search() {
//    $match = $this->input->post(‘search’);
//    $this->db->like(‘product_name’,$match);
//       $query = $this->db->get(‘product’);
//    return $query->result();
//}
//


function get_search() {
    $match = $this->input->post(‘search’);
    $this->db->like(‘product_name’,$match);

    $query = $this->db->get(‘books’);
    return $query->result();
}