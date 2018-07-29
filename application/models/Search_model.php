<?php
/**
 * Created by PhpStorm.
 * User: irigpratit
 * Date: 7/29/18
 * Time: 10:42 PM
 */

function user_search($search_book){

    $this->db->like('product_name', $search_book);
    $query = $this->db->get('books');
    return $query->result();
}