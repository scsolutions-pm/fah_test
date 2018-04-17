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
    <h2>CAB BOOKING SECTION</h2>
    <p>You can book your trip here.</p>
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
 <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    CAB Booking Form
                </h3>
                <div class="example-box-wrapper">
                    <ul class="list-group list-group-separator row list-group-icons">
                        <li class="col-md-3 active">
                            <a href="#tab-example-1" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-orange icon-taxi"></i>
                                CAB
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-4" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-green icon-cogs"></i>
                                BOOK NOW
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab-example-1">
                            <p>
             <form class="form-horizontal bordered-row" id="cab_form" name="cab_form" data-parsley-validate="" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select State</label>
                            <div class="col-sm-6">
                                        <select name="" id="c_state_select" required class="chosen-select form-control ">
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
                            <label class="col-sm-3 control-label">Cab Category</label>
                            <div class="col-sm-6">
                                             <select id="cab_ctg_select" required class="form-control" onchange="changeCabType();">
                                        <option value="0">Select cab</option>
                                        <?php if(!empty($cab_list)) { foreach($cab_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->cab_cat_id; ?>"><?php echo $row1->cab_category_name; ?></option>
                                        <?php } } ?>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cab Package</label>
                            <div class="col-sm-6">
                                        <select id="cab_package_select" required class="form-control">
                                        <option value="0">Select Package</option>
                                        <?php if(!empty($package_list)) { foreach($package_list->result() as $row1) { ?>
                                        <option id="cab_package_select<?php echo $row1->package_id; ?>"
                                         value="<?php echo $row1->package_id; ?>" 
                                        <?php if(($user_type==1 && $row1->package_id==4) || ($user_type==2 && $row1->package_id==4) ){ ?>disabled=""<?php } ?>
                                         ><?php echo $row1->package_name; ?></option>
                                        <?php } } ?>
                                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pickup Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" id="pick_date" class="bootstrap-datepicker form-control" required data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pickup Point</label>
                            <div class="col-sm-6">
                                <input type="text" id="pick_point" placeholder="enter pickup point" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Outstation if any</label>
                            <div class="col-sm-6">
                                <input type="text" id="outstn_city" placeholder="Enter Outstation city" class="form-control" autocomplete="on" >
                            </div>
                        </div>

                          <div class="form-group">
                                <label class="col-sm-3 control-label">Play Card Name(if any)</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" id="plycrd" class="form-control">
                                </div>
                         </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Select Functional Approver</label>
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

                       
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="" id="c_city_select" required class="form-control"  autocomplete="on">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Cab Type</label>
                            <div class="col-sm-6">
                                        <select id="cab_type_select" required class="form-control">
                                        <option value="0" >Select Package</option>
                                        <option value="1" id ="cab_type_id_1" style="display:none" >Indigo</option>
                                        <option value="2" id ="cab_type_id_2" style="display:none" >Swift Dzire</option>
                                        <option value="3" id ="cab_type_id_3" style="display:none" >Xylo</option>
                                        <option value="4" id ="cab_type_id_4" style="display:none" >Innova</option>
                                        <option value="5" id ="cab_type_id_5" style="display:none" >Honda City</option>
                                        <option value="6" id ="cab_type_id_6" style="display:none" >Corolla Altis</option>
                                        </select>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Cab Service type</label>
                            <div class="col-sm-6">
                                        <select id="cab_service_select" required class="form-control">
                                        <option value="0">Select</option>
                                        <option value="1">Pooling</option>
                                        <option id="cab_service_select2" value="2" 
                                        <?php if($user_type==1 || $user_type==2){ ?>disabled="disabled"<?php } ?>>Private</option>
                                        </select>
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
                                <input type="text"  placeholder="enter drop point" id="drp_point" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" id="c_purpose" class="form-control">
                            </div>
                        </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">Flight Details(if any)</label>
                            <div class="col-sm-6">
                                <input type="text" id="flght_dtls" placeholder="Optional" class="form-control">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">Debit to S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no" placeholder="Enter S/O no." class="form-control">       
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
                                        <input type="checkbox" value="checked" id="guest_app" onchange="enableGuestForm()" class="custom-checkbox">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="guestEm_div" style="display:none">
                            <label class="col-sm-3 control-label">Guest Emailid</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_email" class="form-control">
                            </div>
                            </div>
                </div>
                <div class="col-md-6">
                             <div class="form-group"id="guestNam_div"  style="display:none">
                            <label class="col-sm-3 control-label">Guest Name</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_name" class="form-control">
                            </div>
                            </div>

                            <div class="form-group" id="guestMo_div" style="display:none">
                            <label class="col-sm-3 control-label">Guest MobileNo.</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_mob" class="form-control">
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
                                        <input type="checkbox" value="checked" id="spl_app" onchange="enablePolicyCab()" class="custom-checkbox">
                                    </label>
                                </div>
                        </div>

                        </div>
                        
                        <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Enter details for special approval</label>
                        <div class="col-sm-6">
                            <textarea name="" id="spl_txt_area" disabled="disabled" rows="3" class="form-control textarea-autosize"></textarea>
                        </div>
                        </div>
                        </div>
                        
                </div> 


                <div class="bg-default content-box text-center pad20A mrg25T">
                    <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('1');" value="Add Cab">
                </div>

            </form>             
                             <div id="table_cab" class="bg-default content-box text-center pad20A mrg25T" 
                              <?php if( empty($request_list_cab) || $request_list_cab->num_rows() <= 0) { ?> style="display:none" <?php } ?> >
                                                    <table>
                                                    <thead>
                                                    <tr>
                                                    <th>Cab booking_id</th>
                                                    <th >State</th>
                                                    <th>City</th>
                                                    <th >Special Approval</th>
                                                    <th >Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="cab_tab_body">
                                                    <?php 
                                                    if( !empty($request_list_cab) || $request_list_cab->num_rows() > 0)
                                                    {
                                                    foreach($request_list_cab->result() as $row)
                                                    {
                                                    ?>
                                                    <tr class="gradeX">
                                                    <td><span class="label bg-gradient-3">
                                                    <a href="<?php echo site_url('User_TD/generateModalCdata/'.$row->c_request_id); ?>" data-toggle="modal" data-target="#c_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->c_request_id; ?></font></a></span></td>
                                                    <td><?php echo $row->state_id; ?></td> 
                                                    <td><?php echo $row->city_id; ?></td> 
                                                    <td><?php echo $row->spl_app; ?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->c_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                                    </td>
                                                    </tr>
                                                    <?php } } ?>

                                                    </tbody>
                                                    </table>
                            </div> 
                            </p>
                        </div>

                        <!-- Book Now Tab -->                               
                       
                        <div class="tab-pane fade" id="tab-example-4">
                            <p>
                <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="post" action="<?php echo site_url();?>/User/generateBooking">
                 <input type="hidden" name="booking_type" value="c">
                <div class="row">
                Are you sure you want to book these bookings ?
                </div>
                
                            <div id="table_booking_cab" class="bg-default content-box text-center pad20A mrg25T" 
                             <?php if( empty($request_list_cab) || $request_list_cab->num_rows() <= 0) { ?> style="display:none" <?php } ?>>
                                            <table>
                                                    <thead>
                                                    <tr>
                                                    <th>Cab booking_id</th>
                                                    <th >State</th>
                                                    <th>City</th>
                                                    <th >Special Approval</th>
                                                    <th >Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="booking_tab_body1">
                                                    <?php 
                                                    if( !empty($request_list_cab) || $request_list_cab->num_rows() > 0)
                                                    {
                                                    foreach($request_list_cab->result() as $row)
                                                    {
                                                    ?>
                                                    <tr class="gradeX">
                                                    <td><span class="label bg-gradient-3">
                                                    <a href="<?php echo site_url('User_TD/generateModalCdata/'.$row->c_request_id); ?>" data-toggle="modal" data-target="#c_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->c_request_id; ?></font></a></span></td>
                                                    <td><?php echo $row->state_id; ?></td> 
                                                    <td><?php echo $row->city_id; ?></td> 
                                                    <td><?php if($row->spl_app==1) {echo"NO";}
                                                    else {echo "YES";}?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->c_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                                    </td>
                                                    </tr>
                                                    <?php } } ?>

                                                    </tbody>
                                                    </table>
                            </div>

                                    <div class="bg-default content-box text-center pad20A mrg25T">                   
                                    <input type="submit" id="booking_btn" class="btn btn-lg btn-primary" value="Book Cabs Now" 
                                     <?php if( empty($request_list_cab) || $request_list_cab->num_rows() <= 0) { ?> disabled="disabled" <?php } ?> >   
                                    </div>
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
     var pick_date = $('#pick_date').val();
     var pick_time = $('#pick_time').val();

     var pick_point = $('#pick_point').val();
     var drp_point = $('#drp_point').val();

     var c_state_select = $('#c_state_select').val();
     var c_city_select = $('#c_city_select').val();

     var cab_ctg_select = $('#cab_ctg_select').val();
     var cab_package_select = $('#cab_package_select').val();
     var cab_type_select = $('#cab_type_select').val();
     var cab_service_select = $('#cab_service_select').val();

     var outstn_city = $('#outstn_city').val();
     var c_purpose = $('#c_purpose').val();

     var traveler_name = $('#traveler_name').val();
     var traveler_email = $('#traveler_email').val(); 
     var traveler_mob = $('#traveler_mob').val(); 

     var flght_dtls = $('#flght_dtls').val();
     var plycrd = $('#plycrd').val(); 

     var f_apprv = $('#f_apprv').val();
     var so_no = $('#so_no').val();

    if(document.getElementById('spl_app').checked == true)
    {
         var spl_app = 'chk';  
    }     
    else
    {
         var spl_app = 'unchk'
    }     

    var spl_txt_area = $('#spl_txt_area').val();

        $.ajax({

        url: '<?php echo site_url();?>/User/saveCabBooking',
        type: 'POST',    

        data: { pick_date : pick_date , pick_time: pick_time, pick_point:pick_point, drp_point:drp_point , cab_ctg_select:cab_ctg_select , cab_package_select:cab_package_select, cab_type_select:cab_type_select,
        cab_service_select:cab_service_select, c_state_select:c_state_select, c_city_select:c_city_select , outstn_city:outstn_city, c_purpose:c_purpose , traveler_name:traveler_name, traveler_email:traveler_email,traveler_mob:traveler_mob, flght_dtls:flght_dtls ,plycrd:plycrd, 
        spl_app:spl_app, spl_txt_area:spl_txt_area , f_apprv:f_apprv ,so_no:so_no , btn_flg:btn_flg},

        success: function (htmldata2) {

                                        // $("#publishBtnDiv").css("display","block");
                                        // document.getElementById('txtHint').innerHTML=data;
                                        // alert(htmldata2);
                                        // $('#successCab').html("Succesfully created Cab");
                                        // $('#cab_name').val("");
                                        //alert($('#editable-usage1').html());
                                        //$('#editable-usage1').prepend(htmldata2);
                                             $('#table_cab').show();
                                             $('#table_booking_cab').show();
                                             $('#cab_tab_body').html(htmldata2);
                                             $('#booking_tab_body1').html(htmldata2);
                                        document.getElementById('booking_btn').removeAttribute('disabled');
                                             // $('#booking_btn').disabled="false";
                                            // $('#cab_form').submit()=false;
                                        // $('#pick_date').val("");
                                        // $('#pick_time').val("");

                                        // $('#pickup_point').val("");
                                        // $('#drop_point').val("");

                                        // // $('#package_select').val("0");
                                        // $('#purpose').val("");
                                        // $('#cab_package').val("1");
                                        // $('#cab_type').val("0");
                                        // $('#outstation_city').val("");
                                        // $('.chosen-single').find("span").html("Select");

                                        // $('#passenger').val('').trigger('chosen:updated');
                                        // $('#rowbody').html(htmldata2);

                                        },
        error: function () {
                              alert('error');
                            }
        });

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
	{ $( "#cab_type_id_1" ).show(); $( "#cab_type_id_2" ).show(); 
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
</html>
