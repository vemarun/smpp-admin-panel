
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
      <h1>View Gateway</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-envelope-o"></i> SMPP Outbox</li>
        <li class="active"><i class="fa fa-table"></i> View Gateway</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">
            <h4>View Gateway</h4>
            <!-- <div id="example_filter" class="dataTables_filter pull-right">
              <input class="form-control" id="placeholderInput" placeholder="Search" type="email">
            </div> -->
			
			<div class="row">
			<div class="col-md-12">
			 <div class="pull-right">
        <label><input type="radio" name="colorRadio" checked="checked" value="bind"> All</label>
        <label><input type="radio" name="colorRadio" value="other"> Active</label>
           </div>
	
				</div>
				</div>
			
			<div class = "bind table-responsive box1">
            <table id="example1" class="table table-responsive table-bordered">
              <thead>
                <tr>
				 <th class="sortable">Gateway Name</th>
				  
                  <th class="sortable">User Name</th>
                  <th class="sortable">User Id</th>
                  <th class="sortable">Throughout</th>
				  <th class="sortable">Bind Status</th>
				  <th class="sortable">NDNC</th>
                   <th class="sortable">Blacklist</th>
				  
                  <th class="sortable">Status</th>
				  <th class="sortable">Action</th>
                
                </tr>
              </thead>
              <tr>
                <td class="text-truncate"></td>
                <td class="text-truncate"><a href="#">test</a></td>
                <td class="text-truncate">Florence Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 653.00</td>
				 <td class="text-truncate">$ 653.00</td>
				  <td class="text-truncate">jgyf ghgh</td>
				<td class="text-truncate"><span class="lable-tag tag-success">Active</span></td>
<td class="action-col" scope="col" id="0">
			 										<label>
											 		
												<a href="edit_gateway.php" onclick="document.editfrm1.submit(); return false;" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Edit Smpp Provider"><i class="fa fa-edit text-info"></i></a>
									                   
			 										</label>
			 										<label>
		 												<a href="#addsender_outbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add SenderID" onclick="addSenderIdOutBound('HB-Bsnl-idea-priorty','ompl-BSNL-WR1');"><i class="fa fa-info-circle text-success"></i></a>
                   									</label>
										 			<label>
										 				<a href="#confrmdel-emp" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Del Smpp Provider" onclick="getDelSmppClient('HB-Bsnl-idea-priorty','ompl-BSNL-WR1');"><i class="fa fa-trash-o text-danger"></i></a>
								                   	</label>
		 											<label>
		 												<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Reset Bind" onclick="getResetBind('HB-Bsnl-idea-priorty','ompl-BSNL-WR1');"><i class="glyphicon glyphicon-link text-warning"></i></a>
                   									</label>
		 										</td>
              </tr>
              <tr>
                <td class="text-truncate">test</td>
                <td class="text-truncate"><a href="#">test</a></td>
                <td class="text-truncate">Dr. Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-unpaid">Overdue</span></td>
                <td class="text-truncate">$ 421.00</td>
				<td class="text-truncate">$ 421.00</td>
				<td class="text-truncate">$ 421.00</td>
				<td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
     <td class="action-col" scope="col" id="0">
			 										<label>
											 			
															<a href="edit_gateway.php" onclick="document.editfrm1.submit(); return false;" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Edit Smpp Provider"><i class="fa fa-edit text-info"></i></a>
									                   
			 										</label>
			 										<label>
		 												<a href="#addsender_outbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add SenderID" onclick="addSenderIdOutBound('HB-Bsnl-idea-priorty','ompl-BSNL-WR1');"><i class="fa fa-info-circle text-success"></i></a>
                   									</label>
										 			<label>
										 				<a href="#confrmdel-emp" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Del Smpp Provider" onclick="getDelSmppClient('HB-Bsnl-idea-priorty','ompl-BSNL-WR1');"><i class="fa fa-trash-o text-danger"></i></a>
								                   	</label>
		 											<label>
		 												<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Reset Bind" onclick="getResetBind('HB-Bsnl-idea-priorty','ompl-BSNL-WR1');"><i class="glyphicon glyphicon-link text-warning"></i></a>
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