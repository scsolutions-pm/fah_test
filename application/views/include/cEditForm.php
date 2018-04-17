<?php 
 
$edit_id = $allvalue->cab_rqst_id;
$c_request_id = $allvalue->c_request_id;
$generated_by = $allvalue->generated_by;
$functional_aprvr_id = $allvalue->functional_aprvr_id;
$c_status_id = $allvalue->c_status_id;
$traveler_name = $allvalue->traveler_name;
$traveler_email = $allvalue->traveler_email;
$traveler_mob = $allvalue->traveler_mob;
$pickup_date = $allvalue->pickup_date;
$pickup_time = $allvalue->pickup_time;
$pickup_point = $allvalue->pickup_point;
$drop_point = $allvalue->drop_point;
$cab_type = $allvalue->cab_type;
$cab_category = $allvalue->cab_category;
$cab_package = $allvalue->cab_package;
$cab_service = $allvalue->cab_service;
$state_id = $allvalue->state_id;
$city_id = $allvalue->city_id;
$outstation_city = $allvalue->outstation_city;
$purpose = $allvalue->purpose;
$playcard_name = $allvalue->playcard_name;
$so_no = $allvalue->so_no;
$flight_details =$allvalue->flight_details;
$spl_app = $allvalue->spl_app;
$spl_app_dtls = $allvalue->spl_app_dtls;
$date_time_request  = $allvalue->date_time_request;
$booking_guest  = $allvalue->booking_guest;
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
    <h2> Cab Request Id : <?php echo $allvalue->c_request_id; ?></h2>
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
                   <!--  <div class="alert alert-close alert-success">
                        <a href="#" title="Close" class="glyph-icon alert-close-btn icon-remove"></a>
                        <div class="bg-green alert-icon">
                            <i class="glyph-icon icon-check"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Success message title</h4>
                            <p>Information message box using the <code>.alert-success</code> color scheme. <a href="#" title="Link">Link</a></p>
                        </div>
                    </div> -->

 <!-- End Message -->
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
                <div class="example-box-wrapper">
                    
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab-example-1">
                            <p>
             <form class="form-horizontal bordered-row" id="cab_form" name="cab_form" data-parsley-validate="" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select State</label>
                            <div class="col-sm-6">
                                        <select name="" id="c_state_select" class="chosen-select form-control ">
                                    <optgroup label="Select State">
                                        <option value="">Select State</option>
                                         <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>" <?php if(isset($state_id) && $state_id==$row1->state_id){ ?>selected <?php } ?>><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                                        <spam class="parsley-required" id="err_c_state_select"></spam>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cab Category</label>
                            <div class="col-sm-6">
                                             <select id="cab_ctg_select" required class="form-control" onchange="changeCabType();">
                                        <option value="">Select cab </option>
                                        
                                        <?php if(!empty($cab_list)) { foreach($cab_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->cab_cat_id; ?>" <?php if(isset($cab_category) && $cab_category==$row1->cab_cat_id){ ?>selected<?php } ?>><?php echo $row1->cab_category_name; ?></option>
                                        <?php } }   ?>
                                    </select>
                                  <spam class="parsley-required" id="err_cab_ctg_select"></spam>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cab Package</label>
                            <div class="col-sm-6">
                                        <select id="cab_package_select" required class="form-control">
                                        <option value="0">Select Package</option>
                                         <?php if(!empty($package_list)) { foreach($package_list->result() as $row1) { ?>
                                        <option id="cab_package_select<?php echo $row1->package_id; ?>" value="<?php echo $row1->package_id; ?>" 
                                        <?php if(($user_type==1 && $row1->package_id==4) || ($user_type==2 && $row1->package_id==4) ){ ?>disabled=""<?php } ?>
                                         <?php if(isset($cab_package) && $cab_package==$row1->package_id){ ?>selected <?php } ?>><?php echo $row1->package_name; ?></option>
                                        <?php } } ?>
                                         
                                         
                                        </select>
                                 <spam class="parsley-required" id="err_cab_package_select"></spam>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pickup Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" id="pick_date" class="bootstrap-datepicker form-control" required data-date-format="mm/dd/yy" value="<?php  echo date_format(date_create($pickup_date),"m-d-Y"); ?>">
                                     
                                </div>
                                <spam class="parsley-required" id="err_pick_date"></spam>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pickup Point</label>
                            <div class="col-sm-6">
                                <input type="text" id="pick_point" placeholder="enter pickup point" required class="form-control" value="<?php echo $pickup_point; ?>">
                              <spam class="parsley-required" id="err_pick_point"></spam>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Outstation if any</label>
                            <div class="col-sm-6">
                                <input type="text" id="outstn_city" placeholder="Enter Outstation city" class="form-control" autocomplete="on" value="<?php echo $outstation_city; ?>">
                            </div>
                        </div>

                          <div class="form-group">
                                <label class="col-sm-3 control-label">Play Card Name(if any)</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" id="plycrd" class="form-control" value="<?php echo $playcard_name; ?>">
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
                                <input type="text" name="" id="c_city_select" required class="form-control"  autocomplete="on" value="<?php echo $city_id; ?>">
                                <spam class="parsley-required" id="err_c_city_select"></spam>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cab Type</label>
                            <div class="col-sm-6" id="cab_type">
                                        <select id="cab_type_select"  class="form-control">
                                        <option value="1" id ="cab_type_id_1" <?php if(isset($cab_type) && $cab_type =='1'){ ?> style="display:none" <?php } ?>>Indigo</option>
                                        <option value="2" id ="cab_type_id_2" <?php if(isset($cab_type) && $cab_type =='2'){ ?> style="display:none" <?php } ?> >Swift Dzire</option>
                                        <option value="3" id ="cab_type_id_3" <?php if(isset($cab_type) && $cab_type =='3'){ ?> style="display:none" <?php } ?> >Xylo</option>
                                        <option value="4" id ="cab_type_id_4" <?php if(isset($cab_type) && $cab_type =='4'){ ?> style="display:none" <?php } ?> >Innova</option>
                                        <option value="5" id ="cab_type_id_5" <?php if(isset($cab_type) && $cab_type =='5'){ ?> style="display:none" <?php } ?>>Honda City</option>
                                        <option value="6" id ="cab_type_id_6" <?php if(isset($cab_type) && $cab_type =='6'){ ?> style="display:none" <?php } ?>>Corolla Altis</option>
                                        </select>
                                         <spam class="parsley-required" id="err_cab_type_select"></spam>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Cab Service type</label>
                            <div class="col-sm-6">
                                        <select id="cab_service_select" required class="form-control">
                                        <option value="0">Select</option>
                                        <option value="1" <?php if(isset($cab_service) && $cab_service == '1'){ ?>selected <?php } ?>>Pooling</option>
                                         <option id="cab_service_select2" value="2" 
                                        <?php if($user_type==1 || $user_type==2){ ?>disabled="disabled"<?php } ?>>Private</option>
                                        </select>
                                        
                                        </select>
                               <spam class="parsley-required" id="err_cab_service_select"></spam>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pickup Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" id="pick_time" required type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop Point</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="enter drop point" id="drp_point" required class="form-control" value="<?php echo $drop_point;  ?>">
                                 <spam class="parsley-required" id="err_drp_point"></spam>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" id="c_purpose" class="form-control" value="<?php echo $purpose; ?>">
                            </div>
                        </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">Flight Details(if any)</label>
                            <div class="col-sm-6">
                                <input type="text" id="flght_dtls" placeholder="Optional" class="form-control" value="<?php echo $flight_details; ?>">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">Debit to S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no" placeholder="Enter S/O no." class="form-control" value="<?php echo $so_no; ?>">       
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
                            <input type="text" placeholder="Optional" id="traveler_mob" class="form-control" value="<?php echo $traveler_mob;?>">
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
                                        <input type="checkbox" value="checked" id="spl_app" onchange="enablePolicyCab()" class="custom-checkbox" <?php if(isset($spl_app) && $spl_app==2){ ?>checked <?php } ?>>
                                    </label>
                                </div>
                        </div>

                        </div>
                        
                        <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Enter details for special approval</label>
                        <div class="col-sm-6">
                            <textarea name="" id="spl_txt_area"  <?php if(isset($spl_app) && $spl_app !=2){ ?> disabled="disabled" <?php } ?> rows="3" class="form-control textarea-autosize"><?php echo $spl_app_dtls; ?></textarea>
                            <spam class="parsley-required" id="err_spl_txt_area"></spam>
                        </div>
                        </div>
                        </div>
                        
                </div> 


                <div class="bg-default content-box text-center pad20A mrg25T">
                    <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('1');" value="Submit">
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
<div class="modal fade" id="c_rqst_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            </div>
                        </div>
