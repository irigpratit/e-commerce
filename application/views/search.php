<?php
/**
 * Created by PhpStorm.
 * User: irigpratit
 * Date: 7/29/18
 * Time: 10:30 PM
 */



if ($query = $this->users_model->user_search($this->input->post('search')))
{

$search['searches'] = $query;
}
