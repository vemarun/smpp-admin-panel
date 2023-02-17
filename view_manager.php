<?php

include 'header.php';
?>

<?php
include 'sidebar.php';

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>View Manager</h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-envelope-o"></i> SMPP Inbox</li>
        <li class="active"><i class="fa fa-table"></i> View Manager</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">
            <h4>View Manager</h4>
            <!-- <div id="example_filter" class="dataTables_filter pull-right">
              <input class="form-control" id="placeholderInput" placeholder="Search" type="email">
            </div> -->
			<div class = "table-responsive">
            <table id="example1" class="table table-responsive table-bordered">
              <thead>
                <tr>
				   <th class="sortable">Sr No</th>
                  <th class="sortable">User Id</th>
                  <th class="sortable">Manager Name</th>
                  <th class="sortable">Designation</th>
				  <th class="sortable">Creation Date</th>
         
				  <th class="sortable">Action</th>
                
                </tr>
              </thead>
              <tr>
                <td class="text-truncate"></td>
                <td class="text-truncate"><a href="#">test</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
             
				<td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
   <td class="action-col" scope="col" id="0">
			 										<label>
											 			<form action="editsmppresuser" method="post" id="myform" name="editfrm1">
													
															<input type="hidden" name="checkStatus" value="Active">
															<a href="edit_manager.php" onclick="document.editfrm1.submit(); return false;" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Edit Smpp User"><i class="fa fa-edit text-info"></i></a>
									                    </form>
			 										</label>
			 										
										 			
								                   	<label>
		 												<a href="#confrmdel-account" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Delete" onclick="delAccountManager('222213','Arun','1');"><i class="fa fa-trash-o text-danger"></i></a><div class="tooltip fade top" role="tooltip" id="tooltip45086" style="top: 52px; left: 950.875px; display: block;"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Send Account Details</div></div>
                   									</label>
		 			
		 										</td>
              </tr>
              <tr>
                <td class="text-truncate">test</td>
                <td class="text-truncate"><a href="#">test</a></td>
                <td class="text-truncate">Dr. Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-unpaid">Overdue</span></td>
             
				<td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="action-col" scope="col" id="0">
			 										<label>
											 			<form action="editsmppresuser" method="post" id="myform" name="editfrm1">
													
															<input type="hidden" name="checkStatus" value="Active">
															<a href="edit_manager.php" onclick="document.editfrm1.submit(); return false;" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Edit Smpp User"><i class="fa fa-edit text-info"></i></a>
									                    </form>
			 										</label>
			 										
										 			
								                   	<label>
		 												<a href="#confrmdel-account" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Delete" onclick="delAccountManager('222213','Arun','1');"><i class="fa fa-trash-o text-danger"></i></a><div class="tooltip fade top" role="tooltip" id="tooltip45086" style="top: 52px; left: 950.875px; display: block;"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Send Account Details</div></div>
                   									</label>
		 			
		 										</td>
              </tr>
             
            </table>
           
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 
  <?php

include 'footer.php';
?>