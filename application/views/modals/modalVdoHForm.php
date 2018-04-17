         <!-- Parsley -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/parsley/parsley.js"></script>


<!-- Bootstrap Datepicker -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datepicker/datepicker.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */

    $(function() { "use strict";
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'mm-dd-yyyy'
        });
    });

</script>

<!-- Bootstrap Timepicker -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/timepicker/timepicker.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/timepicker/timepicker.js"></script>
<script type="text/javascript">

    /* Timepicker */

    $(function() { "use strict";
        $('.timepicker-example').timepicker();
    });
</script>

                    <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="<?php echo site_url('Vdol/saveHtlData'); ?>">
                    <input type="hidden" name="h_request_id" value="<?php echo $h_request_id; ?>">
                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><strong>Execute Hotel Request Id  :</strong>
                                    <a  href="#" title=""><span class="btn btn-border btn-alt border-green btn-link font-green"><?php echo $h_request_id; ?></span></a></h4>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Booking id</label>
                            <div class="col-sm-6">
                                <input type="text" name="h_booking_id1" placeholder="Required Field" required class="form-control">
                            </div>
                               <button type="button" onclick="add_rows();" class="btn btn-round btn-primary">
                                <i class="glyph-icon icon-plus-circle"></i>
                                </button>
                        </div>

                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Hotel Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="h_name1" placeholder="Only Alphanumeric" required class="form-control">
                            </div>
                        </div>
                        

                         <div class="form-group">
                            <label class="col-sm-4 control-label">Checkin Date</label>
                            <div class="col-sm-6">
                                    <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                 <input type="text" class="bootstrap-datepicker form-control" name="h_checkin_date1">
                                    </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-4 control-label">Checkout Date</label>
                            <div class="col-sm-6">
                                    <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control bootstrap-timepicker dropdown" name="h_checkout_date1" >
                                    </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Hotel Address</label>
                            <div class="col-sm-6">
                                <input type="text" name="h_address1" placeholder="Either 10 or 11 digits" required class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Checkin Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" name="h_checkin_time1" type="text">
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-4 control-label">Checkout Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" name="h_checkout_time1" type="text">
                                </div>
                            </div>
                        </div>

                    </div>    

                    </div>

                    <div class="row" id="row_htl_1" style="display:none">
                    <hr>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Booking id</label>
                            <div class="col-sm-6">
                                <input type="text" name="h_booking_id2" placeholder="Required Field" class="form-control">
                            </div>
                        </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Hotel Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="h_name2" placeholder="Only Alphanumeric" class="form-control">
                            </div>
                        </div>
                        

                          <div class="form-group">
                            <label class="col-sm-4 control-label">Checkin Date</label>
                            <div class="col-sm-6">
                                    <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                  <input type="text" class="bootstrap-datepicker form-control" name="h_checkin_date2">
                                    </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-4 control-label">Checkout Date</label>
                            <div class="col-sm-6">
                                    <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                 <input type="text" class="bootstrap-datepicker form-control" name="h_checkout_date2" >
                                    </div>
                            </div>
                        </div> 

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Hotel Address</label>
                            <div class="col-sm-6">
                                <input type="text" name="h_address2" placeholder="Either 10 or 11 digits" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Checkin Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" name="h_checkin_time2" type="text">
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-4 control-label">Checkout Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" name="h_checkout_time2" type="text">
                                </div>
                            </div>
                        </div>

                    </div>    

                    </div>

                    <div class="row" id="row_htl_2" style="display:none">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Booking id</label>
                            <div class="col-sm-6">
                                <input type="text" name="h_booking_id3" placeholder="Required Field"  class="form-control">
                            </div>          
                        </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Hotel Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="h_name3" placeholder="Only Alphanumeric"  class="form-control">
                            </div>
                        </div>
                        

                          <div class="form-group">
                            <label class="col-sm-4 control-label">Checkin Date</label>
                            <div class="col-sm-6">
                                    <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control bootstrap-timepicker dropdown" name="h_checkin_date3">
                                    </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-4 control-label">Checkout Date</label>
                            <div class="col-sm-6">
                                    <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control bootstrap-timepicker dropdown" name="h_checkout_date3" >
                                    </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Hotel Address</label>
                            <div class="col-sm-6">
                                <input type="text" name="h_address3" placeholder="Either 10 or 11 digits"  class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Checkin Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" name="h_checkin_time3" type="text">
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-4 control-label">Checkout Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" name="h_checkout_time3" type="text">
                                </div>
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

<script type="text/javascript">
    function add_rows()
    {
        $('#row_htl_1').toggle();
        $('#row_htl_2').toggle();
    }
</script>