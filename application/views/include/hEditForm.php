<?php 
 $edit_id = $allvalue->hotel_rqst_id; 
 $h_request_id = $allvalue->h_request_id;
 $state_id = $allvalue->state_id;
 $no_of_rooms = $allvalue->no_of_rooms;
 $checkin_date = $allvalue->checkin_date;
 $checkin_time = $allvalue->checkin_time;
 
 $checkout_date = $allvalue->checkout_date;
 $checkout_time = $allvalue->checkout_time;
 
 
 $fst_preference = $allvalue->fst_preference;
 $scnd_preference = $allvalue->scnd_preference;
 $thrd_preference = $allvalue->thrd_preference;
 $functional_aprvr_id = $allvalue->functional_aprvr_id;
 $city_id = $allvalue->city_id;
 
 $no_of_persons = $allvalue->no_of_persons;
 $purpose = $allvalue->purpose;
 $so_no = $allvalue->so_no;
 
 $booking_guest = $allvalue->booking_guest;
 $guest_name = $allvalue->guest_name;
 $guest_email = $allvalue->guest_email;
 $guest_mob = $allvalue->guest_mob;
 $spl_app=$allvalue->spl_app;
 $spl_app_dtls=$allvalue->spl_app_dtls;
  $msg = $this->uri->segment(5); 
?>
<!DOCTYPE html> 
<html lang="en">
 <body>
 		 <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    
<!-- Autocomplete google api -->
<script src="http://maps.googleapis.com/maps/api/js?libraries=places&region=in&key=AIzaSyCA6Z_vZLjsXJ77eBszOzgtdOMaz_tOCCE" type="text/javascript"></script>

<!-- Bootstrap Wizard -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/wizard/wizard.css">-->
<script type="text/javascript" src="../../assets/widgets/wizard/wizard.js"></script>
<script type="text/javascript" src="../../assets/widgets/wizard/wizard-demo.js"></script>

<!-- Boostrap Tabs -->

