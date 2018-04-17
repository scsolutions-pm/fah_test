<?php 
  $edit_id       = $allvalue->bus_rqst_id;
  $b_request_id  = $allvalue->b_request_id;
  $from_state_id = $allvalue->from_state_id;
  $from_city_id  = $allvalue->from_city_id;
  $to_state_id   = $allvalue->to_state_id;
  $to_city_id    = $allvalue->to_city_id;
  
  $journey_date  = $allvalue->journey_date;
  $from_time     = $allvalue->from_time;
  
  $person_age    = $allvalue->person_age;
  $bus_type    = $allvalue->bus_type;
  $functional_aprvr_id    = $allvalue->functional_aprvr_id;
  $purpose    = $allvalue->purpose;
  $so_no    = $allvalue->so_no;
  
  $booking_guest  = $allvalue->booking_guest;
  $traveler_name  = $allvalue->traveler_name;
  $traveler_email = $allvalue->traveler_email;
  $person_mob_no  = $allvalue->person_mob_no;
  $spl_app        = $allvalue->spl_app;
  $spl_app_dtls   = $allvalue->spl_app_dtls;
  $msg = $this->uri->segment(5);
 
  
?>
<!DOCTYPE html> 
<html lang="en">
 <body>
     <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<!-- Bootstrap Wizard -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/wizard/wizard.css">-->
<!-- <script type="text/javascript" src="../../assets/widgets/wizard/wizard.js"></script> -->
<!-- <script type="text/javascript" src="../../assets/widgets/wizard/wizard-demo.js"></script> -->

<!-- Boostrap Tabs -->

<!-- <script type="text/javascript" src="../../assets/widgets/tabs/tabs.js"></script> -->

<script src="http://maps.googleapis.com/maps/api/js?libraries=places&region=in&key=AIzaSyCA6Z_vZLjsXJ77eBszOzgtdOMaz_tOCCE" type="text/javascript"></script>

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



<!-- Bootstrap Timepicker -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/timepicker/timepicker.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/timepicker/timepicker.js"></script>
<script type="text/javascript">

    /* Timepicker */

    $(function() { "use strict";
        $('.timepicker-example').timepicker();
    });
</script>

<!-- Touchspin -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/touchspin/touchspin.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin-demo.js"></script>



<div id="page-title">
    <h2> Bus Request Id : <?php echo $b_request_id; ?></h2>
    <p>You can Edit book your trip here.</p>
    <div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>
    <div id="theme-switcher-wrapper">
        <div class="scroll-switcher">
            <h5 class="header">Layout options</h5>
            <ul class="reset-ul">
                <li>
                    <label for="boxed-layout">Boxed layout</label>
                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-header">Fixed header</label>
                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-sidebar">Fixed sidebar</label>
                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                </li>
                <li>
                    <label for="closed-sidebar">Closed sidebar</label>
                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                </li>
            </ul>
            <div class="boxed-bg-wrapper hide">
                <h5 class="header">
                    Boxed Page Background
                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                </h5>
                <div class="theme-color-wrapper clearfix">
                    <h5>Patterns</h5>
                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                    <div class="clear"></div>

                    <h5 class="mrg15T">Solids &amp;Images</h5>
                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                </div>
            </div>
            <h5 class="header">
                Header Style
                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
            <h5 class="header">
                Sidebar Style
                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Message Final Booking Done -->
