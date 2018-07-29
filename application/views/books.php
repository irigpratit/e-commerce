<?php
/**
 * Created by PhpStorm.
 * User: irigpratit
 * Date: 7/29/18
 * Time: 10:30 PM
 */

//
//
//if ($query = $this->users_model->user_search($this->input->post('search')))
//{
//
//$search['searches'] = $query;
//}

<?=form_open(‘books/search’);?>
<?php $search = array(‘name’=>’search’,'id’=>’search’,'value’=>”,);?>
<?=form_input($search);?><input type=submit value=’Search’ /></p>
<?=form_close();?>


<table>
<tr><th>ID</th><th>Book</th><th>Author</th><th>Published</th><th>Price</th></tr>
<?php foreach($query as $item):?>
<tr>
<td><?= $item->id ?></td>
<td><?= $item->bookname ?></td>
<td><?= $item->author ?></td>
<td><?= $item->datepublished ?></td>
<td><?= $item->price ?></td>
</tr>
<?php endforeach;?>
</table>