</div> 

<script type="text/javascript">
    function refresh_cab_data()
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
</script>
<!-- Modal Vendor Data End -->



</body>

<script type="text/javascript">

     function addRequest(btn_flg)
     {

        if(btn_flg==1)
         {
	 var submircheak = 0 ;	
	 var edit_id = <?php echo $edit_id; ?> ;	
	 var c_state_select = $('#c_state_select').val();
	  if (c_state_select==null || c_state_select==""){ 
	        submircheak =1; 
			setvalidation('c_state_select','F',"Please Select State name");
         }else{
			    setvalidation('c_state_select','S',''); 
			 }
	  
	  
     var c_city_select = $('#c_city_select').val();
	 	  if (c_city_select==null || c_city_select==""){ 
	        submircheak =1; 
			setvalidation('c_city_select','F',"Please Insert City name");
         }else{
			    setvalidation('c_state_select','S',''); 
			 }
			 
	 var cab_ctg_select = $('#cab_ctg_select').val();
	 if (cab_ctg_select==null || cab_ctg_select==""){ 
	        submircheak =1; 
			setvalidation('cab_ctg_select','F',"Please Select Cab Category");
         }else{
			    setvalidation('cab_ctg_select','S',''); 
			 }
			 
	 var cab_type_select = $('#cab_type_select').val();
	  if (cab_type_select==null || cab_type_select=="" || cab_type_select=="0"){ 
	        submircheak =1; 
			setvalidation('cab_type_select','F',"Please Select Cab Type");
         }else{
			    setvalidation('cab_type_select','S',''); 
			 }
	 
	 var cab_package_select = $('#cab_package_select').val();
	  if (cab_package_select==null || cab_package_select=="" || cab_package_select=="0"){ 
	        submircheak =1; 
			setvalidation('cab_package_select','F',"Please Select Cab Package");
         }else{
			    setvalidation('cab_package_select','S',''); 
			 }
	 
	 var cab_service_select = $('#cab_service_select').val();
	 if (cab_service_select==null || cab_service_select=="" || cab_service_select=="0"){ 
	        submircheak =1; 
			setvalidation('cab_service_select','F',"Please Select Cab Service type");
         }else{
			    setvalidation('cab_service_select','S',''); 
			 }
	   
     var pick_date = $('#pick_date').val();
	 if (pick_date==null || pick_date==""){ 
	        submircheak =1; 
			setvalidation('pick_date','F',"Please Select Pickup Date");
         }else{
			    setvalidation('pick_date','S',''); 
			 }
			 
	 var drp_point = $('#drp_point').val();
	 if (drp_point==null || drp_point==""){ 
	        submircheak =1; 
			setvalidation('drp_point','F',"Please Insert Drop Point");
         }else{
			    setvalidation('drp_point','S',''); 
			 }
	 
     var pick_point = $('#pick_point').val();
	 if (pick_point==null || pick_point==""){ 
	        submircheak =1; 
			setvalidation('pick_point','F',"Please Insert Pickup Point");
         }else{
			    setvalidation('pick_point','S',''); 
			 }
			 
	 var f_apprv = $('#f_apprv').val();
	 if (f_apprv==null || f_apprv=="" || f_apprv=="0"){   
	        submircheak =1; 
			setvalidation('f_apprv','F',"Please Select Functional Approver");
         }else{
			    setvalidation('f_apprv','S',''); 
			 }
	 
	 
	 var pick_time = $('#pick_time').val();

     var outstn_city = $('#outstn_city').val();
     var c_purpose = $('#c_purpose').val();

   

     var flght_dtls = $('#flght_dtls').val();
     var plycrd = $('#plycrd').val(); 

     var so_no = $('#so_no').val();

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
			setvalidation('spl_txt_area','F',"Enter details for special approval");
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

        url: '<?php echo site_url();?>/User/editSaveCabForm',
        type: 'POST',    

        data: { pick_date : pick_date , pick_time: pick_time, pick_point:pick_point, drp_point:drp_point , cab_ctg_select:cab_ctg_select , cab_package_select:cab_package_select, cab_type_select:cab_type_select,
        cab_service_select:cab_service_select, c_state_select:c_state_select, c_city_select:c_city_select , outstn_city:outstn_city, c_purpose:c_purpose , traveler_name:traveler_name, traveler_email:traveler_email,traveler_mob:traveler_mob, flght_dtls:flght_dtls ,plycrd:plycrd, 
        spl_app:spl_app, spl_txt_area:spl_txt_area , f_apprv:f_apprv ,so_no:so_no , btn_flg:btn_flg,booking_guest:booking_guest,edit_id:edit_id},

        success: function (htmldata2) {
			 
				if(htmldata2.trim()=='suces'){
					//$('#msgss').show();
					window.location.href = "<?php echo site_url();?>/User/editForm/<?php echo $edit_id;  ?>/1/suces";
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
    function enablePolicyCab()
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

function changeCabType()
{
	var valu = $( "#cab_ctg_select" ).val();

	if(valu==1)
	{   $( "#cab_type_id_1" ).show(); $( "#cab_type_id_2" ).show(); 
		$( "#cab_type_id_3" ).hide(); $( "#cab_type_id_4" ).hide();
		$( "#cab_type_id_5" ).hide(); $( "#cab_type_id_6" ).hide();	
	 }
	if(valu ==2)
	{   $( "#cab_type_id_1" ).hide(); $( "#cab_type_id_2" ).hide();
		$( "#cab_type_id_5" ).hide(); $( "#cab_type_id_6" ).hide();
		$( "#cab_type_id_3" ).show(); $( "#cab_type_id_4" ).show(); }
	if(valu ==3)
	{ $( "#cab_type_id_5" ).show(); $( "#cab_type_id_6" ).show(); 
		$( "#cab_type_id_1" ).hide(); $( "#cab_type_id_2" ).hide();
		$( "#cab_type_id_3" ).hide(); $( "#cab_type_id_4" ).hide();
		}
	if(valu ==0)
		{
 	
		 $( "#cab_type_id_0" ).show();
		 $( "#cab_type_id_1" ).hide(); $( "#cab_type_id_2" ).hide();
		 $( "#cab_type_id_3" ).hide(); $( "#cab_type_id_4" ).hide();
		 $( "#cab_type_id_5" ).hide(); $( "#cab_type_id_6" ).hide(); 
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

<!-- Autocomplete code -->
<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('c_city_select');
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
      var input1 = document.getElementById('outstn_city');
      var options = {
                      types: ['(cities)'],
                      componentRestrictions: {country: "in"}
                     };

      var autocomplete = new google.maps.places.Autocomplete(input1, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- pickup location  -->
<script type="text/javascript">
    $(document).ready(function(){
    var pick_point = new google.maps.places.Autocomplete($("#pick_point")[0], {});
    google.maps.event.addListener(pick_point, 'place_changed', function() {
        var place1 = autocomplete.getPlace();
        console.log(place1.address_components);
    });

    var drp_point = new google.maps.places.Autocomplete($("#drp_point")[0], {});
    google.maps.event.addListener(drp_point, 'place_changed', function() {
        var place = autocomplete.getPlace();
        console.log(place.address_components);
    });

});

</script>
<script>
	window.setTimeout(function() {
    $("#msgss").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>
</html>
