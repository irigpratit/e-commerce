<?php
/**
 * Created by PhpStorm.
 * User: irigpratit
 * Date: 7/29/18
 * Time: 10:40 PM
 */

function search(){

    $this->index();
    $data['searches'] =array();
    if ($query = $this->users_model->user_search($this->input->post('search')))
    {

        $data['searches'] = $query;
    }

    $this->load->view('dashboard', $data);

}