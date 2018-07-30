<?php
/**
 * Created by PhpStorm.
 * User: irigpratit
 * Date: 7/29/18
 * Time: 10:30 PM
 */



if ($query = $this->Books_model->books_search($this->input->post('search')))
{

$search['searches'] = $query;
}
//
//<?=form_open(‘books/search’);?>
<?php //$search = array(‘name’=>’search’,'id’=>’search’,'value’=>”,);?>
<?//=form_input($search);?><!--<input type=submit value=’Search’ /></p>-->
<?//=form_close();?>


<table>
<tr><th>ID</th><th>Name</th><th>Category</th><th>Price</th></tr>
<?php foreach($query as $item):?>
<tr>
<td><?= $item->p_id ?></td>
<td><?= $item->product_name ?></td>
<td><?= $item->product_category ?></td>
<td><?= $item->product_price ?></td>
</tr>
<?php endforeach;?>
</table>
