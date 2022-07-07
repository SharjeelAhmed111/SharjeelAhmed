<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BIZEAL Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
 <div class="container-scroller">
  <?php 
include("../../leftsidetop.php");
  ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">


            <div class="card">
                <div class="card-body" id="GST">
                    <h1 class="card-title" > Add GST Or Non GST Product </h1>

                    <form action="">
                        <div class="form-outline mb-4">
                            <input type="text" id="form7Example1" class="form-control" />
                            <label class="form-label" for="form7Example1">Product Name</label>
                        </div>
    
                        <div class="form-outline mb-4">
                            <select name="gst_value" id="GST_non_gst" class="form-control" >
                                <option value="">-- Please Select --</option>
                                <option value="gst">GST Product</option>
                                <option value="non_gst">Non GST Product</option>
                            </select>
                            <label class="form-label" for="form7Example1">GST Or Non GST Product</label>
    
                            
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="form7Example1  " class="form-control  GST_rate"  disabled/>
                            <label class="form-label" for="form7Example1">GST Rate</label>
                        </div>
                        
                        
      <div class="submit">
        <a href="#" class="btn btn-danger btn-md" role="button">Submit</a>
    </div>
                    </form>
                    
                </div>
            </div>


            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


            <div class="main-content">
              <div class="container mt-3">
                <!-- Table -->
                <h2 class="mb-5">User List</h2>
                <div class="row">

                  <div class="col">
                    <div class="card ">
                      <div class="card-header border-0">
                        
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                          <thead class=""  style="background-color: #E91E63;">
                            <tr  style="color: white;">
                              <th scope="col">Product Id</th>
                              <th scope="col">Product Name</th>
                              <th scope="col">GST/Non GST</th>
                              <th scope="col">GST Rate</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">
                                <div class="media align-items-center">

                                  <div class="media-body">
                                    <span class="mb-0 text-sm"> #0001</span>
                                  </div>
                                </div>
                              </th>

                              <td>
                                <span class=" mr-4">
                                  Chocolet cake
                                </span>
                              </td>
                              <td>
                                <span class="badge bg-warning badge-lg"style="padding: 5px 15px 5px 15px;font-size:13px;" >GST</span>
                              </td>

                              <td>
                                <span class="">22.00%</span> 
                              </td>
                              
                              

                              <td style="font-size: 20px;"> <a href=""><i class="fa-solid fa-pen-to-square"></i> </a> /
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                              </td>
                            </tr>

                            <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
  
                                    <div class="media-body">
                                      <span class="mb-0 text-sm"> #0002</span>
                                    </div>
                                  </div>
                                </th>
  
                                <td>
                                  <span class=" mr-4">
                                    VAnila cake
                                  </span>
                                </td>
                                <td>
                                  <span class="badge bg-info badge-lg"style="padding: 5px 15px 5px 15px;font-size:13px;" >NON GST</span>
                                </td>
  
                                <td>
                                  <span class="">-------</span> 
                                </td>
                                
                                
  
                                <td style="font-size: 20px;"> <a href=""><i class="fa-solid fa-pen-to-square"></i> </a> /
                                  <a href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                              </tr>

                            
                            
                            
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


  <!-- Jquery lib -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- filter gst or non gst to input field -->
  <script>
      $(document).ready(()=>{
        $("#GST").click(()=>{
            let gst  = $("#GST_non_gst").val();
            if(gst == "gst"){
                $(".GST_rate").prop("disabled", false);
            }
        });
      });
  </script>
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js" ></script>
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