<script type="text/javascript" src="../../assets/widgets/tabs/tabs.js"></script>

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
     <h2> HOTEL Request Id : <?php echo $h_request_id; ?></h2>
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

 <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    HOTEL Booking Form
                </h3>
                <div class="example-box-wrapper">
                    
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab-example-1">
                            <p>
             
                             <form class="form-horizontal bordered-row" id="hotel_form" name="hotel_form" data-parsley-validate="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select State</label>
                            <div class="col-sm-6">
                                        <select name=""  class="chosen-select form-control " id="h_state_select" >
                                    <optgroup label="Select State">
                                        <option value="0">Select State</option>
                                        <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>" <?php if(isset($state_id) && $state_id==$row1->state_id){ ?>selected <?php } ?>><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                                        <spam class="parsley-required" id="err_h_state_select"></spam>
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label">No. of Rooms</label>
                            <div class="col-sm-6">
                                        <select required class="form-control" id="rooms">
                                    <option value="0">Select rooms</option>
                                    <?php for($j=1;$j<=5;$j++){ ?>
                                    <option value="<?php echo $j; ?>" <?php if(isset($no_of_rooms) && $no_of_rooms == $j){ ?>selected <?php } ?>><?php echo $j; ?></option>
                                    <?php } ?>
                                     
                                        </select>
                                  <spam class="parsley-required" id="err_rooms"></spam>      
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Checkin Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" id="in_date" required data-date-format="mm/dd/yy" value="<?php  echo date_format(date_create($checkin_date),"m-d-Y"); ?>">
                                </div>
                                <spam class="parsley-required" id="err_in_date"></spam> 
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Checkin Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" required type="text" id="in_time" value="<?php echo $checkin_time; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Preference 1</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter preference" class="form-control" id="prfr1" value="<?php echo $fst_preference; ?>">
                                <spam class="parsley-required" id="err_prfr1"></spam>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Preference 3</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Optional" class="form-control" id="prfr3" value="<?php echo $thrd_preference; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Functional Approver</label>
                            <div class="col-sm-6">
                                     <select name="f_apprv" required id="f_apprv" class="chosen-select form-control ">
                                    <optgroup label="Select Approver">
                                        <option value="0">Select Approver</option>
                                        <?php if(!empty($fa_list)) { foreach($fa_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->employee_id; ?>" <?php if(isset($functional_aprvr_id) && $functional_aprvr_id==$row1->employee_id){ ?>selected<?php } ?>><?php echo $row1->first_name." ".$row1->last_name."(".$row1->city_name.")"; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                                  <spam class="parsley-required" id="err_f_apprv"></spam>
                            </div>
                          
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="" id="h_city_select" required class="form-control"  autocomplete="on" value="<?php echo $city_id; ?>">
                                <spam class="parsley-required" id="err_h_city_select"></spam>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No.of Persons</label>
                            <div class="col-sm-6">
                                             <select required class="form-control" id="persons" >
                                        <option value="0">Select Persons</option>
                                        <?php for($i=1;$i<=6;$i++){ ?>
                                        <option value="<?php echo $i; ?>" <?php if(isset($no_of_persons) && $no_of_persons == $i) {?>selected <?php } ?>><?php echo $i; ?></option>
                                        <?php } ?>
                                        
                                    </select>
                                    <spam class="parsley-required" id="err_persons"></spam>
                            </div>
                        </div>
                       
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Checkout Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" id="out_date" required data-date-format="mm/dd/yy" value="<?php  echo date_format(date_create($checkout_date),"m-d-Y"); ?>">
                                </div>
                                <spam class="parsley-required" id="err_out_date"></spam>
                            </div>
                        </div> 
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Checkout Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" id="out_time" required type="text" value="<?php echo $checkout_time;?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Preference 2</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" class="form-control" id="prfr2" value="<?php echo $scnd_preference;?>">
                            </div>
                        </div>
                             <div class="form-group">
                                <label class="col-sm-3 control-label">Purpose</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" class="form-control" id="h_purpose" value="<?php echo $purpose;?>">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">Debit to S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no" placeholder="Enter S/O no." class="form-control" value="<?php echo $so_no;?>">   
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
                            <input type="text" placeholder="Optional" id="traveler_email" class="form-control" value="<?php echo $guest_email; ?>">
                            <spam class="parsley-required" id="err_traveler_email"></spam>
                            </div>
                            </div>
                </div>
                <div class="col-md-6">
                             <div class="form-group"id="guestNam_div" <?php if(isset($booking_guest) && $booking_guest !=1){ ?>style="display:none" <?php } ?>>
                            <label class="col-sm-3 control-label">Guest Name</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_name" class="form-control" value="<?php echo $guest_name; ?>">
                            <spam class="parsley-required" id="err_traveler_name"></spam>
                            </div>
                            </div>

                            <div class="form-group" id="guestMo_div" <?php if(isset($booking_guest) && $booking_guest !=1){ ?>style="display:none" <?php } ?>>
                            <label class="col-sm-3 control-label">Guest MobileNo.</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_mob" class="form-control" value="<?php echo  $guest_mob; ?>">
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
                                        <input type="checkbox" value="checked" id="spl_app" onchange="enablePolicyHotel()" class="custom-checkbox" <?php if(isset($spl_app) && $spl_app==2){ ?>checked <?php } ?>>
                                    </label>
                                </div>
                        </div>

                        </div>
                        
                        <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Enter details for special approval</label>
                        <div class="col-sm-6">
                            <textarea name="" id="spl_txt_area" <?php if(isset($spl_app) && $spl_app !=2){ ?> disabled="disabled" <?php } ?> rows="3" class="form-control textarea-autosize"><?php echo $spl_app_dtls; ?></textarea>
                            <spam class="parsley-required" id="err_spl_txt_area"></spam>
                        </div>
                        </div>
                        </div>
                </div> 

                <div class="bg-default content-box text-center pad20A mrg25T">
                     <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('2');" value="Submit">
                </div>
            </form>
                         
                            </p>
                        </div>

                        <!-- Book Now Tab -->
                       
                        
                    </div>
                </div>
            </div>
        </div>


                    </div>

                

            </div>
        </div>


<!-- Modal Vendor Data -->
<div class="modal fade" id="h_rqst_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            </div>
                        </div>
</div> 

<script type="text/javascript">
    function refresh_hotel_data()
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
</script>
<!-- Modal Vendor Data End -->



</body>

<script type="text/javascript">

     function addRequest(btn_flg)
     {

        if(btn_flg==2)
     {
	  var submircheak = 0 ;
	   var edit_id = <?php echo $edit_id; ?> ;	
	  var h_state_select = $('#h_state_select').val();
	  if (h_state_select==null || h_state_select=="" || h_state_select=="0"){ 
	        submircheak =1; 
			setvalidation('h_state_select','F',"Please Select State name");
         }else{
			    setvalidation('h_state_select','S',''); 
			 }
	
	  var h_city_select = $('#h_city_select').val();
	  if (h_city_select==null || h_city_select==""){ 
	        submircheak =1; 
			setvalidation('h_city_select','F',"Please Enter a location");
         }else{
			    setvalidation('h_city_select','S',''); 
			 }
	
	 var persons = $('#persons').val();
	  if (persons==null || persons=="" || persons=="0"){ 
	        submircheak =1; 
			setvalidation('persons','F',"Please Select No. of Persons");
         }else{
			    setvalidation('persons','S',''); 
			 }
			 
	 var rooms = $('#rooms').val();
	  if (rooms==null || rooms=="" || rooms=="0"){ 
	        submircheak =1; 
			setvalidation('rooms','F',"Please Select No. of Rooms");
         }else{
			    setvalidation('rooms','S',''); 
			 }
	
	 var in_date = $('#in_date').val();
	  if (in_date==null || in_date==""){ 
	        submircheak =1; 
			setvalidation('in_date','F',"Please Select Checkin Date");
         }else{
			    setvalidation('in_date','S',''); 
			 }		 
			 		 		 
	var out_date = $('#out_date').val();
	 if (out_date==null || out_date==""){ 
	        submircheak =1; 
			setvalidation('out_date','F',"Please Select Checkout Date");
         }else{
			    setvalidation('out_date','S',''); 
			 }	

    var in_time = $('#in_time').val();
	var out_time = $('#out_time').val();

    var prfr1 = $('#prfr1').val();
	 if (prfr1==null || prfr1==""){ 
	        submircheak =1; 
			setvalidation('prfr1','F',"Please Enter preference");
         }else{
			    setvalidation('prfr1','S',''); 
			 }
			 
    var prfr2 = $('#prfr2').val();

    var prfr3 = $('#prfr3').val();
    var h_purpose = $('#h_purpose').val();  
	 
	var f_apprv = $('#f_apprv').val();
	  if (f_apprv==null || f_apprv=="" || f_apprv=="0"){ 
	        submircheak =1; 
			setvalidation('f_apprv','F',"Please Select Functional Approver");
         }else{
			    setvalidation('f_apprv','S',''); 
			 }
    
    var so_no = $('#so_no').val();
	 if (so_no==null || so_no==""){ 
	        submircheak =1; 
			setvalidation('so_no','F',"Please Enter S/O no.");
         }else{
			    setvalidation('so_no','S',''); 
			 }

//Booking forGuest 
	 if(document.getElementById('guest_app').checked == true)
    {  
		var traveler_name = $('#traveler_name').val();
    	var traveler_email = $('#traveler_email').val(); 
    	var traveler_mob = $('#traveler_mob').val();
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
			 
var spl_txt_area = $('#spl_txt_area').val();
    if(document.getElementById('spl_app').checked == true)
    {
         var spl_app = 'chk';  
		 if (spl_txt_area==null || spl_txt_area==""){   
	        submircheak =1; 
			setvalidation('spl_txt_area','F',"Please Enter details for special approval");
         }else{
			    setvalidation('spl_txt_area','S',''); 
			 }
    }     
    else
    {
         var spl_app = 'unchk'
    }     

    
	if(submircheak ==1){  
			   return false;
			}else{
        $.ajax({

        url: '<?php echo site_url();?>/User/editSaveHotalForm',
        type: 'POST',    

        data: { in_date : in_date , out_date: out_date, in_time:in_time , out_time:out_time, h_state_select:h_state_select, h_city_select:h_city_select , rooms:rooms ,  persons:persons, prfr1:prfr1, prfr2:prfr2 , prfr3:prfr3, h_purpose:h_purpose, traveler_name:traveler_name, traveler_email:traveler_email,traveler_mob:traveler_mob, spl_app:spl_app, spl_txt_area:spl_txt_area ,f_apprv:f_apprv , so_no:so_no , btn_flg:btn_flg,booking_guest:booking_guest,edit_id:edit_id},

        success: function (htmldata2) { 
				if(htmldata2.trim()=='suces'){
					// $('#msgss').show();
					window.location.href = "<?php echo site_url();?>/User/editForm/<?php echo $edit_id;  ?>/2/suces";
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

<!-- Autocomplete code -->
<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('h_city_select');
      var options = {
                      types: ['(cities)'],
                      componentRestrictions: {country: "in"}
                     };

      var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script type="text/javascript">
    function enablePolicyHotel()
 {
    if(document.getElementById('spl_app').checked == true)
    {
     document.getElementById('spl_txt_area').removeAttribute('disabled');
    }
    else
    {
     $("#spl_txt_area").val("");
     document.getElementById('spl_txt_area').setAttribute('disabled', 'disabled');
    }
}

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
</script>
<script>
	window.setTimeout(function() {
    $("#msgss").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>
</html>
