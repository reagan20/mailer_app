
<div class="content-container" id="content">
    <!-- dashboard page -->
    <div class="page page-dashboard">
        <div class="page-wrap">
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
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form method="post" action="<?php echo  site_url('Admincontroller/createemailaccounts');?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Email Server:</label> <span class="required">*</span>
                                    <select class="form-control" name="server" id="server" required>
                                        <option value="">~~Email Server~~</option>
                                        <?php
                                        foreach ($server as $serve){
                                            ?>
                                            <option value="<?php echo $serve['server_id'];?>"><?php echo $serve['server'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label>Smtp Host:</label>
                                    <select class="form-control" name="host" id="host" readonly>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Smtp Port:</label>
                                    <select class="form-control" name="port" id="port" readonly>

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label>Email Address:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label>Password:</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                            </div><br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="createemailaccount_btn" class="btn btn-primary"><i class="fa fa-save"></i> Save Email</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-primary mb20 mini-box panel-hovered">
                        <div class="panel-heading"><span class="fa fa-envelope"></span> Email Accounts</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 5%;">S/N</th>
                                        <th>Email</th>
                                        <th>Host Server</th>
                                        <th>Server Port</th>
                                        <th style="width: 30%;">Action</th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                        <?php
                                        $count=1;
                                        foreach ($accounts as $a){
                                            ?>
                                            <form method="post" action="<?php echo site_url('Admincontroller/updatehost/'.$a['id']);?>">
                                            <tr>
                                                <td><?php echo  $count;?>.</td>
                                                <td><?php echo  $a['email'];?></td>
                                                <?php
                                                if($a['smtp_port']==587){
                                                    ?>
                                                    <td><input name="smtp_host" value="<?php echo $a['smtp_host'];?>" class="form-control"></td>
                                                    <?php
                                                }
                                                elseif ($a['smtp_port']==465){
                                                    ?>
                                                    <td><?php echo  $a['smtp_host'];?></td>
                                                    <?php
                                                }
                                                ?>

                                                <td><?php echo  $a['smtp_port'];?></td>
                                                <td>
                                                    <button type="submit" name="updatehost_btn" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Update</button>
                                                    <a class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Update Password</a>
                                                    <a class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            </form>
                                            <?php
                                            $count++;
                                        }
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

