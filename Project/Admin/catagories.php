<?php
require_once "db.php";
require_once "auth_session.php";

 if(isset($_POST['btn-submit']))
 {
  
    $msg="";
    $catname=$_POST['cat-name'];
    $filename = $_FILES["cat-image"]["name"];
    $tempname = $_FILES["cat-image"]["tmp_name"];  
    $folder = "./uploadimages/".$filename; 
    $sql="INSERT INTO `category`( `Category_Name`, `Category_Image`) VALUES ('$catname','$folder ')";
    $result=mysqli_query($con, $sql);
    if($result)
    {
       echo "<script>alert('Category Added');</script>";
    }
    else
    {
      echo "<script>alert('Category Not Added');</script>";
    }
    if(move_uploaded_file($tempname, $folder))
    {

    }
    else
    {

    }

 }

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


            <div class="card">
                <div class="card-body">
                    <h1 class="card-title"> Add Category </h1>

                    <!-- Name input -->
                    <form class="catform" method="POST" action="" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="cat-name" id="Category" />
                        <label class="form-label" for="form7Example1">Category Name</label>
                        <input type="hidden" class="form-control" name="catid" value="" id="catid">
                    </div>
                    
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="file" class="form-control" name="cat-image" id="Categoryimg" />
                        <label class="form-label" for="form7Example2">Catagory Icon</label>

  </div>
                    <div class="submit">
                      <input type="submit" name="btn-submit" class="btn btn-danger btn-md">
                       
                    </div>
                    </form>
                </div>
            </div>


            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


            <div class="main-content">
              <div class="container mt-3">
                <!-- Table -->
                <h2 class="mb-5">Category List</h2>
                <div class="row">

                  <div class="col">
                    <div class="card ">
                      <div class="card-header border-0">
                        
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                          <thead class=""  style="background-color: #E91E63;">
                            <tr  style="color: white;">
                              <th scope="col">Category Id</th>
                              <th scope="col">Category Name</th>
                              <th scope="col">Icon</th>
                        
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
   $sql="SELECT * FROM `category`";
   $result=mysqli_query($con,$sql);

   while($row=mysqli_fetch_assoc($result))
   { 
    
   echo"<tr>
     <td>".$row["Category_ID"]." </td>
      <td>".$row["Category_Name"]." </td>
   <td><img  src='".$row["Category_Image"]."' ></td> 
   
   </tr>";   
    }
    
  ?>
                            
                            
                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer py-4">
                        <nav aria-label="...">
                          <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1">
                                <i class="fas fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#">
                                <i class="fas fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
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
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
          href="" target="_blank">bootstrapdash.com </a>2021</span>
    </div>
  </footer>
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