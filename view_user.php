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
      <h1>View User</h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-envelope-o"></i> SMPP Inbox</li>
        <li class="active"><i class="fa fa-table"></i> View User</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="chart-box">
            <h4>View User</h4>
            <div class="row">
			<div class="col-md-12">
			 <div class="pull-right">
        <label><input type="radio" name="colorRadio" checked="checked" value="bind"> All</label>
        <label><input type="radio" name="colorRadio" value="other"> Active</label>
           </div>
	
				</div>
				</div>
			<div class = "bind box1 table-responsive">
            <table id="example1" class="table table-responsive table-bordered">
              <thead>
                <tr>
                  <th class="sortable">User Name</th>
                  <th class="sortable">Gateway Name</th>
                  <th class="sortable">Balance</th>
				  <th class="sortable">Account Expiry</th>
                  <th class="sortable">Account Creation</th>
                  <th class="sortable">Bind Status</th>
                  <th class="sortable">Status</th>
				  <th class="sortable">Action</th>
                
                </tr>
              </thead>
              <tr>
                <td class="text-truncate"></td>
                <td class="text-truncate"><a href="#">test</a></td>
                <td class="text-truncate">Florence</td>
                <td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 653.00</td>
				<td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">inactive</td>
				<td class="action-col" scope="col" id="1">
						<label>
			 			<form action="editsmppuser" method="post" id="myform" name="editfrm2">
							<input type="hidden" name="systemId" value="INUSER311">
							<input type="hidden" name="userId" value="abbsnl-num">
							<a href="edit_user.php" onclick="document.editfrm2.submit(); return false;" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Edit Smpp User"><i class="fa fa-edit text-info"></i></a>
	                    </form>
						</label>
						<label>
							<a href="#addsender_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add Sender Id" onclick="addSenderIdINBound('INUSER311','abbsnl-num');"><i class="fa fa-info-circle text-success"></i></a>
	          									</label>
		 			<label>
		 				<a href="#confrmdel-emp" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Delete Smpp User" onclick="getDelSmppUser('INUSER311','abbsnl-num');"><i class="fa fa-trash-o text-danger"></i></a>
	                  	</label>
	                  	<label>
							<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Reset Bind" onclick="getResetBind('INUSER311','abbsnl-num');"><i class="glyphicon glyphicon-link text-warning"></i></a>
	          			</label>
	          			<label>
							<a href="#addipaddress_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add IP Address" onclick="getIpAddressInBound('INUSER311','abbsnl-num');"><i class="glyphicon glyphicon-globe text-primary"></i></a>
	          			</label>
						<label>
							<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Send Account Details" onclick="resentEmail('INUSER311','abbsnl-num');">
								<i class="glyphicon glyphicon-envelope text-info" id="txtsendmail_abbsnl-num"></i>
								<i id="txtspin_abbsnl-num" class="fa fa-spinner fa-spin " style="display: none;"></i>
							</a>
		         		</label>
		         		<label>
							<a href="#addkey_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add Key" onclick="getUniqueKey('abbsnl-num');"><i class="fa fa-key text-default"></i></a>
          				</label>
					</td>
              </tr>
              <tr>
                <td class="text-truncate">test</td>
                <td class="text-truncate"><a href="#">test</a></td>
                <td class="text-truncate">Dr. Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-unpaid">Overdue</span></td>
                <td class="text-truncate">$ 421.00</td>
				<td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 653.00</td>
				<td class="action-col" scope="col" id="1">
						<label>
			 			<form action="editsmppuser" method="post" id="myform" name="editfrm2">
							<input type="hidden" name="systemId" value="INUSER311">
							<input type="hidden" name="userId" value="abbsnl-num">
							<a href="edit_user.php" onclick="document.editfrm2.submit(); return false;" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Edit Smpp User"><i class="fa fa-edit text-info"></i></a>
	                    </form>
						</label>
						<label>
							<a href="#addsender_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add Sender Id" onclick="addSenderIdINBound('INUSER311','abbsnl-num');"><i class="fa fa-info-circle text-success"></i></a>
	          									</label>
		 			<label>
		 				<a href="#confrmdel-emp" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Delete Smpp User" onclick="getDelSmppUser('INUSER311','abbsnl-num');"><i class="fa fa-trash-o text-danger"></i></a>
	                  	</label>
	                  	<label>
							<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Reset Bind" onclick="getResetBind('INUSER311','abbsnl-num');"><i class="glyphicon glyphicon-link text-warning"></i></a>
	          			</label>
	          			<label>
							<a href="#addipaddress_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add IP Address" onclick="getIpAddressInBound('INUSER311','abbsnl-num');"><i class="glyphicon glyphicon-globe text-primary"></i></a>
	          			</label>
						<label>
							<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Send Account Details" onclick="resentEmail('INUSER311','abbsnl-num');">
								<i class="glyphicon glyphicon-envelope text-info" id="txtsendmail_abbsnl-num"></i>
								<i id="txtspin_abbsnl-num" class="fa fa-spinner fa-spin " style="display: none;"></i>
							</a>
		         		</label>
		         		<label>
							<a href="#addkey_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add Key" onclick="getUniqueKey('abbsnl-num');"><i class="fa fa-key text-default"></i></a>
          				</label>
					</td>
              </tr>
             
            </table>
           </div>


			<div class = "other box1 table-responsive">
            <table id="example3" class="table table-responsive table-bordered">
              <thead>
                <tr>
                  <th class="sortable">User Name</th>
                  <th class="sortable">Gateway Name</th>
                  <th class="sortable">Balance</th>
				  <th class="sortable">Account Expiry</th>
                  <th class="sortable">Account Creation</th>
                  <th class="sortable">Bind Status</th>
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
				<td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">$ 653.00</td>
				<td class="action-col" scope="col" id="1">
						<label>
			 			<form action="editsmppuser" method="post" id="myform" name="editfrm2">
							<input type="hidden" name="systemId" value="INUSER311">
							<input type="hidden" name="userId" value="abbsnl-num">
							<a href="edit_user.php" onclick="document.editfrm2.submit(); return false;" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Edit Smpp User"><i class="fa fa-edit text-info"></i></a>
	                    </form>
						</label>
						<label>
							<a href="#addsender_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add Sender Id" onclick="addSenderIdINBound('INUSER311','abbsnl-num');"><i class="fa fa-info-circle text-success"></i></a>
	          									</label>
		 			<label>
		 				<a href="#confrmdel-emp" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Delete Smpp User" onclick="getDelSmppUser('INUSER311','abbsnl-num');"><i class="fa fa-trash-o text-danger"></i></a>
	                  	</label>
	                  	<label>
							<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Reset Bind" onclick="getResetBind('INUSER311','abbsnl-num');"><i class="glyphicon glyphicon-link text-warning"></i></a>
	          			</label>
	          			<label>
							<a href="#addipaddress_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add IP Address" onclick="getIpAddressInBound('INUSER311','abbsnl-num');"><i class="glyphicon glyphicon-globe text-primary"></i></a>
	          			</label>
						<label>
							<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Send Account Details" onclick="resentEmail('INUSER311','abbsnl-num');">
								<i class="glyphicon glyphicon-envelope text-info" id="txtsendmail_abbsnl-num"></i>
								<i id="txtspin_abbsnl-num" class="fa fa-spinner fa-spin " style="display: none;"></i>
							</a>
		         		</label>
		         		<label>
							<a href="#addkey_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add Key" onclick="getUniqueKey('abbsnl-num');"><i class="fa fa-key text-default"></i></a>
          				</label>
					</td>
              </tr>
              <tr>
                <td class="text-truncate">test</td>
                <td class="text-truncate"><a href="#">test</a></td>
                <td class="text-truncate">Dr. Douglas</td>
                <td class="text-truncate"><span class="lable-tag tag-unpaid">Overdue</span></td>
                <td class="text-truncate">$ 421.00</td>
				<td class="text-truncate"><span class="lable-tag tag-success">Paid</span></td>
                <td class="text-truncate">Active</td>
				<td class="action-col" scope="col" id="1">
						<label>
			 			<form action="editsmppuser" method="post" id="myform" name="editfrm2">
							<input type="hidden" name="systemId" value="INUSER311">
							<input type="hidden" name="userId" value="abbsnl-num">
							<a href="edited_user.php" onclick="document.editfrm2.submit(); return false;" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Edit Smpp User"><i class="fa fa-edit text-info"></i></a>
	                    </form>
						</label>
						<label>
							<a href="#addsender_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add Sender Id" onclick="addSenderIdINBound('INUSER311','abbsnl-num');"><i class="fa fa-info-circle text-success"></i></a>
	          									</label>
		 			<label>
		 				<a href="#confrmdel-emp" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Delete Smpp User" onclick="getDelSmppUser('INUSER311','abbsnl-num');"><i class="fa fa-trash-o text-danger"></i></a>
	                  	</label>
	                  	<label>
							<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Reset Bind" onclick="getResetBind('INUSER311','abbsnl-num');"><i class="glyphicon glyphicon-link text-warning"></i></a>
	          			</label>
	          			<label>
							<a href="#addipaddress_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add IP Address" onclick="getIpAddressInBound('INUSER311','abbsnl-num');"><i class="glyphicon glyphicon-globe text-primary"></i></a>
	          			</label>
						<label>
							<a href="#" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Send Account Details" onclick="resentEmail('INUSER311','abbsnl-num');">
								<i class="glyphicon glyphicon-envelope text-info" id="txtsendmail_abbsnl-num"></i>
								<i id="txtspin_abbsnl-num" class="fa fa-spinner fa-spin " style="display: none;"></i>
							</a>
		         		</label>
		         		<label>
							<a href="#addkey_inbound" class="btn btn-default btn-icon btn-xs tip" title="" rel="tooltip" data-toggle="modal" data-placement="top" data-original-title="Add Key" onclick="getUniqueKey('abbsnl-num');"><i class="fa fa-key text-default"></i></a>
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
  
