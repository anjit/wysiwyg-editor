<?php



include('header.php');

include('sidebar.php');

$page_id=$_GET['page'];



?>



<div class="page-content-wrapper">

<div class="page-content">
<div class="portlet box grey-cascade">
<div class="portlet-title">
<div class="caption">
<i class="fa fa-globe"></i>Edit Category
</div>
</div>
</div>



<div class="col-md-10">



<div class="content-box-large">



<div class="panel-heading">



<div class="panel-title"><?php $title=$zoom->select('posts',"id='$page_id'",'*');



foreach ($title as $title) {



echo $title['post_title'];



}



?></div>







</div>



<div class="panel-body">



<?php $cats=$zoom->select('posts',"id='$page_id'",'*');



foreach ($cats as $cat) {



$metas=$zoom->get_metas($cat['id']);







?>			



<form action="#" name='update' method='post'>



<fieldset>



<div class="form-group">



<label>Menu Title</label>



<input class="form-control" placeholder="Text field" type="text" value="<?php echo $cat['post_title']; ?>" name='post_title' required>
<input class="form-control" placeholder="Text field" type="hidden" value="<?php echo $page_id; ?>" name='page_id' required>

</div>



</fieldset>



<div>



<div>

<?php }
?>

<input type='submit' name='Update' Value='Update' class="btn btn-primary">
<span id="sample_editable_1_new" class="btn green">
<a href="category.php">Back</a>
<i class="previous"></i>
</span>


</div>



</div>



</form>







</div>



</div>











</div>



</div>



</div>





<?php

include('main-footer.php');

?> 

<?php



if(isset($_POST['Update'])){

ob_start();

$values=$_POST;

$page_id=$_POST['page_id'];

foreach ($values as $key => $value) {

$zoom->update('posts',"id='$page_id'","$key","$value");
}

header("location:edit-category.php?page=$page_id");
}

?>