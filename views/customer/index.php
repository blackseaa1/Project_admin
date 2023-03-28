
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>User</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="../../Project_1_admin/favicon.ico">
    
    <!-- FontAwesome JS-->
    <script src="assets/font/fontawesome-pro-5.13.0-web/js/all.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
			            <h1 class="app-page-title mb-0">Các Thành Viên</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center"
                                          action="index.php?controller=customer"
                                    method="post" >
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="search" class="form-control search-orders" placeholder="Search">
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
								    <a class="btn app-btn-secondary bg-success text-white" href="index.php?controller=customer&action=create">
									    + Add User</a>
							    </div>
							</div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			   
			    
			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#user-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#admin" role="tab" aria-controls="orders-paid" aria-selected="false">Admin</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#customers" role="tab" aria-controls="orders-pending" aria-selected="false">Customers</a>
				</nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="user-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th >Id</th>
												<th >Username</th>
												<!--        <th >Password</th>-->
												<th >Email</th>
												<th >Phone</th>
												<td >Role</td>
												<td >Operation</td>
											</tr>
										</thead>
										<tbody>
                                        <?php
                                        $id=15346;
                                        foreach ($customers as $customer){
                                            ?>
                                            <tr>
                                                <td class="cell">#<?php echo $id++?></td>
                                                <td class="cell">
                                                    <span class="truncate">
                                                         <?php echo $customer['username']?>
                                                    </span>
                                                </td>
                                                <td class="cell"><?php echo $customer['email']?></td>
                                                <td class="cell">
                                                    <span>
                                                        <?php echo $customer['phone']?>
                                                    </span>
                                                </td>
                                                <td class="cell">
                                                    <?php
                                                    if ($customer['role']=='customer'){
                                                    ?>
                                                        <span class="badge bg-warning text-white">
                                                        <?php echo $customer['role']?>
                                                    </span>
                                                    <?php
                                                    }
                                                    elseif ($customer['role']=='admin') {?>
                                                    <span class="badge bg-success text-white">
                                                        <?php echo $customer['role']?>
                                                   <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td class="cell">
                                                    <a href="index.php?controller=customer&action=edit&id=<?= $customer['id']?>">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a class="" onclick="return confirm('Are you sure you want to delete user <?= $customer['username'] ?>?')" href='index.php?controller=customer&action=destroy&id=<?= $customer['id']?>'>
                                                        <i class="bi bi-trash" style="color: #dc3545"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
<!--

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
			        
			        <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="orders-paid-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
								    
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th >Id</th>
												<th >Username</th>
												<!--        <th >Password</th>-->
												<th >Email</th>
												<th >Phone</th>
												<td >Role</td>
												<td >Operation</td>
												<td ></td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="cell">#15346</td>
												<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
												<td class="cell">John Sanders</td>
												<td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
												<td class="cell">

                                                    <span class="badge bg-success">Admin</span>
                                                </td>
												<td class="cell">$259.35</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
											
											<tr>
												<td class="cell">#15344</td>
												<td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
												<td class="cell">Teresa Holland</td>
												<td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$123.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
											
											<tr>
												<td class="cell">#15343</td>
												<td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
												<td class="cell">Jayden Massey</td>
												<td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$199.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
										
											
											<tr>
												<td class="cell">#15341</td>
												<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
												<td class="cell">Raymond Atkins</td>
												<td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$678.26</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
			        
			        <div class="tab-pane fade" id="customers" role="tabpanel" aria-labelledby="orders-pending-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th >Id</th>
												<th >Username</th>
												<!--        <th >Password</th>-->
												<th >Email</th>
												<th >Phone</th>
												<td >Role</td>
												<td >Operation</td>
												<td ></td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="cell">#15345</td>
												<td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
												<td class="cell">Dylan Ambrose</td>
												<td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
												<td class="cell"><span class="badge bg-warning">Pending</span></td>
												<td class="cell">$96.20</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
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