<!-----------------model all---------------->

<div id="addsender_inbound" class="modal fade in" tabindex="-1" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content modal-lg">
             <div class="modal-header btn-success">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="clearSenderForm();">×</button>
				  <h4 class="modal-title"><i class="icon-notification"></i><span id="heading">Add Sender ID</span></h4>
             </div>
              <div class="modal-body with-padding">
              	<div class="alert alert-danger fade in block-inner" style="display: none;" id="sendererrid">
                      <button type="button" class="close" onclick="clearSenderForm();">
                          ×</button>
                      <i class="icon-cancel-circle"></i>
				<span id="sendererraction"></span>
                  </div>
                  <div class="alert alert-success fade in block-inner" style="display: none;" id="sendersuccess">
                      <button type="button" class="close" onclick="clearSenderForm();">
                          ×</button>
                      <i class="icon-checkmark-circle"></i>
					<span id="senderpassaction"></span>
                  </div>
                  <div id="addSenderIdContentForm">
<div id="xSender">
	<div class="form-horizontal1">
		<div class="row">
	    	<div class="col-md-12">
	        	<div class="col-md-7">
	            	<div class="form-group">
	                	<label class="col-md-4 control-label" style="line-height: 30px;">
	                    	Sender ID:</label>
	                        <div class="col-md-8">
	                        	<input type="text" class="form-control ctl-name" name="txtSenderId" id="txtSenderId" maxlength="6">
	                        	<div style="color: #FF0000;" id="errorSendertext"></div>
							</div>
					</div>
				</div>
	            <div class="col-md-3">
	            	<select class="form-control" name="scope" id="scope">
						<option value="1">Allowed</option>
						<option value="0">Blocked</option>
					</select> 
				</div>
	            <div class="col-md-2">
	            	<button class="btn btn-primary butt_padd" id="add" onclick="AddSenderId('abbsnl-num','INUSER311');" value="Add">Add</button>
	            	<button type="button" class="btn btn-primary" id="senprocessAdd" style="display: none; margin-left: -10px;">
		                                                <i class="fa fa-spinner fa-spin"></i> Processing</button>
				</div>
			</div>
		</div>
		<div class="row">&nbsp;</div>
		<div class="row">
    	<div class="col-md-8 smart-form">
    		<div class="form-group">
    		<div class="inline-group">
    			<label class="radio" style="margin-right: 15px; margin-left: 20px;">
    				<input type="radio" name="uploadscope0" id="auploadscope" checked="checked">
					<i></i>All
				</label>
				<label class="radio" style="margin-right: 15px;">
					<input type="radio" name="uploadscope0" id="buploadscope">
					<i></i>Alpha 
				</label>
				<label class="radio" style="margin-right: 15px;">
					<input type="radio" name="uploadscope0" id="cuploadscope">
					<i></i>Numeric 
				</label>
				<label class="radio" style="margin-right: 15px;">
					<input type="radio" name="uploadscope0" id="duploadscope">
					<i></i>AlphaNumeric 
				</label>
			</div>
    	</div></div>
    	<div class="col-md-4 text-right">
        	<div class="demo-btn text-right" style="margin-top: -6px;">
        		<section class="smart-form">
        			<div class="input input-file">
        				<span class="button" style="padding: 10px 14px; padding-top : 0px;"><i class=" btn-label glyphicon glyphicon-cloud-upload" id="txtrefresh" style="padding: 8px 12px;"></i><label id="">Upload</label><label></label><input type="file" id="attachsenderfile" name="txtFile-name" onchange="addBulkSenderId();"></span>
        			</div>
        		</section>
			</div>
		</div>
	</div>
	</div>
    <div class="row">&nbsp;</div>
    <div class="widget-body">
    <div class="table-responsive">
    	<table class="table table-bordered" id="datatable_fixed_column">
			<thead>
				<tr>
					<th>Sender ID</th><th>Privilege</th><th>Status</th><th>Action</th>
				</tr>
				</thead><tbody>
				
				</tbody>
			</table>
		</div></div>
        <div class="modal-footer1"></div>
                      
