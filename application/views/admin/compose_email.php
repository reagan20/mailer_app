
<!-- #end main-navigation -->

<!-- content-here -->
<div class="content-container" id="content">
    <!-- dashboard page -->
    <div class="page page-dashboard">

        <div class="page-wrap">

            <div class="row">
                <!-- dashboard header -->
                <div class="col-md-12">
                    <div class="dash-head clearfix mt15 mb20">
                        <div class="left">
                            <button data-toggle="modal" data-target="#addUser" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Compose Email</button>
<!--                        --><?php //echo  $this->session->userdata['email'].' '.$this->session->userdata['password'];?>
                        </div>
                    </div>
                </div>
                <!-- Add user Modal -->
                <div id="addUser" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Compose Message</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?php echo  site_url('Admincontroller/sendemail');?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <label>Email accounts:</label> <span class="required">*</span>
                                            <select class="form-control" name="account">
                                                <option>Select account to use</option>
                                                <?php
                                                foreach ($accounts as $ac){
                                                    ?>
                                                    <option value="<?php echo $ac['email'];?>"><?php echo $ac['email'];?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <label>Recipient:</label> <span class="required">*</span>
                                            <input class="form-control" name="recipient" placeholder="Recipient email address" required>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <label>Subject:</label>
                                            <input class="form-control" name="subject" placeholder="Mail Subject">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Attach:</label>
                                            <input type="file" class="form-control" name="attachment" placeholder="Upload">
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <label>Message:</label> <span class="required">*</span>
                                            <textarea class="form-control" rows="5" name="message" placeholder="Type here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="compose_btn" class="btn btn-primary"><i class="fa fa-send"></i> Send</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- #end row -->

            <!-- mini boxes -->
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-primary mb20 mini-box panel-hovered">
                        <div class="panel-heading"><span class="fa fa-envelope"></span> Email Records</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Recipient</th>
                                        <th>Email Subject</th>
                                        <th>Email Message</th>
                                        <th>Sent time</th>
                                        <th style="width: 10%;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //$count=1;
                                    //foreach ($user as $s){
                                        ?>
                                        <tr>
                                            <td><?php //echo  $count;?></td>
                                            <td><?php //echo  $s['fname'];?></td>
                                            <td><?php //echo  $s['phone'];?></td>
                                            <td><?php //echo  $s['email'];?></td>
                                            <td><?php //echo  $s['national_id'];?></td>
                                            <td>
                                                <a class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                        //$count++;
                                    //}
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</div>

