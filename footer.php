  <!-- Main Footer -->
  <footer class="main-footer dark-bg">
    <div class="pull-right hidden-xs"> Version 1.0</div>
    Copyright &copy; 2019 SMPP Admin. All rights reserved. </footer>
</div>
<!-- wrapper --> 

<!-- jQuery --> 
<script src="dist/js/jquery.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script> 

<script src="dist/js/chosen.jquery.min.js"></script>
<script src="dist/js/chosen.order.jquery.min.js"></script>
<script src="dist/js/jquery.maskedinput.min.js"></script> 
<script src="dist/js/ovio.js"></script> 
<script src="dist/js/select2.min.js"></script> 
<script src="dist/js/main.js"></script>
<!-- DataTables -->
<script src="dist/js/jquery.dataTables.min.js"></script>
<script src="dist/js/dataTables.bootstrap.min.js"></script>
<!-- charts --> 


<script src="plugins/stepform/jq.stepform.js"></script>


<script>
  $(function () {
    $('#example1, #example3').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
    
</script>





</body>
</html>