</div>
      
</div>
                  
              </div>
              <input type="hidden" name="txtHiddenUserId" value="abbsnl-num" id="txtHiddenUserId">
              <input type="hidden" name="txtHiddenSystemId" value="INUSER311" id="txtHiddenSystemId">
              <!-- <div class="modal-footer">
                          </div> -->
              </div>
          </div>
        </div>

<!----------------second model------------------->

<!-- PREVIEW MODAL -->
	<div id="addipaddress_inbound" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
      <div class="modal-dialog">
          <div class="modal-content modal-lg">
             <div class="modal-header btn-success">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="clearIpAddressForm();">×</button><h4 class="modal-title"><i class="icon-notification"></i><span id="heading">Add IP Address</span></h4>
             </div>
              <div class="modal-body with-padding">
              	<div class="alert alert-danger fade in block-inner" style="display: none;" id="iperrid">
                      <button type="button" class="close" onclick="clearIpAddressForm();">
                          ×</button>
                      <i class="icon-cancel-circle"></i>
				<span id="iperraction"></span>
                  </div>
                  <div class="alert alert-success fade in block-inner" style="display: none;" id="ipsuccess">
                      <button type="button" class="close" onclick="clearIpAddressForm();">
                          ×</button>
                      <i class="icon-checkmark-circle"></i>
					<span id="ippassaction"></span>
                  </div>
                  <div id="addIPAddressForm">





