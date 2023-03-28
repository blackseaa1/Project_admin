<?php
include_once 'connect/openConnnect.php';
$sql_category="SELECT * From category";
$query_category= mysqli_query($connect,$sql_category);
include_once 'connect/closeConnect.php';
//?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Thêm Sản Phẩm</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link href="../../Project_1_admin/favicon.ico" rel="shortcut icon">
    
    <!-- FontAwesome JS-->
    <script src="../../Project_1_admin/assets/font/fontawesome-pro-5.13.0-web/js/all.min.js" defer></script>
    
    <!-- App CSS -->  
	<link href="../../Project_1_admin/assets/style/common/base.css" rel="stylesheet">
	<link href="../../Project_1_admin/assets/style/common/normalize.css" rel="stylesheet">
	<link href="../../Project_1_admin/assets/style/common/reset.css" rel="stylesheet">
    <link id="theme-style" href="../../Project_1_admin/assets/style/portal.css" rel="stylesheet">
</head> 

<body class="app">   	

    <?php
        include 'views/layout/sidebar.php';
    ?>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
                <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Thêm Sản Phẩm</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
								<div class="col-auto">						    
								    <a class="btn app-btn-secondary bg-danger text-white" href="index.php?controller=product">
									    Trở Lại</a>
							    </div>
							</div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
				<div class="card-body">
					<form method="post" action="index.php?controller=product&action=store" enctype="multipart/form-data">
	
							<div class="mb-3">
								<label class="form-label" for="exampleInputEmail1">Product Name</label>
								<input class="form-control" id="exampleInputEmail1" name="product_name" type="text" aria-describedby="emailHelp">
							</div>
							<div class="mb-3">
								<label class="form-label" for="exampleInputPassword1">Product Image</label>
								<input class="form-control"  name="img" type="file">
							</div>
							<div class="mb-3">
								<label class="form-label" for="exampleInputPassword1">Description</label>
								<input class="form-control"  name="description" type="text">
							</div>
							<div class="mb-3">
								<label class="form-label" for="exampleInputPassword1">Author</label>
								<input class="form-control"  name="author" type="text">
							</div>
							<div class="mb-3">
								<label class="form-label" for="exampleInputPassword1">Category</label>
								<select class="form-select" name="category_id" aria-label="Default select example">
                                    <?php
                                    while ($row_category = mysqli_fetch_array($query_category)){?>
                                        <option value="<?php echo $row_category['category_id']; ?>">
                                            <?php echo $row_category['category_name']; ?>

                                        </option>
                                    <?php } ?>
                                </select>

							</div>
							<div class="mb-3">
								<label class="form-label" for="exampleInputPassword1">Prices</label>
								<input class="form-control" id="exampleInputPassword1" name="price" type="text">
							</div>
							<div class="mb-3">
								<label class="form-label" for="exampleInputPassword1">Quantity</label>
								<input class="form-control"  name="quantity" type="number">
							</div>
							<div class="mb-3">
								<label class="form-label" for="exampleInputPassword1">Created Date</label>
								<input class="form-control"  name="created_date" type="date">
							</div>
	<!--                        <button type="submit" name="backsubmit" class="btn btn-outline-dark">Back to products</button>-->
							<button class="btn btn-primary text-white fs-5" name="submit" type="submit">Add Product</button>
					</form>
	
				</div>
			</div>
			</div>
				
			    
		    </div><!--//container-fluid-->
	    <!--//app-content-->
	    
    <!--//app-wrapper-->  				

 
    <!-- Javascript -->          
    <script src="../../Project_1_admin/assets/plugins/popper.min.js"></script>
    <script src="../../Project_1_admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    
    <!-- Page Specific JS -->
    <script src="../../Project_1_admin/assets/js/app.js"></script>

</body>
</html> 

