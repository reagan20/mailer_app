<!-- theme settings -->
<div class="site-settings clearfix hidden-xs">
    <div class="settings clearfix">
        <div class="trigger ion ion-settings left"></div>
        <div class="wrapper left">
            <ul class="list-unstyled other-settings">
                <li class="clearfix mb10">
                    <div class="left small">Nav Horizontal</div>
                    <div class="md-switch right">
                        <label>
                            <input type="checkbox" id="navHorizontal">
                            <span>&nbsp;</span>
                        </label>
                    </div>


                </li>
                <li class="clearfix mb10">
                    <div class="left small">Fixed Header</div>
                    <div class="md-switch right">
                        <label>
                            <input type="checkbox" id="fixedHeader">
                            <span>&nbsp;</span>
                        </label>
                    </div>
                </li>
                <li class="clearfix mb10">
                    <div class="left small">Nav Full</div>
                    <div class="md-switch right">
                        <label>
                            <input type="checkbox" id="navFull">
                            <span>&nbsp;</span>
                        </label>
                    </div>
                </li>
            </ul>
            <hr>
            <ul class="themes list-unstyled" id="themeColor">
                <li data-theme="theme-zero" class="active"></li>
                <li data-theme="theme-one"></li>
                <li data-theme="theme-two"></li>
                <li data-theme="theme-three"></li>
                <li data-theme="theme-four"></li>
                <li data-theme="theme-five"></li>
                <li data-theme="theme-six"></li>
                <li data-theme="theme-seven"></li>
            </ul>
        </div>
    </div>
</div>
<!-- #end theme settings -->

<!-- Dev only -->
<!-- Vendors -->
<script src="<?php echo base_url();?>assets/scripts/vendors.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/d3.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/c3.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/screenfull.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/select2.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/bootstrap-rating.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/app.js"></script>
<script src="<?php echo base_url();?>assets/scripts/index.init.js"></script>
<script src="<?php echo base_url();?>assets/scripts/plugins/summernote.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/form-elements.init.js"></script>
<script src="<?php echo base_url();?>assets/styles/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/styles/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/scripts/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    } );
</script>
<script type="text/javascript">
    //Populates users
    $('#server').on('change', function(){
        var groupID = $(this).val();
        if(groupID){
            $.ajax({
                type:'POST',
                url:'<?php echo site_url('Admincontroller/ajax_request');?>',
                data:'server='+groupID,// *user_groups is the input field name
                success:function(data){
                    $('#host').html(data);
                }

            });
        }
        /*else{
            $('#users').html('<option value="">~~Select group first~~</option>');
        }*/
    });
</script>

<script type="text/javascript">
    //Populates tasks
    $('#server').on('change', function(){
        var groupID1 = $(this).val();
        if(groupID1){
            $.ajax({
                type:'POST',
                url:'<?php echo site_url('Admincontroller/ajax_request1');?>',
                data:'server='+groupID1,// *user_groups is the input field name
                success:function(data){
                    $('#port').html(data);
                }

            });
        }
        /*else{
            $('#tasks').html('<option value="">~~Select group first~~</option>');
        }*/
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".add-row").click(function(){
            var tasks = $("#tasks").val();
            var target_value = $("#target_value").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + tasks + "</td><td>" + target_value + "</td></tr>";
            $("table tbody").append(markup);
        });

        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });
</script>

</body>
</html>