<?php if(isset($msg) && $msg == 'suces'){ ?>
<div class="example-box-wrapper" id="msgss">
                    <div class="alert alert-close alert-success">
                        <a href="#" title="Close" class="glyph-icon alert-close-btn icon-remove"></a>
                        <div class="bg-green alert-icon">
                            <i class="glyph-icon icon-check"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Process Successfully Done</h4>
                            <p>Value are successful edit</p>
                        </div>
                    </div>
                </div>                   
<?php } ?>                 

 <!-- End Message -->
 <div class="panel">
            <div class="panel-body">
                <div class="example-box-wrapper">
                    <div class="tab-content">
                    	 <!--///////////////
                             ///////////////
                            	Bus Tab
                         	 ///////////////
                         	 //////////////-->
                    
                         <div class="tab-pane fade active in" id="tab-example-1">
                            <p>
             <form class="form-horizontal bordered-row" id="bus_form" name="bus_form" data-parsley-validate="" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding State</label>
                            <div class="col-sm-6">
                                        <select name="" id="b_state_boarding" required class="chosen-select form-control ">
                                    <optgroup label="Select State">
                                        <option value="0">Select State</option>
                                        <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>" <?php if(isset($from_state_id) && $from_state_id == $row1->state_id){ ?>selected <?php } ?>><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                               <spam class="parsley-required" id="err_b_state_boarding"></spam>           
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding City</label>
                            <div class="col-sm-6">
                                 <input type="text" name="" id="b_city_boarding" required class="form-control" autocomplete="on" value="<?php echo $from_city_id; ?>">
                              <spam class="parsley-required" id="err_b_city_boarding"></spam>          
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" id="pick_date" class="bootstrap-datepicker form-control" required data-date-format="mm/dd/yy" value="<?php  echo date_format(date_create($journey_date),"m-d-Y"); ?>">
                                </div>
                                <spam class="parsley-required" id="err_pick_date"></spam>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Person's Age</label>
                                <div class="col-sm-6" id="age">
                                <input class="form-control" type="text" value="<?php echo $person_age; ?>" id="p_age" name="touchspin-demo-2">
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Bus type</label>
                            <div class="col-sm-6">
                                             <select id="bus_type_select" required class="form-control">
                                        <option value="0">Select cab</option>  
                                        <?php foreach($bus_type_list as $bus_types){ ?>  
                                        <option value="<?php echo $bus_types->id; ?>" <?php if(isset($bus_type) && $bus_type==$bus_types->id){ ?>selected <?php } ?>><?php echo $bus_types->type_title; ?></option>
                                        <?php } ?>
                                             
                                    </select>
                                  <spam class="parsley-required" id="err_bus_type_select"></spam>
                            </div>
                        </div>

                          
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Select Functional Approver</label>
                            <div class="col-sm-6">
                                        <select name="f_apprv" required id="f_apprv" class="chosen-select form-control ">
                                    <optgroup label="Select Approver">
                                        <option value="0">Select Approver</option>
                                        <?php if(!empty($fa_list)) { foreach($fa_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->employee_id; ?>" <?php if(isset($functional_aprvr_id) && $functional_aprvr_id == $row1->employee_id){ ?>selected <?php } ?>><?php echo $row1->first_name." ".$row1->last_name."(".$row1->city_name.")"; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                                        <spam class="parsley-required" id="err_f_apprv"></spam>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop State</label>
                            <div class="col-sm-6">
                                       <select name="" id="b_state_drop" required class="chosen-select form-control ">
                                    <optgroup label="Select State">
                                        <option value="0">Select State</option>
                                        <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>" <?php if(isset($to_state_id) &&  $to_state_id == $row1->state_id){ ?>selected <?php } ?>><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                                     <spam class="parsley-required" id="err_b_state_drop"></spam>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop City</label>
                            <div class="col-sm-6">
                                <input type="text" name="" id="b_city_drop" required class="form-control" autocomplete="on" value="<?php echo $to_city_id; ?>">  
                                 
                                     <spam class="parsley-required" id="err_b_city_drop"></spam>
                            </div>
                              <?php if($user_type==1 || $user_type==2) { ?>
                                <button type="button" class="btn btn-round btn-azure "  onclick="checkFlight('b');"
                                title="check eligibility for Flight">
                                <i class="glyph-icon icon-plane"></i>
                                </button>                                   
                            <?php } ?>
                            
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Departure Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" id="pick_time" required type="text" value="<?php echo $from_time; ?>">
                                </div>
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" id="b_purpose" class="form-control" value="<?php echo $purpose;?>">
                            </div>
                        </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no" placeholder="Enter S/O no." class="form-control" value="<?php echo $so_no; ?>">
                               <spam class="parsley-required" id="err_so_no"></spam>       
                            </div>
                            </div>
                             
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                            <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                    <label>
                                    <strong>Booking forGuest ?</strong>
                                        <input type="checkbox" value="checked" id="guest_app" onchange="enableGuestForm()" class="custom-checkbox" <?php if(isset($booking_guest) && $booking_guest ==1){ ?>checked <?php } ?>>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="guestEm_div" <?php if(isset($booking_guest) && $booking_guest !=1){ ?>style="display:none" <?php } ?>>
                            <label class="col-sm-3 control-label">Guest Emailid</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_email" class="form-control" value="<?php echo $traveler_email; ?>">
                             <spam class="parsley-required" id="err_traveler_email"></spam>  
                            </div>
                            </div>
                </div>
                <div class="col-md-6">
                             <div class="form-group"id="guestNam_div"  <?php if(isset($booking_guest) && $booking_guest !=1){ ?>style="display:none" <?php } ?>>
                            <label class="col-sm-3 control-label">Guest Name</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_name" class="form-control" value="<?php echo $traveler_name; ?>">
                            <spam class="parsley-required" id="err_traveler_name"></spam>
                            </div>
                            </div>

                            <div class="form-group" id="guestMo_div" <?php if(isset($booking_guest) && $booking_guest !=1){ ?>style="display:none" <?php } ?>>
                            <label class="col-sm-3 control-label">Guest MobileNo.</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_mob" class="form-control" value="<?php echo $person_mob_no; ?>">
                            <spam class="parsley-required" id="err_traveler_mob"></spam>
                            </div>
                            </div>
                </div>
                </div>
                
                

                 <div class="row">
                 <div class="col-md-6">
                        <div class="form-group">
                        <div class="checkbox checkbox-primary">
                                    <label>
                                    <font color="red"><strong>Is special approval required ?</strong></font>
                                        <input type="checkbox" value="checked" id="spl_app_bus" onchange="enablePolicyBus()" class="custom-checkbox" <?php if(isset($spl_app) && $spl_app==2){ ?>checked <?php } ?>>
                                    </label>
                                </div>
                        </div>
                  </div>       
                  <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Enter details for special approval</label>
                        <div class="col-sm-6">
                            <textarea name="" id="spl_txt_area_bus" <?php if(isset($spl_app) && $spl_app !=2){ ?> disabled="disabled" <?php } ?> rows="3" class="form-control textarea-autosize"><?php echo $spl_app_dtls; ?></textarea>
                             <spam class="parsley-required" id="err_spl_txt_area_bus"></spam>
                        </div>
                        </div>
                  </div>        

                </div> 


                <div class="bg-default content-box text-center pad20A mrg25T">
                    <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('1');" value="Submit">
                </div>

 <input type="hidden" placeholder="Optional" id="traveler_b" class="form-control">
 <input type="hidden"  placeholder="Enter mobile no" required class="form-control" id="cntct">

            </form>    
                            </p>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>


                    </div>

                

            </div>
        </div>


<!-- Modal Vendor Data -->
<div class="modal fade" id="b_rqst_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            </div>
                        </div>
</div> 

<div class="modal fade" id="t_rqst_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            </div>
                        </div>
</div> 


<div class="modal fade" id="f_rqst_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            </div>
                        </div>
</div>

<div class="modal fade" id="flightBookingFrmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            </div>
                        </div>
</div> 


<script type="text/javascript">
    function refresh_bus_data()
    {
        $("a[data-target=#c_rqst_Modal]").click(function(ev) {
        ev.preventDefault();
        var target = $(this).attr("href");
        // load the url and show modal on success
        $("#c_rqst_Modal .modal-content").load(target, function() { 
        $("#c_rqst_Modal").modal("show"); 
        });
        });
    }

    function refresh_train_data()
    {
        $("a[data-target=#h_rqst_Modal]").click(function(ev) {
        ev.preventDefault();
        var target = $(this).attr("href");
        // load the url and show modal on success
        $("#h_rqst_Modal .modal-content").load(target, function() { 
        $("#h_rqst_Modal").modal("show"); 
        });
        });
    }

    function refresh_flt_data()
    {
        $("a[data-target=#f_rqst_Modal]").click(function(ev) {
        ev.preventDefault();
        var target = $(this).attr("href");
        // load the url and show modal on success
        $("#f_rqst_Modal .modal-content").load(target, function() { 
        $("#f_rqst_Modal").modal("show"); 
        });
        });
    }

    function refresh_flt_form()
    {
        $("a[data-target=#flightBookingFrmModal]").click(function(ev) {
        ev.preventDefault();
        var target = $(this).attr("href");
        // load the url and show modal on success
        $("#flightBookingFrmModal .modal-content").load(target, function() { 
        $("#flightBookingFrmModal").modal("show"); 
        });
        });
    }
</script>
<!-- Modal Vendor Data End -->



</body>

<script type="text/javascript">

     function addRequest(btn_flg)
     {    
     	 var submircheak = 0 ;   
		 var edit_id = <?php echo $edit_id; ?> ;
        if(btn_flg==1)
    	  { 
	  
     var b_state_boarding = $('#b_state_boarding').val();
	   if (b_state_boarding==null || b_state_boarding=="" || b_state_boarding=="0"){ 
	        submircheak =1; 
			setvalidation('b_state_boarding','F',"Please Select Boarding State name");
         }else{
			    setvalidation('b_state_boarding','S',''); 
			 }
			 
     var b_city_boarding = $('#b_city_boarding').val();
	  if (b_city_boarding==null || b_city_boarding=="" || b_city_boarding=="0"){ 
	        submircheak =1; 
			setvalidation('b_city_boarding','F',"Please Select Boarding City name");
         }else{
			    setvalidation('b_city_boarding','S',''); 
			 }
			 
     var b_state_drop = $('#b_state_drop').val();
	 if (b_state_drop==null || b_state_drop=="" || b_state_drop=="0"){ 
	        submircheak =1; 
			setvalidation('b_state_drop','F',"Please Select Drop State name");
         }else{
			    setvalidation('b_state_drop','S',''); 
			 }
			 
			 
     var b_city_drop = $('#b_city_drop').val();
	 if (b_city_drop==null || b_city_drop=="" || b_city_drop=="0"){ 
	        submircheak =1; 
			setvalidation('b_city_drop','F',"Please Select Drop City name");
         }else{
			    setvalidation('b_city_drop','S',''); 
			 }

     var bus_type_select = $('#bus_type_select').val();
	  if (bus_type_select==null || bus_type_select=="" || bus_type_select=="0"){ 
	        submircheak =1; 
			setvalidation('bus_type_select','F',"Please Select Boarding City name");
         }else{
			    setvalidation('bus_type_select','S',''); 
			 }
			 
     var b_purpose = $('#b_purpose').val();
     
     var p_age = $('#p_age').val();
     var cntct = $('#cntct').val();

     var pick_date = $('#pick_date').val();
	 if (pick_date==null || pick_date==""){ 
	        submircheak =1; 
			setvalidation('pick_date','F',"Please Select Date");
         }else{
			    setvalidation('pick_date','S',''); 
			 }
	 
     var pick_time = $('#pick_time').val();
     
     var requestee = $('#requestee').val();
     var traveler = $('#traveler_b').val();  
     var f_apprv = $('#f_apprv').val();
	 if (f_apprv==null || f_apprv=="" || f_apprv=="0"){ 
	        submircheak =1; 
			setvalidation('f_apprv','F',"Please Select Functional Approver");
         }else{
			    setvalidation('f_apprv','S',''); 
			 }
			 
     var so_no = $('#so_no').val();
	 if (so_no==null || so_no=="" || so_no=="0"){ 
	        submircheak =1; 
			setvalidation('so_no','F',"Please Enter S/O no.");
         }else{
			    setvalidation('so_no','S',''); 
			 }
	 
	 var traveler_email = $('#traveler_email').val();
	 var traveler_name = $('#traveler_name').val();
	 var traveler_mob = $('#traveler_mob').val();
	 
	
	//Booking forGuest 
	 if(document.getElementById('guest_app').checked == true)
    {  
		var booking_guest = 'chk'; 
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 if (!filter.test(traveler_email)){   
	        submircheak =1; 
			setvalidation('traveler_email','F',"Please Insert Guest Emailid");
         }else{
			    setvalidation('traveler_email','S',''); 
			 } 
			 
		if (traveler_name==null || traveler_name==""){   
	        submircheak =1; 
			setvalidation('traveler_name','F',"Please Insert Guest Name");
         }else{
			    setvalidation('traveler_name','S',''); 
			 } 
			 
		if (traveler_mob==null || traveler_mob==""){   
	        submircheak =1; 
			setvalidation('traveler_mob','F',"Please Insert Guest MobileNo.");
         }else{
			    setvalidation('traveler_mob','S',''); 
			 } 
			 	 
			  
		 
    }else{
		  var traveler_name = '';
     	  var traveler_email = ''; 
          var traveler_mob = ''; 
		  var booking_guest = 'unchk';
		}
 
  
    if(document.getElementById('spl_app_bus').checked == true)
    {
		var spl_txt_area_bus = $('#spl_txt_area_bus').val();
		var spl_txt_area = $('#spl_txt_area_bus').val();
         var spl_app_bus = 'chk'; 
		 if (spl_txt_area_bus==null || spl_txt_area_bus==""){   
	        submircheak =1; 
			setvalidation('spl_txt_area_bus','F',"Enter details for special approval");
         }else{
			    setvalidation('spl_txt_area_bus','S',''); 
			 } 
    }     
    else
    {
         var spl_app_bus = 'unchk'
		 var spl_txt_area = '';
    }
	
	if(document.getElementById('guest_app').checked == true)
    {
         var guest_app_bus = 'chk';  
    }     
    else
    {
         var guest_app_bus = 'unchk'
    }  
	
	 
	
 
   
	
	if(submircheak ==1){  
			   return false;
			}else{
     		 $.ajax({ 

        url: '<?php echo site_url();?>/User/editSaveBusForm',
        type: 'POST',    

        data: {
				
				 b_state_boarding : b_state_boarding ,
				 b_city_boarding: b_city_boarding,
				 b_state_drop:b_state_drop, 
                 b_city_drop:b_city_drop,
				 bus_type_select:bus_type_select , 
				 b_purpose:b_purpose, 
				 p_age:p_age,cntct:cntct , 
				 pick_date:pick_date, 
				 pick_time:pick_time, 
				 requestee:requestee ,
				 traveler:traveler, 
				 f_apprv:f_apprv , 
				 so_no:so_no , 
				 spl_app_bus:spl_app_bus, 
				 spl_txt_area_bus:spl_txt_area , 
				 guest_apps:guest_app_bus,
				 traveler_email:traveler_email,
				 traveler_name:traveler_name,
				 traveler_mob:traveler_mob,   
				 btn_flg:3,edit_id:edit_id,booking_guest:booking_guest},

        success: function (htmldata2) { 
		 		if(htmldata2.trim() == 'suces'){
						  //$('#msgss').show();
						  window.location.href = "<?php echo site_url();?>/User/editForm/<?php echo $edit_id;  ?>/3/suces";
					}
		 },
        error: function () {
                              alert('error');
                            }
        });
	 	}

    }

    }
	

function setvalidation(strId,strT,strMsg){

	   if(strT=='S'){

		       jQuery('#'+strId).css('border','');

			   jQuery('#err_'+strId).html('');

		   }else if(strT=='F'){			      

			      jQuery('#'+strId).css('border','1px solid #e03838');

			      jQuery('#err_'+strId).html(strMsg);

		  }

	}	
</script>

<script type="text/javascript">
function enableGuestForm()
{
    if(document.getElementById('guest_app').checked == true)
    {
    $( "#guestNam_div" ).show(); $( "#guestEm_div" ).show(); 
    $( "#guestMo_div" ).show();
    }
    else
    {
     $( "#guestNam_div" ).hide(); $( "#guestEm_div" ).hide();    
     $( "#guestMo_div" ).hide(); 
    }

}


function enableGuestFormTrain()
{    
    if(document.getElementById('guest_app_train').checked == true)
    {
    $( "#guestNam_div_train" ).show(); $( "#guestEm_div_train" ).show(); 
    $( "#guestMo_div_train" ).show();
    }
    else
    {
     $( "#guestNam_div_train" ).hide(); $( "#guestEm_div_train" ).hide();    
     $( "#guestMo_div_train" ).hide(); 
    }

}

    function enablePolicyBus()
 {
    if(document.getElementById('spl_app_bus').checked == true)
    {
     document.getElementById('spl_txt_area_bus').removeAttribute('disabled');
    }
    else
    {
     $("#spl_txt_area_bus").val("");
     document.getElementById('spl_txt_area_bus').setAttribute('disabled', 'disabled');
    }
}

 function enablePolicyTrain()
 {
    if(document.getElementById('spl_app_train').checked == true)
    {
     document.getElementById('spl_txt_area_train').removeAttribute('disabled');
    }
    else
    {
     $("#spl_txt_area_train").val("");
     document.getElementById('spl_txt_area_train').setAttribute('disabled', 'disabled');
    }
}

 function enablePolicyFlight()
 {
    if(document.getElementById('spl_app_flight').checked == true)
    {
     document.getElementById('spl_txt_area_flight').removeAttribute('disabled');
    }
    else
    {
     $("#spl_txt_area_flight").val("");
     document.getElementById('spl_txt_area_flight').setAttribute('disabled', 'disabled');
    }
}
</script>


<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('b_city_boarding_t');
      var options = {
                      types: ['(cities)'],
                      componentRestrictions: {country: "in"}
                     };

      var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>


<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('b_city_drop_t');
      var options = {
                      types: ['(cities)'],
                      componentRestrictions: {country: "in"}
                     };

      var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>


<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('b_city_drop');
      var options = {
                      types: ['(cities)'],
                      componentRestrictions: {country: "in"}
                     };

      var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('b_city_boarding');
      var options = {
                      types: ['(cities)'],
                      componentRestrictions: {country: "in"}
                     };

      var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script type="text/javascript">
    function checkFlight(srt)
    {
	 if(srt == 't'){
   		var addressFrom =  $('#b_city_boarding_t').val();
   		var addressTo =  $('#b_city_drop_t').val();
	 }else if(srt == 'b'){
		 var addressFrom =  $('#b_city_boarding').val();
   		   var addressTo =  $('#b_city_drop').val();
		 }
    $.ajax({
        url: '<?php echo site_url();?>/User/getTrainDistance',
        type: 'POST',    
        data: { addressFrom : addressFrom , addressTo: addressTo 
              },
        success: function (htmldata2) {
                                              // alert(htmldata2);
                                             jQuery('#flightBookingFrmModal .modal-content').html(htmldata2);
                                             jQuery('#flightBookingFrmModal').modal('show', { });
                                        },
        error: function () {
                              alert('error');
                            }
        });
    }
</script>

<script>
	window.setTimeout(function() {
    $("#msgss").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>
</html>
