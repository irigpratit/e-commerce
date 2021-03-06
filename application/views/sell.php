<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Old Is Gold</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.png" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
</head>

<body>

<?php
include "include/head.php";
?>

<div class="product-big-title-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Sell Your Books To Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/>


<div style="border:1px solid #ddd; " class="container">

    <div class="panel panel-default" style="border:0;" ><center>
            <div class="panel-heading"><strong><h2>Upload Files</strong></h2></div>
            <div class="panel-body">
                <h4>Select files from your computer</h4>
                <form action="" method="post" enctype="  multipart/form-data" id="js-upload-form">
                    <div class="form-horizontal">
                        <div class="form-group" style="margin-left:
				   60px;"  style="margin-left: 10px;">
                            <input type="file" name="files[]" id="js-upload-files" multiple><br>


                        </div>
                    </div>
                </form>
            </div>


            <p><strong>Note:</strong> Please fill either the ISBN form or do Manual entry for Manual form</p>

            <div class="container">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">ISBN Form</a></h4>

                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body"> <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputName">ISBN</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter ISBN Number">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputAuthor">Author</label>
                                    <input type="text" class="form-control" id="inputAuthor" placeholder="Enter Book Author">
                                </div>



                                <div class="form-group col-md-4">
                                    <label for="inputEdition">Edition</label>
                                    <input type="text" class="form-control" id="inputEdition" placeholder="Enter Book Edition">
                                </div>

                                <div class="row">
                                    <div class="row">
                                        <div class="container">
                                            <center>
                                                <button type="button" class="btn btn-greeny" data-toggle="modal" data-target="#myModal">Submit</button></center>

                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog">

                                                    Modal content
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Admin Response</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Your Book is Under Review Process. Thank You!</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-greeny" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div></div></div></div>



                        </div>
                    </div>

                    <style>
                        input[type="text"].form-lg {
                            padding: 10px !important;
                        }
                    </style>


                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Manual Form</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body"> <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Book Name">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputAuthor">Author</label>
                                        <input type="text" class="form-control" id="inputAuthor" placeholder="Enter Book Author">
                                    </div>


                                    <div class="form-group col-md-4">
                                        <label for="inputEdition">Edition</label>
                                        <input type="text" class="form-control" id="inputEdition" placeholder="Enter Book Edition">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputEdition">Comment</label>
                                        <input type="text" class="form-control form-lg" id="inputEdition" placeholder="Eg. Page 2 is missing from book">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputDescription">Description</label>
                                        <input type="text" class="form-control form-lg" id="inputDescription" placeholder="Enter Book Description/Comment">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState">Condition</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>Like New</option>
                                            <option>Very Good</option>
                                            <option>Good</option>
                                            <option>Acceptable</option>
                                        </select>
                                    </div>


                                    <div class="row">
                                        <div class="container">
                                            <center><button type="button" class="btn btn-greeny" data-toggle="modal" data-target="#myModal1">Submit</button></center>

                                            <div class="modal fade" id="myModal1" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Admin Response</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Your Book is Under Review Process. Thank You!</p>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-greeny" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
</div>
</div>
</div>