<!-- PREVIEW MODAL -->
<div id="xIpAddress">
	<div class="row">
		<div class="smart-form">
			<section class="col col-md-3">
				<label class="label">IP Address:</label>
				<label class="input">
					<input type="text" class="form-control ctl-name" name="txtIpAddress" id="txtIpAddress" placeholder="IP Address">
                </label>
                <div style="color: #FF0000;" id="errortxtIpAddress"></div>
			</section>
			<section class="col col-md-3">
				<label class="label">Remarks:</label>
				<label class="input">
					<input type="text" class="form-control ctl-name" name="txtIpRemarks" id="txtIpRemarks" placeholder="Remarks">
				</label>
			</section>
			<section class="col col-md-3">
				<label class="label">Privilege</label>
				<label class="select">
					<select class="form-control" name="scope" id="scope">
						<option value="1">Allowed</option>
						<option value="0">Blocked</option>
					</select>
					<i></i>
				</label>
			</section>
			
		</div>
		<section class="col-md-3" style="margin-top: 25px;">
			<div class="form-group">
           		<button class="btn btn-primary butt_padd" id="add" onclick="AddIpAddress('abbsnl-num','INUSER311');" value="Add">Add</button>
           		<button type="button" class="btn btn-primary" id="ipProcessAdd" style="display: none; margin-left: -10px;">
                                                <i class="fa fa-spinner fa-spin"></i> Processing</button>
			</div>
		</section>
	</div>
	<div class="row">&nbsp;</div>
    <div class="widget-body">
    <div class="table-responsive">
    	<table class="table table-bordered" id="ctl00_ContentPlaceHolder2_VendorGV">
			<thead>
				<tr>
					<th>IP Address</th><th>Privilege</th><th>Remarks</th><th>Status</th><th>Action</th>
				</tr>
				</thead><tbody>
				
				</tbody>
			</table>
		</div></div>
        <div class="modal-footer1"></div>
                      
