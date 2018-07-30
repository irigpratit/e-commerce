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




        <!-- Book Picture Upload -->
        <div class="container"><br>
            <div class="panel panel-default"><center>
                <div class="panel-heading"><strong><h2>Upload Files</strong></h2> Book pictures upload</div>
                 <div class="panel-body">
                <h4>Select files from your computer</h4>
                <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                <div class="form-horizontal">
                <div class="form-group" style="margin-left: 60px;"  style="margin-left: 10px;">
                <input type="file" name="files[]" id="js-upload-files" multiple><br>
                <!-- <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button> -->
                </div>
               </div>
              </form>
                </center>


                    <div class="container">
  
                            <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                         <div class="panel-heading">
                                             <h4 class="panel-title">
                                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">ISBN Description</a></h4> </div>
        
                                                                                                                
                                                              <div id="collapse1" class="panel-collapse collapse in">
                                                                <div class="panel-body"><form>
  <div class="form-row">
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

    <div class="form-group">
        <label for="inputDescription">Description</label>
        <input type="text" class="form-control" id="inputDescription" placeholder="Enter Book Description/Comment">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
         <label for="inputCity">City</label>
         <input type="text" class="form-control" id="inputCity">
    </div>

    <div class="form-group col-md-6">
        <label for="inputState">State</label>
         <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>hello</option>
        <option>world</option>
        <option>nepal</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>

  <div class="form-group">
     <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
   <button type="submit" class="btn btn-primary">Sign in</button>
 </form></div>
                                                              </div>
                                                               </div>



    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Manual Description</a>
        </h4>
      </div>



      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="container">
    <div class="panel panel-default">
    
 <form>
  <div class="form-row">
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

    <div class="form-group">
        <label for="inputDescription">Description</label>
        <input type="text" class="form-control" id="inputDescription" placeholder="Enter Book Description/Comment">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
         <label for="inputCity">City</label>
         <input type="text" class="form-control" id="inputCity">
    </div>

    <div class="form-group col-md-6">
        <label for="inputState">State</label>
         <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>hello</option>
        <option>world</option>
        <option>nepal</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>

  <div class="form-group">
     <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
   <button type="submit" class="btn btn-primary">Sign in</button>
 </form>
 </div>
 </div>

  </strong></div></center></div></div>
</div>
      </div>
    </div>
    
    
  </div> 
</div>
    
      </div>
    </div>
    <!--                  -->

    
<?php
include "include/footer.php";
?>

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