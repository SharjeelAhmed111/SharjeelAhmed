<?php
require_once "db.php";
require_once "auth_session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BIZEAL Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php 
include("leftsidetop.php");
  ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">





            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


            <div class="main-content">
              <div class="container mt-3">
                <!-- Table -->
                <h2 class="mb-5">Compaint List</h2>
                <div class="row">

                 
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title"> Add Product </h1>
<form method="POST" action="" enctype="multipart/form-data">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form7Example1" class="form-control" name="pname" />
                        <label class="form-label" for="form7Example1">Product Name</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="form7Example1" class="form-control" name="pprice" />
                        <label class="form-label" for="form7Example1">Product Price</label>
                    </div>

                    <div class="form-outline mb-4">
                      <select name="Category" class="form-control">
                           <?php 
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
            ?>
                       <option value="<?php echo $category["Category_ID"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category["Category_Name"];
                        // To show the category name to the user
                    ?>
                </option>
                <?php 
                endwhile; 
                // While loop must be terminated
            ?>
                      </select>
                        
                        <label class="form-label" for="form7Example1">Product Catagary</label>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea name="pdesc" id="" cols="30" rows="10" class="form-control"></textarea>
                        <label class="form-label" for="form7Example1">Product Description</label>
                    </div>
                    
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="file" id="form7Example2" class="form-control" name="pimage" />
                        <label class="form-label" for="form7Example2">Product images</label>
  </div>
  <div class="submit">
    <input type="submit" name="submit" class="btn btn-danger btn-md">
</div>
                </div>



              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
 
  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>