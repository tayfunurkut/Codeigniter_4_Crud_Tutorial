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
            <a class="btn btn-primary" href="<?php echo base_url('customer/add-customer') ?>">Add to Customer</a>
          </div>
        </div>

        <div class="row mt-4">
         <table class="table table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Designation</th>
              <th scope="col">Created</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php foreach ($custom as $key => $value) { ?>
            <tr>
                <th scope="row"><?= $value['id']; ?></th>
                <td><?= $value['first_name']; ?></td>
                <td><?= $value['last_name']; ?></td>
                <td><?= $value['email']; ?></td>
                <td><?= $value['phone']; ?></td>
                <td><?= $value['designation']; ?></td>
                <td><?= $value['created_at']; ?></td>
                <td><a class="btn btn-success" href="customer/edit-customer/<?= $value['id'] ?>">Edit</a><a class="btn btn-danger" href="customer/delete-customer/<?= $value['id'] ?>">Delete</a></td>             
            </tr>
            <?php } ?>
          </tbody>
        </table>

        </div>
    </div>

  
    <script src="<?php echo base_url('public/js/bootstrap.bundle.min.js')?>"></script>

  </body>
</html>