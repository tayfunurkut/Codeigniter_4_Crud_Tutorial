<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="<?php echo base_url('public/css/bootstrap.min.css')?>" rel="stylesheet" >

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12"><h1 class="text-center">Customer</h1></div>
        </div>

        <div class="row">
          <div class="col-12">
            <a class="btn btn-danger mb-3" href="<?php echo base_url('/') ?>">Back</a>
          </div>
        </div>


        <div class="row"><div class="col-12"><h1 class="h1">Edit to Customer</h1></div></div>
        <div class="row mt-4">

        <form action="" method="post">
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input value="<?= $custom['first_name'] ?>" type="text" class="form-control" name="first_name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleInputPassword1" class="form-label">Last Name</label>
                <input value="<?= $custom['last_name'] ?>" type="text" class="form-control" name="last_name" id="exampleInputPassword1">
            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input value="<?= $custom['email'] ?>" type="email" class="form-control" name="email" id="exampleInputPassword1">
            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input value="<?= $custom['phone'] ?>" type="number" class="form-control" name="phone" id="exampleInputPassword1">
            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleInputPassword1" class="form-label">Designation</label>
                <input value="<?= $custom['designation'] ?>" type="text" class="form-control" name="designation" id="exampleInputPassword1">
            </div>
            <div class="col-6">
               
            </div>  
           

            <div class="col-6">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>  
           
           
           
            
            
            
            </div>
        </form>

        </div>
    </div>

  
    <script src="<?php echo base_url('public/js/bootstrap.bundle.min.js')?>"></script>

  </body>
</html>