</div>
      
</div>
                  
              </div>
              <input type="hidden" name="txtHiddenUserId" value="" id="txtHiddenUserId">
              <input type="hidden" name="txtHiddenSystemId" value="" id="txtHiddenSystemId">
              <!-- <div class="modal-footer">
                          </div> -->
              </div>
          </div>
        </div>

<div id="addkey_inbound" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
      <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header btn-success">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="clearKeyForm();">×</button><h4 class="modal-title"><i class="icon-notification"></i><span id="heading">Add Key</span></h4>
             </div>
              <div class="modal-body with-padding">
              	<div class="alert alert-danger fade in block-inner" style="display: none;" id="keyerrid">
                      <button type="button" class="close" onclick="clearKeyForm();">
                          ×</button>
                      <i class="icon-cancel-circle"></i>
				<span id="keyerraction"></span>
                  </div>
                  <div class="alert alert-success fade in block-inner" style="display: none;" id="keysuccess">
                      <button type="button" class="close" onclick="clearKeyForm();">
                          ×</button>
                      <i class="icon-checkmark-circle"></i>
					<span id="keypassaction"></span>
                  </div>
                  <div id="addKeyContentForm">





<!-- PREVIEW MODAL -->
<div id="xKey">
	<div class="form-horizontal">
		<div class="row">
	    	<div class="col-md-12">
	        	<div class="col-md-12">
	            	<button class="btn btn-primary butt_padd btn-block" id="key" onclick="AddUniqueKey('abbsnl-num');" value="Add">Generate Key</button>
	            	<button type="button" class="btn btn-primary btn-block" id="keyprocessAdd" style="display: none; margin-left: -10px;">
		                                                <i class="fa fa-spinner fa-spin"></i> Processing</button>
				</div>
			</div>
		</div>
	</div>
    <div class="row">&nbsp;</div>
    <div class="widget-body">
    <div class="table-responsive">
    	<table class="table table-bordered" id="ctl00_ContentPlaceHolder2_VendorGV">
			<thead>
				<tr>
					<th>Key</th><th>Status</th><th>Action</th>
				</tr>
				</thead><tbody>
				
				</tbody>
			</table>
		</div></div>
        <div class="modal-footer1"></div>
        <input type="hidden" name="txtkeyUserId" id="txtkeyUserId" value="abbsnl-num">
</div>
      
</div>
                  
              </div>
              <input type="hidden" name="txtHiddenKeyUserId" value="abbsnl-num" id="txtHiddenKeyUserId">
              <!-- <div class="modal-footer">
                          </div> -->
              </div>
          </div>
        </div>


<?php

include 'footer.php';
?>