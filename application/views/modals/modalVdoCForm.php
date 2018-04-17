<!-- Parsley -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/parsley/parsley.js"></script>

                    <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="<?php echo site_url('Vdol/saveCabData'); ?>">
                    <input type="hidden" name="c_request_id" value="<?php echo $c_request_id; ?>">
                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><strong>Execute Cab Request Id  :</strong>
                                    <a  href="#" title=""><span class="btn btn-border btn-alt border-green btn-link font-green"><?php echo $c_request_id; ?></span></a></h4>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Enter Driver Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="driver_name" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Enter Vehicle No.</label>
                            <div class="col-sm-6">
                                <input type="text" name="vehicle_number" data-parsley-type="alphanum" placeholder="Only Alphanumeric" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Enter Driver Mob. No.</label>
                            <div class="col-sm-6">
                                <input type="text" name="contact_number" data-parsley-type="digits" data-parsley-minlength="10" data-parsley-maxlength="11" placeholder="Either 10 or 11 digits" required class="form-control">
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>

                    <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Execute">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="refresh_exec_data();">Close</button>
                    </div>

                   </form>