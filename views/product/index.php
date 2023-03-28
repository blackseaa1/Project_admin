<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Products</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../Project_1_admin/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- FontAwesome JS-->
    <script src="../../Project_1_admin/assets/plugins/fontawesome/js/all.min.js" defer></script>
    
    <!-- App CSS -->  
	<link href="../../Project_1_admin/assets/style/common/base.css" rel="stylesheet">
	<link href="../../Project_1_admin/assets/style/common/normalize.css" rel="stylesheet">
	<link href="../../Project_1_admin/assets/style/common/reset.css" rel="stylesheet">
    <link id="theme-style" href="../../Project_1_admin/assets/style/portal.css" rel="stylesheet">
    <style>
        .cell i[class*=bi-]{
            font-size: 22px;
            margin-right: 6px;
        }
    </style>
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
			            <h1 class="app-page-title mb-0">List Products</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
							    <div class="col-auto">
								    
								    <select class="form-select w-auto" >
										  <option selected value="option-1">All</option>
										  <option value="option-2">This week</option>
										  <option value="option-3">This month</option>
										  <option value="option-4">Last 3 months</option>
										  
									</select>
							    </div>
								<div class="col-auto">						    
								    <a class="btn app-btn-secondary bg-success text-white" href="index.php?controller=product&action=create">
									    + Add Products</a>
							    </div>
							</div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Image</th>
												<th>Author</th>
												<th>Quantity</th>
												<th>Prices</th>
												<th>Category</th>
												<th>Created Date</th>
												<th>Operation</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
                                        $id=1;
                                        foreach($products as $product){?>
											<tr>
												<td class="cell"> #<?php echo $id++; ?></td>
												<td class="cell">
                                                    <span class="truncate"><?php echo $product['product_name']; ?></span>
                                                </td>
												<td class="cell">
                                                    <img style="width: 150px" src="./img/<?php echo $product['img'];?>" alt="Book">
                                                </td>
												<td class="cell">
                                                    <span><?php echo $product['author'];?></span>
                                                </td>
												<td class="cell">
                                                    <?php echo $product['quantity']; ?>
                                                </td>
												<td class="cell">
                                                    <span class="badge bg-success p-2">$<?php echo $product['price'];?></span>
                                                </td>
												<td class="cell">
                                                    <span class="btn-sm app-btn-secondary fs-6">
                                                        <?php echo $product['category_name']; ?>
                                                    </span>
                                                </td>
                                                <td class="cell"><span><?php echo $product['created_date']; ?></span></td>
                                                <td class="cell">
                                                    <a href="index.php?controller=product&action=edit&id=<?php echo $product['id'];?>">
<!--                                                        <i class="bi bi-pencil-square"></i>-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete product <?= $product['product_name'] ?>?')" href="index.php?controller=product&action=destroy&id=<?= $product['id']?>">
                                                        <svg style="color: #dc3545" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
<!--                                                        <i class="bi bi-trash" style="color: #dc3545"></i>-->
                                                    </a>
                                                </td>
											</tr>
                                        <?php
                                            }
                                        ?>
<!--											<tr>-->
<!--												<td class="cell">#15345</td>-->
<!--												<td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>-->
<!--												<td class="cell">Dylan Ambrose</td>-->
<!--												<td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>-->
<!--												<td class="cell"><span class="badge bg-warning">Pending</span></td>-->
<!--												<td class="cell">$96.20</td>-->
<!--												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td class="cell">#15344</td>-->
<!--												<td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>-->
<!--												<td class="cell">Teresa Holland</td>-->
<!--												<td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>-->
<!--												<td class="cell"><span class="badge bg-success">Paid</span></td>-->
<!--												<td class="cell">$123.00</td>-->
<!--												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>-->
<!--											</tr>-->
<!--											-->
<!--											<tr>-->
<!--												<td class="cell">#15343</td>-->
<!--												<td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>-->
<!--												<td class="cell">Jayden Massey</td>-->
<!--												<td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>-->
<!--												<td class="cell"><span class="badge bg-success">Paid</span></td>-->
<!--												<td class="cell">$199.00</td>-->
<!--												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>-->
<!--											</tr>-->
<!--											-->
<!--											<tr>-->
<!--												<td class="cell">#15342</td>-->
<!--												<td class="cell"><span class="truncate">Justo feugiat neque</span></td>-->
<!--												<td class="cell">Reina Brooks</td>-->
<!--												<td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>-->
<!--												<td class="cell"><span class="badge bg-danger">Cancelled</span></td>-->
<!--												<td class="cell">$59.00</td>-->
<!--												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>-->
<!--											</tr>-->
<!--											-->
<!--											<tr>-->
<!--												<td class="cell">#15341</td>-->
<!--												<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>-->
<!--												<td class="cell">Raymond Atkins</td>-->
<!--												<td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>-->
<!--												<td class="cell"><span class="badge bg-success">Paid</span></td>-->
<!--												<td class="cell">$678.26</td>-->
<!--												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>-->
<!--											</tr>-->
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
						<nav class="app-pagination">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							    </li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
								    <a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav><!--//app-pagination-->
						
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="../../Project_1_admin/assets/plugins/popper.min.js"></script>
    <script src="../../Project_1_admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    
    <!-- Page Specific JS -->
    <script src="../../Project_1_admin/assets/js/app.js"></script>

</body>
</html> 

