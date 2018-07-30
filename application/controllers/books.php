<?php
/**
 * Created by PhpStorm.
 * User: irigpratit
 * Date: 7/29/18
 * Time: 10:40 PM
 */

//


//function search()
//{
//    $data['query'] = $this->Search_model->get_search();
//    $this->load->view(‘product’, $data);
//}


function search()
{
    $data['query'] = $this->Books_model->get_search();
    $this->load->view(‘books’, $data);
}