<?php
include "include/footer.php";
?>
=======
  <!DOCTYPE html>
  <html lang="en">
  <head>
	 <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Old Is Gold</title>
	 <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.png" />

	 <!-- Google Fonts -->
	 <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
	 <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	 <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

	 <!-- Bootstrap -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	 <!-- Font Awesome -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	 <!-- Custom CSS -->
	 <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
	 <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
	 <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
  </head>

  <body>
   
	 <?php
		include "include/head.php";
	 ?>   

		<div class="product-big-title-area">
		    <div class="container-fluid">
			   <div class="row">
				  <div class="col-md-12">
					 <div class="product-bit-title text-center">
						<h2>Sell Your Books To Us</h2>
					 </div>
				  </div>
			   </div>
		    </div>
		 </div>
		 <br/><br/>

		 
		 <div style="border:1px solid #ddd; " class="container">
			
			<div class="panel panel-default" style="border:0;" ><center>
			   <div class="panel-heading"><strong><h2>Upload Files</strong></h2> Book pictures upload</div>
			 <div class="panel-body">
			   <h4>Select files from your computer</h4>
			   <form action="" method="post" enctype="  multipart/form-data" id="js-upload-form">
			   <div class="form-horizontal">
				  <div class="form-group" style="margin-left:
				   60px;"  style="margin-left: 10px;">
			   <input type="file" name="files[]" id="js-upload-files" multiple><br>


				  </div>
				  </div>    
				   </form> 
				</div>  

   
    <p><strong>Note:</strong> Please fill either the ISBN form or do Manual entry for Manual form</p>

    <div class="container">
   	 <div class="panel-group" id="accordion">
	 		<div class="panel panel-default">
	  			 <div class="panel-heading">
						<h4 class="panel-title">
		  						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">ISBN Form</a></h4>
		
	   			</div>
	   <div id="collapse1" class="panel-collapse collapse in">
		<div class="panel-body"> <div class="form-row">
	 <div class="form-group col-md-4">
	   <label for="inputName">ISBN</label>
	   <input type="text" class="form-control" id="inputEmail4" placeholder="Enter ISBN Number">
	 </div>
    </div>
	
	 <div class="form-group col-md-4">
	   <label for="inputAuthor">Author</label>
	   <input type="text" class="form-control" id="inputAuthor" placeholder="Enter Book Author">
	 </div>
    
    
   
	 <div class="form-group col-md-4">
		<label for="inputEdition">Edition</label>
		<input type="text" class="form-control" id="inputEdition" placeholder="Enter Book Edition">
	 </div>

	<div class="row">
		 <div class="row">
    	<div class="container">
  <center>
  <button type="button" class="btn btn-greeny" data-toggle="modal" data-target="#myModal">Submit</button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
       Modal content
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Admin Response</h4>
        </div>
        <div class="modal-body">
          <p>Your Book is Under Review Process. Thank You!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-greeny" data-dismiss="modal">Close</button>
        </div>
      </div>

      
    </div>
  </div>
  
 </div></div></div></div>

  
	 
		</div>
	 </div>
	 
<style>
  input[type="text"].form-lg {
    padding: 10px !important;
  }
</style>

   
	 <div class="panel panel-default" >
	   <div class="panel-heading">
		<h4 class="panel-title">
		  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Manual Form</a>
		</h4>
	   </div>
	   <div id="collapse3" class="panel-collapse collapse">
		<div class="panel-body"> <div class="form-row">
	 <div class="form-group col-md-4">
	   <label for="inputName">Name</label>
	   <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Book Name">
	 </div>

	 <div class="form-group col-md-4">
	   <label for="inputAuthor">Author</label>
	   <input type="text" class="form-control" id="inputAuthor" placeholder="Enter Book Author">
	 </div>
    

	 <div class="form-group col-md-4">
		<label for="inputEdition">Edition</label>
		<input type="text" class="form-control" id="inputEdition" placeholder="Enter Book Edition">
	 </div>

	 <div class="form-group col-md-4">
		<label for="inputEdition">Comment</label>
		<input type="text" class="form-control form-lg" id="inputEdition" placeholder="Eg. Page 2 is missing from book">
	 </div>

	  <div class="form-group col-md-4">
		<label for="inputDescription">Description</label>
		<input type="text" class="form-control form-lg" id="inputDescription" placeholder="Enter Book Description/Comment">
	 </div>

	 <div class="form-group col-md-4">
	   <label for="inputState">Condition</label>
	    <select id="inputState" class="form-control">
	   <option selected>Choose...</option>
	   <option>Like New</option>
	   <option>Very Good</option>
	   <option>Good</option>
	   <option>Acceptable</option>
	 </select>
    </div>
    

		 <div class="row">
    	   <div class="container">
  				<center><button type="button" class="btn btn-greeny" data-toggle="modal" data-target="#myModal1">Submit</button></center>

 					<div class="modal fade" id="myModal1" role="dialog">
    						<div class="modal-dialog">
      						<div class="modal-content">
        							<div class="modal-header">
         							 <button type="button" class="close" data-dismiss="modal">&times;</button>
        										  <h4 class="modal-title">Admin Response</h4>
        							</div>
       						 <div class="modal-body">
          							<p>Your Book is Under Review Process. Thank You!</p>
        					</div>

       						<div class="modal-footer">
          							<button type="button" class="btn btn-greeny" data-dismiss="modal">Close</button>
        						</div>
      				</div>
      
    				</div>
  				</div>
  			</div>
		</div>

	</div></div>
</div></div></div></div></div></div></div></div></div>  </div>   
					 

					 

	  <?php
  include "include/footer.php";
  ?>
>>>>>>> 3ae12cb2674bb4705a4ec458d105ce7a44828a71

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>
</html>