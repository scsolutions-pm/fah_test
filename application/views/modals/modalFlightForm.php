<!-- Parsley -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/parsley/parsley.js"></script>

<!-- Chosen -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/chosen/chosen.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/chosen/chosen.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/chosen/chosen-demo.js"></script>

<!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/uniform/uniform.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/uniform/uniform-demo.js"></script>

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

<!-- Multi select -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/multi-select/multiselect.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/multi-select/multiselect.js"></script>
<script type="text/javascript">
    /* Multiselect inputs */

    $(function() { "use strict";
        $(".multi-select").multiSelect();
        $(".ms-container").append('<i class="glyph-icon icon-exchange"></i>');
    });
</script>


<!-- Textarea -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/textarea/textarea.js"></script>
<script type="text/javascript">
    /* Textarea autoresize */

    $(function() { "use strict";
        $('.textarea-autosize').autosize();
    });
</script>
<!-- Touchspin -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/touchspin/touchspin.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin-demo.js"></script>



<!-- Bootstrap Timepicker -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/timepicker/timepicker.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/timepicker/timepicker.js"></script>
<script type="text/javascript">

    /* Timepicker */

    $(function() { "use strict";
        $('.timepicker-example').timepicker();
    });
</script>
                        <?php if( $output['rows'][0]['elements'][0]['status'] == 'ZERO_RESULTS' ) { ?>
                        <div class="modal-header">
                        <h3 class="modal-title custom-font"><font class="text-blue">Sorry, we could not calculate transit distance as no such service is available!<strong><br>Change your locations and Try Again!!
                        </strong>  </font> </h3>
                        </div>
                        <div class="modal-footer">
                        <button class="btn btn-danger"  onclick="refresh_flt_form()" data-dismiss="modal">No Thanks</button>
                        </div>
                        <?php } else { ?>


                    <?php if($flg==1){ ?>
                        <div class="modal-header">
                        <h3 class="modal-title custom-font"><font class="text-blue">Distance for journey is :
                        <?php print_r($output['rows'][0]['elements'][0]['duration']['text']); ?>
                        that is less than allowed Hrs. So you are not eligible for flight<strong><br>Go for Bus/Train!!
                        </strong>  </font> </h3>
                        </div>
                        <div class="modal-footer">
                        <button class="btn btn-danger"  onclick="refresh_flt_form()" data-dismiss="modal">No Thanks</button>
                        </div>
                    <?php } ?>

                    <?php if($flg ==2) { ?>
                    <div class="modal-header">
                        <h3 class="modal-title custom-font"><font class="text-blue">Distance for journey is :
                        <?php print_r($output['rows'][0]['elements'][0]['duration']['text']); ?>
                         that is greater than allowed Hrs. So you are also eligible for flight<strong><br>Do you want to book a flight now ?
                        </strong>  </font> </h3>
                    </div>

                    <div class="modal-body">

                        <p>
                        <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate=""
                        method="post" action="<?php echo site_url('User/bookFlight_policy'); ?>">
                        <input type="hidden" id="f_loc" name="f_loc" required class="form-control"
                                value="<?php echo $output['origin_addresses'][0]; ?>">
                        <input type="hidden" id="t_loc" name="t_loc" required class="form-control" 
                        value="<?php echo $output['destination_addresses'][0]; ?>">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding State</label>
                            <div class="col-sm-6">
                                        <select name="f_b_state" required id="f_b_state" class="chosen-select form-control ">
                                    <optgroup label="Select State">
                                        <option value="0">Select State</option>
                                        <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>"><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Journey Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" id="j_date" 
                                    name="j_date" required data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding Location</label>
                            <div class="col-sm-6">
                            <?php echo $output['origin_addresses'][0]; ?>
                                
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">From Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" id="f_time" name="f_time" required type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Person's Age</label>
                                <div class="col-sm-6">
                                <input class="form-control" type="text" value="18" id="p_age" name="touchspin-demo-2">
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Frequent flier no.</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Optional" id="ffno" name="ffno" class="form-control">
                            </div>
                        </div>


                         <div class="form-group">
                            <label class="col-sm-3 control-label">Functional Approver</label>
                            <div class="col-sm-6">
                                        <select name="f_apprv" required id="f_apprv" class="chosen-select form-control ">
                                    <optgroup label="Select Approver">
                                        <option value="0">Select Approver</option>
                                        <?php if(!empty($fa_list)) { foreach($fa_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->employee_id; ?>"><?php echo $row1->first_name." ".$row1->last_name."(".$row1->city_name.")"; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="checkbox checkbox-primary">
                                    <label>
                                    <font color="red"><strong>Is special approval required ?</strong></font>
                                        <input type="checkbox" value="checked" id="spl_app_flight_p" onchange="enableSplPolicyFlight()" class="custom-checkbox">
                                    </label>
                                </div>
                        </div>

                        <div class="form-group">
                        <label class="col-sm-3 control-label">Enter details for special approval</label>
                        <div class="col-sm-6">
                            <textarea name="" id="spl_txt_area_flight_p" disabled="disabled" rows="3" class="form-control textarea-autosize"></textarea>
                        </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Drop State</label>
                            <div class="col-sm-6">
                                        <select name="f_d_state" required id="f_d_state" class="chosen-select form-control ">
                                    <optgroup label="Select State">
                                        <option value="0">Select State</option>
                                        <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>"><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                            </div>
                        </div>
                       
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Traveler/Guest Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" name="traveler_f" id="traveler_f" class="form-control">
                                </div>
                            </div>


                           <div class="form-group">
                            <label class="col-sm-3 control-label">Drop Location</label>
                            <div class="col-sm-6">
                            <?php echo $output['destination_addresses'][0]; ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Upto  Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" required type="text" name="t_time" id="t_time">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Person Mob no.</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter mobile no" required class="form-control" id="cntct" name="cntct">
                            </div>
                        </div>

                             <div class="form-group">
                                <label class="col-sm-3 control-label">Functional Dept.</label>
                                <div class="col-sm-6">
                               <input type="text" placeholder="Optional" class="form-control" name="fdpt" id="fdpt">
                                </div>
                            </div>


                            <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" class="form-control" name="f_purpose" id="f_purpose">
                            </div>
                            </div>    
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no" placeholder="Enter S/O no." class="form-control">       
                            </div>
                        </div>

                    </div>
                </div>

                <div class="bg-default content-box text-center pad20A mrg25T">
                     <input type="Submit" class="btn btn-lg btn-primary" value="Book Flight">
                </div>
            </form>
                        </p>
                    </div>
                    <div class="modal-footer">
                 <button class="btn btn-danger"  onclick="refresh_flt_form()" data-dismiss="modal">No Thanks</button>
                    </div>
                    <?php }  } ?>

<script type="text/javascript">
     function enableSplPolicyFlight()
 {
    if(document.getElementById('spl_app_flight_p').checked == true)
    {
     document.getElementById('spl_txt_area_flight_p').removeAttribute('disabled');
    }
    else
    {
     $("#spl_app_flight_p").val("");
     document.getElementById('spl_txt_area_flight_p').setAttribute('disabled', 'disabled');
    }
}
</script>

             

        