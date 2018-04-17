<!DOCTYPE html> 
<html lang="en">
 <body>
 		 <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    
                    
<!-- Autocomplete city -->
<script src="http://maps.googleapis.com/maps/api/js?libraries=places&region=in&key=AIzaSyCA6Z_vZLjsXJ77eBszOzgtdOMaz_tOCCE" type="text/javascript"></script>

 

<!-- Parsley -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/parsley/parsley.js"></script>

<!-- Chosen -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/chosen/chosen.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/chosen/chosen.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/chosen/chosen-demo.js"></script>


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

<!-- Touchspin -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/touchspin/touchspin.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin-demo.js"></script>



<div id="page-title">
    <h2>BOOKING SECTION</h2>
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
                    Passenger Transport Booking Form
                </h3>
                <div class="example-box-wrapper">
                    <ul class="list-group list-group-separator row list-group-icons">
                        <li class="col-md-3 active">
                            <a href="#tab-example-1" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-red icon-bus"></i>
                                Bus
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-2" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-blue-alt icon-anchor"></i>
                                Train
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-3" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-yellow icon-plane"></i>
                                FLIGHT
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
                                        <option value="<?php echo $row1->state_id; ?>"><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                               <spam class="parsley-required" id="err_b_state_boarding"></spam>           
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding City</label>
                            <div class="col-sm-6">
                                 <input type="text" name="" id="b_city_boarding" required class="form-control" autocomplete="on">
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
                                    <input type="text" id="pick_date" class="bootstrap-datepicker form-control" required data-date-format="mm/dd/yy">
                                </div>
                                <spam class="parsley-required" id="err_pick_date"></spam>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Person's Age</label>
                                <div class="col-sm-6" id="age">
                                <input class="form-control" type="text" value="18" id="p_age" name="touchspin-demo-2">
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Bus type</label>
                            <div class="col-sm-6">
                                             <select id="bus_type_select" required class="form-control">
                                        <option value="0">Select cab</option>    
                                        <option value="1">VOLVO NON AC SEATER</option>
                                        <option value="2">VOLVO AC SEATER</option>
                                        <option value="3">VOLVO NON AC SLEEPER</option>
                                        <option value="4">VOLVO AC SLEEPER</option>
                                        <option value="5">Other Bus</option>    
                                    </select>
                                  <spam class="parsley-required" id="err_bus_type_select"></spam>
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
                                        <option value="<?php echo $row1->state_id; ?>"><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                                     <spam class="parsley-required" id="err_b_state_drop"></spam>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop City</label>
                            <div class="col-sm-6">
                                <input type="text" name="" id="b_city_drop" required class="form-control" autocomplete="on">  
                                 
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
                                    <input class="timepicker-example form-control" id="pick_time" required type="text">
                                </div>
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" id="b_purpose" class="form-control">
                            </div>
                        </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no" placeholder="Enter S/O no." class="form-control">
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
                                     <input type="checkbox" value="checked" id="guest_app" onchange="enableGuestForm()" class="custom-checkbox">
                                    <strong>Booking forGuest ?</strong>
                                       
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="guestEm_div" style="display:none">
                            <label class="col-sm-3 control-label">Guest Emailid</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_email" class="form-control">
                             <spam class="parsley-required" id="err_traveler_email"></spam>  
                            </div>
                            </div>
                </div>
                <div class="col-md-6">
                             <div class="form-group"id="guestNam_div"  style="display:none">
                            <label class="col-sm-3 control-label">Guest Name</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_name" class="form-control">
                            <spam class="parsley-required" id="err_traveler_name"></spam>
                            </div>
                            </div>

                            <div class="form-group" id="guestMo_div" style="display:none">
                            <label class="col-sm-3 control-label">Guest MobileNo.</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_mob" class="form-control">
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
                                     <input type="checkbox" value="checked" id="spl_app_bus" onchange="enablePolicyBus()" class="custom-checkbox">
                                    <font color="red"><strong>Is special approval required ?</strong></font>
                                       
                                    </label>
                                </div>
                        </div>
                  </div>       
                  <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Enter details for special approval</label>
                        <div class="col-sm-6">
                            <textarea name="" id="spl_txt_area_bus" disabled="disabled" rows="3" class="form-control textarea-autosize"></textarea>
                             <spam class="parsley-required" id="err_spl_txt_area_bus"></spam>
                        </div>
                        </div>
                  </div>        

                </div> 


                <div class="bg-default content-box text-center pad20A mrg25T">
                    <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('1');" value="ADD Bus">
                </div>

 <input type="hidden" placeholder="Optional" id="traveler_b" class="form-control">
 <input type="hidden"  placeholder="Enter mobile no" required class="form-control" id="cntct">

            </form>           
                              <div id="bus_train" class="bg-default content-box text-center pad20A mrg25T" 
                              <?php if( empty($request_list_bus) || $request_list_bus->num_rows() <= 0) { ?> style="display:none" <?php } ?> >
                                                    <table class="table table-striped table-bordered dataTable">
                                                    <thead>
                                                    <tr>
                                                    <th>Bus booking_id</th>
                                                    <th >Boarding State / Drop State</th>
                                                    <th>Boarding City / Drop City</th>
                                                    <th >Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="bus_tab_body">
                                                    <?php 
                                                    if( !empty($request_list_bus) || $request_list_bus->num_rows() > 0)
                                                    {
                                                    foreach($request_list_bus->result() as $row)
                                                    {
                                                    ?>
                                                    <tr class="gradeX">
                                                    <td><span class="label bg-gradient-3">
                                                    <a href="<?php echo site_url('User/generateModalBdata/'.$row->b_request_id); ?>" data-toggle="modal" data-target="#b_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->b_request_id; ?></font></a></span></td>
                                                    <td><?php echo getStatName($row->from_state_id); ?> / <?php echo getStatName($row->to_state_id); ?><strong></strong></td> 
                                                    <td><?php echo $row->from_city_id; ?> / <?php echo $row->to_city_id; ?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->b_request_id);?>/dd"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                                    </td>
                                                    </tr>
                                                    <?php } } ?>

                                                    </tbody>
                                                    </table>
                            </div> 


                            </p>
                        </div>
                        
                           <!-- Bus Tab Ends -->
                            <!-- Train Tab -->

                         <div class="tab-pane fade" id="tab-example-2">
                            <p>

                            <form class="form-horizontal bordered-row" id="train_form" name="train_form" data-parsley-validate="" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding State</label>
                            <div class="col-sm-6">
                                        <select name="" id="b_state_boarding_t" required class="chosen-select form-control ">
                                    <optgroup label="Select State">
                                        <option value="0">Select State</option>
                                        <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>"><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                                  <spam class="parsley-required" id="err_b_state_boarding_t"></spam>
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding City</label>
                            <div class="col-sm-6">
                                <input type="text" name="" id="b_city_boarding_t" required class="form-control"  autocomplete="on">
                                 <spam class="parsley-required" id="err_b_city_boarding_t"></spam>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" id="pick_date_t" class="bootstrap-datepicker form-control" required data-date-format="mm/dd/yy">
                                    
                                </div>
                                <spam class="parsley-required" id="err_pick_date_t"></spam>
                            </div>
                        </div>


                         <div class="form-group" id="age_t">
                            <label class="col-sm-3 control-label">Person's Age</label>
                                <div class="col-sm-6">
                            <input class="form-control" type="text" value="21" id="p_age_t" name="touchspin-demo-2">
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Train Class</label>
                            <div class="col-sm-6">
                                             <select id="train_class" required class="form-control">
                                        <option value="0">Select Class</option>    
                                        <option value="1">Second Seating</option>
                                        <option value="2">Sleeper Class</option>
                                        <option value="3">AC Chair Car</option>    
                                        <option value="4">Third AC</option>
                                        <?php if($user_type==2 || $user_type==3){ ?>
                                        <option value="5">Second AC</optio
                                        n><?php } ?>
                                    </select>
                                 <spam class="parsley-required" id="err_train_class"></spam>
                            </div>
                        </div>
 

                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop State</label>
                            <div class="col-sm-6">
                                       <select name="" id="b_state_drop_t" required class="chosen-select form-control ">
                                    <optgroup label="Select State">
                                        <option value="0">Select State</option>
                                        <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>"><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                                 <spam class="parsley-required" id="err_b_state_drop_t"></spam>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop City</label>
                            <div class="col-sm-6">
                                <input type="text" name="" id="b_city_drop_t" required class="form-control" autocomplete="on">
                                 <spam class="parsley-required" id="err_b_city_drop_t"></spam>
                            </div>
                            <?php if($user_type==1 || $user_type==2) { ?>
                                <button type="button" class="btn btn-round btn-azure "  onclick="checkFlight('t');"
                                title="check eligibility for Flight">
                                <i class="glyph-icon icon-plane"></i>
                                </button>                                   
                            <?php } ?>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Departure Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" id="pick_time_t" required type="text">
                                    
                                </div>
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" id="t_purpose" class="form-control">
                            </div>
                        </div>


                            <div class="form-group">
                            <label class="col-sm-3 control-label">S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no_t" placeholder="Enter S/O no." class="form-control"> 
                               <spam class="parsley-required" id="err_so_no_t"></spam>      
                            </div>
                            </div>
                             
                    </div>
                </div>
                
                <div class="row">
                <div class="col-md-6">
                            <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                    <label>
                                    <input type="checkbox" value="checked" id="guest_app_train" onchange="enableGuestFormTrain()" class="custom-checkbox">
                                    <strong>Booking forGuest ?</strong>
                                        
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="guestEm_div_train" style="display:none">
                            <label class="col-sm-3 control-label">Guest Emailid</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_email_t" class="form-control">
                            <spam class="parsley-required" id="err_traveler_email_t"></spam>  
                            </div>
                            </div>
                </div>
                <div class="col-md-6">
                             <div class="form-group"id="guestNam_div_train"  style="display:none">
                            <label class="col-sm-3 control-label">Guest Name</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_name_t" class="form-control">
                             <spam class="parsley-required" id="err_traveler_name_t"></spam>
                            </div>
                            </div>

                            <div class="form-group" id="guestMo_div_train" style="display:none">
                            <label class="col-sm-3 control-label">Guest MobileNo.</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_mob_t" class="form-control">
                            <spam class="parsley-required" id="err_traveler_mob_t"></spam>
                            </div>
                            </div>
                </div>
                </div>
                
                

                <div class="row">
               	 <div class="col-md-6">
                        <div class="form-group">
                        <div class="checkbox checkbox-primary">
                                    <label>
                                      <input type="checkbox" value="checked" id="spl_app_train" onchange="enablePolicyTrain()" class="custom-checkbox">
                                    <font color="red"><strong>Is special approval required ?</strong></font>
                                      
                                    </label>
                                </div>
                        </div>
                 </div>
                        
				 <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Enter details for special approval</label>
                        <div class="col-sm-6">
                            <textarea name="" id="spl_txt_area_train" disabled="disabled" rows="3" class="form-control textarea-autosize"></textarea>
                             <spam class="parsley-required" id="err_spl_txt_area_train"></spam>
                        </div>
                        </div>
                 </div>    

                </div>


                <div class="bg-default content-box text-center pad20A mrg25T">
                    <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('2');" value="ADD Train">
                     <input type="hidden"  placeholder="Enter mobile no" required class="form-control" id="cntct_t">
                     <input type="hidden" placeholder="Optional" id="traveler_t" class="form-control">
                </div>

            </form>   
             
                           <div id="table_train" class="bg-default content-box text-center pad20A mrg25T" 
                              <?php if( empty($request_list_train) || $request_list_train->num_rows() <= 0) { ?> style="display:none" <?php } ?> >
                                                    <table class="table table-striped table-bordered dataTable">
                                                    <thead>
                                                    <tr>
                                                    <th>Train booking_id</th>
                                                    <th >Boarding State / Drop State</th>
                                                    <th>Boarding City / Drop City</th>
                                                     
                                                    <th >Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="train_tab_body">
                                                    <?php 
                                                    if( !empty($request_list_train) || $request_list_train->num_rows() > 0)
                                                    {
                                                    foreach($request_list_train->result() as $row)
                                                    {
                                                    ?>
                                                    <tr class="gradeX">
                                                    <td><span class="label bg-gradient-8">
                                                    <a href="<?php echo site_url('User/generateModalTdata/'.$row->t_request_id); ?>" data-toggle="modal" data-target="#t_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->t_request_id; ?></font></a></span></td>
                                                    <td><?php echo getStatName($row->from_state_id); ?> / <?php echo getStatName($row->to_state_id); ?></td> 
                                                    <td><?php echo $row->from_city_id; ?> / <?php echo $row->to_city_id; ?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->t_request_id);?>/ee"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                                    </td>
                                                    </tr>
                                                    <?php } } ?>

                                                    </tbody>
                                                    </table>
                            </div> 

                            
                            </p>
                        </div>
                        <!-- Train Tab ends -->

                        <!-- Flight Tab -->
                        <div class="tab-pane fade" id="tab-example-3">
                      			  <div class="row" style="margin-bottom: 20px;">
                                	<div class="col-md-6">
                                    	<h2 class="content-box-header bg-primary" id="domestic_1"> <input type="radio" name="j_type" value="0" id="j_type_0" onChange="CheakJourneyTypes('0')" checked> Domestic </h2>	
                                    
                                    </div>
                                    
                                    <div class="col-md-6">
                                  		 <h2 class="content-box-header  bg-default" id="international_1"> <input type="radio" name="j_type" value="1" onChange="CheakJourneyTypes('1')" id="j_type_1" >  International</h2> 
                                    </div>
                        </div>
                        
                      		      <p>
                                  
                               <!-----------------------Domestic Form------------------->
                                   <form class="form-horizontal bordered-row" id="domestic" name="domestic" data-parsley-validate="" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding State</label>
                            <div class="col-sm-6">
                                        <select name="" id="b_state_boarding_fd" required class="chosen-select form-control ">
                                    <optgroup label="Select State">
                                        <option value="0">Select State</option>
                                        <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>"><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                               <spam class="parsley-required" id="err_b_state_boarding_fd"></spam>           
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding City</label>
                            <div class="col-sm-6">
                                 <input type="text" name="" id="b_city_boarding_fd" required class="form-control" autocomplete="on">
                              <spam class="parsley-required" id="err_b_city_boarding_fd"></spam>          
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Journey Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" id="pick_date_fd" class="bootstrap-datepicker form-control" required data-date-format="mm/dd/yy">
                                </div>
                                <spam class="parsley-required" id="err_pick_date_fd"></spam>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Person's Age</label>
                                <div class="col-sm-6" id="age">
                                <input class="form-control" type="text" value="18" id="p_age_fd" name="touchspin-demo-2">
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Frequent flier no.</label>
                            <div class="col-sm-6">
                                  <input type="text" placeholder="Optional" class="form-control" id="ffno_fd">
                                  <spam class="parsley-required" id="err_fdpt_fd"></spam>
                            </div>
                        </div>
  


                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop State</label>
                            <div class="col-sm-6">
                                       <select name="" id="b_state_drop_fd" required class="chosen-select form-control ">
                                    <optgroup label="Select State">
                                        <option value="0">Select State</option>
                                        <?php if(!empty($state_list)) { foreach($state_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->state_id; ?>"><?php echo $row1->state_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                                     <spam class="parsley-required" id="err_b_state_drop_fd"></spam>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop City</label>
                            <div class="col-sm-6">
                                <input type="text" name="" id="b_city_drop_fd" required class="form-control" autocomplete="on">  
                                 
                                     <spam class="parsley-required" id="err_b_city_drop_fd"></spam>
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
                                    <input class="timepicker-example form-control" id="pick_time_fd" required type="text">
                                </div>
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" id="b_purpose_fd" class="form-control">
                            </div>
                        </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no_fd" placeholder="Enter S/O no." class="form-control">
                               <spam class="parsley-required" id="err_so_no_fd"></spam>       
                            </div>
                            </div>
                             
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                            <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                    <label>
                                       <input type="checkbox" value="checked" id="guest_app_fd" onchange="enableGuestFormFltghtD()" class="custom-checkbox">
                                      <strong>Booking forGuest ?</strong>
                                     
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="guestEm_div_fd" style="display:none">
                            <label class="col-sm-3 control-label">Guest Emailid</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_email_fd" class="form-control">
                             <spam class="parsley-required" id="err_traveler_email_fd"></spam>  
                            </div>
                            </div>
                </div>
                <div class="col-md-6">
                             <div class="form-group"id="guestNam_div_fd"  style="display:none">
                            <label class="col-sm-3 control-label">Guest Name</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_name_fd" class="form-control">
                            <spam class="parsley-required" id="err_traveler_name_fd"></spam>
                            </div>
                            </div>

                            <div class="form-group" id="guestMo_div_fd" style="display:none">
                            <label class="col-sm-3 control-label">Guest MobileNo.</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_mob_fd" class="form-control">
                            <spam class="parsley-required" id="err_traveler_mob_fd"></spam>
                            </div>
                            </div>
                </div>
                </div>
                
                

                 <div class="row">
                 <div class="col-md-6">
                        <div class="form-group">
                        <div class="checkbox checkbox-primary">
                                    <label>
                                    <input type="checkbox" value="checked" id="spl_app_fd" onchange="enablePolicyFltghtD()" class="custom-checkbox">
                                    <font color="red"><strong>Is special approval required ?</strong></font>
                                        
                                    </label>
                                </div>
                        </div>
                  </div>       
                  <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Enter details for special approval</label>
                        <div class="col-sm-6">
                            <textarea name="" id="spl_txt_area_fd" disabled="disabled" rows="3" class="form-control textarea-autosize"></textarea>
                             <spam class="parsley-required" id="err_spl_txt_area_fd"></spam>
                        </div>
                        </div>
                  </div>        

                </div> 


                <div class="bg-default content-box text-center pad20A mrg25T">
                    <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('3');" value="ADD Bus">
                </div>

 <input type="hidden" placeholder="Optional" id="traveler_b" class="form-control">
 <input type="hidden"  placeholder="Enter mobile no" required class="form-control" id="cntct">

            </form>
                        	   
                               <!-- International-->
                        
                                   <form class="form-horizontal bordered-row" id="international" name="international" data-parsley-validate=""  style="display:none">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">From Airport</label>
                            <div class="col-sm-6">
                                         <input type="text" value="" id="state_boarding_fi" class="form-control">
                               <spam class="parsley-required" id="err_state_boarding_fi"></spam>           
                            </div>
                        </div>

    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Journey Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" id="pick_date_fi" class="bootstrap-datepicker form-control" required data-date-format="mm/dd/yy">
                                </div>
                                <spam class="parsley-required" id="err_pick_date_fi"></spam>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Person's Age</label>
                                <div class="col-sm-6" id="age">
                                <input class="form-control" type="text" value="18" id="p_age_if" name="touchspin-demo-2">
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Frequent flier no.</label>
                            <div class="col-sm-6">
                                  <input type="text" placeholder="Optional" class="form-control" id="ffno_fi">
                                  <spam class="parsley-required" id="err_ffno_fi"></spam>
                            </div>
                        </div>

                          
                         


                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">To Airport</label>
                            <div class="col-sm-6">
                                         <input type="text" id="state_drop_fi" class="form-control">
                                     <spam class="parsley-required" id="err_state_drop_fi"></spam>
                            </div>
                        </div>
                         
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Departure Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" id="pick_time_fi" required type="text">
                                </div>
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" id="b_purpose_fi" class="form-control">
                            </div>
                        </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no_fi" placeholder="Enter S/O no." class="form-control">
                               <spam class="parsley-required" id="err_so_no_fi"></spam>       
                            </div>
                            </div>
                             
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                            <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                    <label>
                                    	 <input type="checkbox" value="checked" id="guest_app_fi" onchange="enableGuestFormFltghtI()" class="custom-checkbox">
                                    <strong>Booking forGuest ?</strong>
                                       
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="guestEm_div_fi" style="display:none">
                            <label class="col-sm-3 control-label">Guest Emailid</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_email_fi" class="form-control">
                             <spam class="parsley-required" id="err_traveler_email_fi"></spam>  
                            </div>
                            </div>
                </div>
                <div class="col-md-6">
                             <div class="form-group"id="guestNam_div_fi"  style="display:none">
                            <label class="col-sm-3 control-label">Guest Name</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_name_fi" class="form-control">
                            <spam class="parsley-required" id="err_traveler_name_fi"></spam>
                            </div>
                            </div>

                            <div class="form-group" id="guestMo_div_fi" style="display:none">
                            <label class="col-sm-3 control-label">Guest MobileNo.</label>
                            <div class="col-sm-6">
                            <input type="text" placeholder="Optional" id="traveler_mob_fi" class="form-control">
                            <spam class="parsley-required" id="err_traveler_mob_fi"></spam>
                            </div>
                            </div>
                </div>
                </div>
                
                

                 <div class="row">
                 <div class="col-md-6">
                        <div class="form-group">
                        <div class="checkbox checkbox-primary">
                                    <label>
                                    <input type="checkbox" value="checked" id="spl_app_fi" onchange="enablePolicyFltghtI()" class="custom-checkbox">
                                    <font color="red"><strong>Is special approval required ?</strong></font>
                                        
                                    </label>
                                </div>
                        </div>
                  </div>       
                  <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Enter details for special approval</label>
                        <div class="col-sm-6">
                            <textarea name="" id="spl_txt_area_fi" disabled="disabled" rows="3" class="form-control textarea-autosize"></textarea>
                             <spam class="parsley-required" id="err_spl_txt_area_fi"></spam>
                        </div>
                        </div>
                  </div>        

                </div> 


                <div class="bg-default content-box text-center pad20A mrg25T">
                    <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('3');" value="ADD Bus">
                </div>

 <input type="hidden" placeholder="Optional" id="traveler_b" class="form-control">
 <input type="hidden"  placeholder="Enter mobile no" required class="form-control" id="cntct">

            </form>
                         
                        
            
                             <div id="table_flight" class="bg-default content-box text-center pad20A mrg25T" 
                              <?php if( empty($request_list_flight) || $request_list_flight->num_rows() <= 0) { ?> style="display:none" <?php } ?> >
                                                    <table class="table table-striped table-bordered dataTable">
                                                    <thead>
                                                    <tr>
                                                    <th>Flight booking_id</th>
                                                    <th >From</th>
                                                    <th>To</th>
                                                    <th>Domestic / International</th>
                                                    <th >Special Approval</th>
                                                    <th >Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="flight_tab_body">
                                                    <?php 
                                                    if( !empty($request_list_flight) || $request_list_flight->num_rows() > 0)
                                                    {
                                                    foreach($request_list_flight->result() as $row)
                                                    {
                                                    ?>
                                                    <tr class="gradeX">
                                                    <td><span class="label bg-gradient-3">
                                                    <a href="<?php echo site_url('User/generateModalCdata/'.$row->f_request_id); ?>" data-toggle="modal" data-target="#f_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->f_request_id; ?></font></a></span></td>
                                                    <td><?php  if(isset($row->domestic_inter) && $row->domestic_inter ==0){  echo getStatName($row->f_b_state); }else{ echo $row->f_b_state;   } ?></td> 
                                                    <td><?php  if(isset($row->domestic_inter) && $row->domestic_inter ==0){  echo getStatName($row->f_d_state); }else{ echo $row->f_d_state;   } ?></td> 
                                                     <td><?php  if(isset($row->domestic_inter) && $row->domestic_inter ==0){ echo " Domestic"; }else{ echo "International";} ?></td> 
                                                    <td><?php if(isset($row->spl_app) && $row->spl_app == 2){ echo "Yes"; }else{  echo "No"; } ?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->f_request_id);?>/cc"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                                    </td>
                                                    </tr>
                                                    <?php } } ?>

                                                    </tbody>
                                                    </table>
                            </div>    

                            </p>
                            
                            
                            
                        </div>

                        <!-- Booking tab start -->
                        <div class="tab-pane fade" id="tab-example-4">
                            <p>
                <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="post" action="<?php echo site_url();?>/User/generateBooking">
                <input type="hidden" name="booking_type" value="p">
                <div class="row">
                Are you sure you want to book these requests ?     
                </div>  
                                    <!-- Bus start -->
                                    <div id="table_booking_bus" class="bg-default content-box text-center pad20A mrg25T" 
                             <?php if( empty($request_list_bus) || $request_list_bus->num_rows() <= 0) { ?> style="display:none" <?php } ?>>
                                            <table class="table table-striped table-bordered dataTable">
                                                    <thead>
                                                    <tr>
                                                    <th>Bus booking_id</th>
                                                    <th >State</th>
                                                    <th>City</th>
                                                    <th >Special Approval</th>
                                                    <th >Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="booking_tab_body1">
                                                    <?php 
                                                    if( !empty($request_list_bus) || $request_list_bus->num_rows() > 0)
                                                    {
                                                    foreach($request_list_bus->result() as $row)
                                                    {
                                                    ?>
                                                    <tr class="gradeX">
                                                    <td><span class="label bg-gradient-3">
                                                    <a href="<?php echo site_url('User/generateModalCdata/'.$row->b_request_id); ?>" data-toggle="modal" data-target="#b_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->b_request_id; ?></font></a></span></td>
                                                    <td><?php echo $row->from_state_id; ?></td> 
                                                    <td><?php echo $row->from_city_id; ?></td> 
                                                    <td><?php if($row->spl_app==1) {echo"NO";}
                                                    else {echo "YES";}?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->b_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                                    </td>
                                                    </tr>
                                                    <?php } } ?>

                                                    </tbody>
                                                    </table>
                                  </div>
                                  <!-- Bus end -->
                                    <!-- Train start -->
                                    <div id="table_booking_train" class="bg-default content-box text-center pad20A mrg25T" 
                             <?php if( empty($request_list_train) || $request_list_train->num_rows() <= 0) { ?> style="display:none" <?php } ?>>
                                            <table class="table table-striped table-bordered dataTable">
                                                    <thead>
                                                    <tr>
                                                    <th>Train booking_id</th>
                                                    <th >State</th>
                                                    <th>City</th>
                                                    <th >Special Approval</th>
                                                    <th >Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="booking_tab_body2">
                                                    <?php 
                                                    if( !empty($request_list_train) || $request_list_train->num_rows() > 0)
                                                    {
                                                    foreach($request_list_train->result() as $row)
                                                    {
                                                    ?>
                                                    <tr class="gradeX">
                                                    <td><span class="label bg-gradient-3">
                                                    <a href="<?php echo site_url('User/generateModalCdata/'.$row->t_request_id); ?>" data-toggle="modal" data-target="#t_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->t_request_id; ?></font></a></span></td>
                                                    <td><?php echo $row->from_state_id; ?></td> 
                                                    <td><?php echo $row->from_city_id; ?></td> 
                                                    <td><?php if($row->spl_app==1) {echo"NO";}
                                                    else {echo "YES";}?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->t_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                                    </td>
                                                    </tr>
                                                    <?php } } ?>

                                                    </tbody>
                                                    </table>
                                  </div>
                                <!-- Train End -->
                                <!-- Flight Start -->
                                     <div id="table_booking_flight" class="bg-default content-box text-center pad20A mrg25T" 
                             <?php if( empty($request_list_flight) || $request_list_flight->num_rows() <= 0) { ?> style="display:none" <?php } ?>>
                                            <table class="table table-striped table-bordered dataTable">
                                                    <thead>
                                                    <tr>
                                                    <th>Flight booking_id</th>
                                                    <th >From</th>
                                                    <th>To</th>
                                                    <th >Special Approval</th>
                                                    <th >Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="booking_tab_body3">
                                                    <?php 
                                                    if( !empty($request_list_flight) || $request_list_flight->num_rows() > 0)
                                                    {
                                                    foreach($request_list_flight->result() as $row)
                                                    {
                                                    ?>
                                                    <tr class="gradeX">
                                                    <td><span class="label bg-gradient-3">
                                                    <a href="<?php echo site_url('User/generateModalCdata/'.$row->f_request_id); ?>" data-toggle="modal" data-target="#c_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->f_request_id; ?></font></a></span></td>
                                                    <td><?php echo $row->from_loc; ?></td> 
                                                    <td><?php echo $row->to_loc; ?></td> 
                                                    <td><?php if($row->spl_app==1) {echo"NO";}
                                                    else {echo "YES";}?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->f_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                                    </td>
                                                    </tr>
                                                    <?php } } ?>

                                                    </tbody>
                                                    </table>
                                  </div>
                                  <!-- Flight end -->

                                    <div class="bg-default content-box text-center pad20A mrg25T">                   
                                    <input type="submit" id="booking_btn" class="btn btn-lg btn-primary" value="Book Now" 
                                     <?php if( ( empty($request_list_flight) || $request_list_flight->num_rows() <= 0) && ( empty($request_list_hotel) || $request_list_hotel->num_rows() <= 0) && ( empty($request_list_cab) || $request_list_cab->num_rows() <= 0) ) { ?> disabled="true" <?php } ?> >   
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

</script>
<!-- Modal Vendor Data End -->



</body>

 <script type="text/javascript">

     function addRequest(btn_flg)
     {    
     	 var submircheak = 0 ;   
		   
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
     var f_apprv = '';
 
			 
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
		var booking_guest = 'unchk';  
		}
 
  var spl_txt_area = $('#spl_txt_area_bus').val();
    if(document.getElementById('spl_app_bus').checked == true)
    {
		var spl_txt_area_bus = $('#spl_txt_area_bus').val();
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

        url: '<?php echo site_url();?>/User/saveBusBooking',
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
				 btn_flg:btn_flg,
				 booking_guest:booking_guest},

        success: function (htmldata2) { 
			  $('#bus_train').show();
              $('#bus_tab_body').html(htmldata2);
         },
        error: function () {
                              alert('error');
                            }
        });
	 	}

    }

    //TRain
	if(btn_flg==2)
     {
		 
     var b_state_boarding_t = $('#b_state_boarding_t').val();
	   if (b_state_boarding_t==null || b_state_boarding_t=="" || b_state_boarding_t=="0"){ 
	        submircheak =1; 
			setvalidation('b_state_boarding_t','F',"Please Select Boarding State name");
         }else{
			    setvalidation('b_state_boarding_t','S',''); 
			 }
             
     var b_city_boarding_t = $('#b_city_boarding_t').val();
	 if (b_city_boarding_t==null || b_city_boarding_t==""){ 
	        submircheak =1; 
			setvalidation('b_city_boarding_t','F',"Please Select Boarding City name");
         }else{
			    setvalidation('b_city_boarding_t','S',''); 
			 }
			 
     var b_state_drop_t = $('#b_state_drop_t').val();
	  if (b_state_drop_t==null || b_state_drop_t=="" || b_state_drop_t=="0"){ 
	        submircheak =1; 
			setvalidation('b_state_drop_t','F',"Please Select Drop State name");
         }else{
			    setvalidation('b_state_drop_t','S',''); 
			 }
			 
     var b_city_drop_t = $('#b_city_drop_t').val();
	  if (b_city_drop_t==null || b_city_drop_t==""){ 
	        submircheak =1; 
			setvalidation('b_city_drop_t','F',"Please Select Drop City name");
         }else{
			    setvalidation('b_city_drop_t','S',''); 
			 }
			 

     var train_class = $('#train_class').val();
	 if (train_class==null || train_class=="" || train_class=="0"){ 
	        submircheak =1; 
			setvalidation('train_class','F',"Please Select Train Class");
         }else{
			    setvalidation('train_class','S',''); 
			 }
     var t_purpose = $('#t_purpose').val();
     
     var p_age = $('#p_age_t').val();
     var cntct = $('#cntct_t').val();

     var pick_date_t = $('#pick_date_t').val();
	 if (pick_date_t==null || pick_date_t==""){ 
	        submircheak =1; 
			setvalidation('pick_date_t','F',"Please Select Date");
         }else{
			    setvalidation('pick_date_t','S',''); 
			 }
	 
     var pick_time = $('#pick_time_t').val();
     
     var requestee = $('#requestee_t').val();
     var traveler = $('#traveler_t').val();  
     var f_apprv_t = '';
	 
     var so_no_t = $('#so_no_t').val();
	  if (so_no_t==null || so_no_t==""){ 
	        submircheak =1; 
			setvalidation('so_no_t','F',"Please Insert S/O no.");
         }else{
			    setvalidation('so_no_t','S',''); 
			 }
	 
	 var traveler_email_t = $('#traveler_email_t').val();
	 var traveler_name_t = $('#traveler_name_t').val();
	 var traveler_mob_t = $('#traveler_mob_t').val();
	 //Booking forGuest  For Train
	 if(document.getElementById('guest_app_train').checked == true)
    {  
		 var booking_guest = 'chk';
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 if (!filter.test(traveler_email_t)){   
	        submircheak =1; 
			setvalidation('traveler_email_t','F',"Please Insert Guest Emailid");
         }else{
			    setvalidation('traveler_email_t','S',''); 
			 } 
			 
		if (traveler_name_t==null || traveler_name_t==""){   
	        submircheak =1; 
			setvalidation('traveler_name_t','F',"Please Insert Guest Name");
         }else{
			    setvalidation('traveler_name_t','S',''); 
			 } 
			 
		if (traveler_mob_t==null || traveler_mob_t==""){   
	        submircheak =1; 
			setvalidation('traveler_mob_t','F',"Please Insert Guest MobileNo.");
         }else{
			    setvalidation('traveler_mob_t','S',''); 
			 } 
			 	 
			  
		 
    }else{
		var booking_guest = 'unchk';  
		}
	 
    var spl_txt_area = $('#spl_txt_area_train').val();
    if(document.getElementById('spl_app_train').checked == true)
    {
		var spl_txt_area_train = $('#spl_txt_area_train').val();
         var spl_app_train = 'chk';
		 if (spl_txt_area_train==null || spl_txt_area_train==""){   
	        submircheak =1; 
			setvalidation('spl_txt_area_train','F',"Enter details for special approval");
         }else{
			    setvalidation('spl_txt_area_train','S',''); 
			 }   
    }     
    else
    {
         var spl_app_train = 'unchk'
    }
	
	
	if(document.getElementById('guest_app_train').checked == true)
    {
         var guest_app_train = 'chk';  
    }     
    else
    {
         var guest_app_train = 'unchk'
    }     

		 
		  if(submircheak ==1){  
			   return false;
			}else{
       		 $.ajax({

        url: '<?php echo site_url();?>/User/saveTrainBooking',
        type: 'POST',    

        data: { 
				b_state_boarding : b_state_boarding_t , 
				b_city_boarding: b_city_boarding_t, 
				b_state_drop:b_state_drop_t, 
                b_city_drop:b_city_drop_t, 
				train_class:train_class , 
				t_purpose:t_purpose, 
				p_age:p_age, 
				cntct:cntct , 
				pick_date:pick_date_t, 
				pick_time:pick_time, 
				requestee:requestee ,
				traveler:traveler, 
				f_apprv:f_apprv_t , 
				so_no:so_no_t , 
				spl_app_train : spl_app_train , 
				spl_txt_area_train : spl_txt_area,
				guest_app_train  : guest_app_train,
				traveler_email_t : traveler_email_t,
				traveler_name_t  : traveler_name_t,
				traveler_mob_t   : traveler_mob_t, 
                btn_flg:btn_flg },

        success: function (htmldata2) {
			 
			
                                        // $("#publishBtnDiv").css("display","block");
                                        // document.getElementById('txtHint').innerHTML=data;
                                        // alert(htmldata2);
                                        // $('#successCab').html("Succesfully created Cab");
                                        // $('#cab_name').val("");
                                        //alert($('#editable-usage1').html());
                                        //$('#editable-usage1').prepend(htmldata2);
                                       // alert(htmldata2);
									   		$("#pick_date").val('');
											$("#pick_time").val('');	
                                            $('#table_train').show();
                                            $('#table_booking_train').show();
                                            $('#train_tab_body').html(htmldata2);
                                            $('#booking_tab_body2').html(htmldata2);
                                             
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
   
    // Flit
    if(btn_flg==3)
     { 
		var j_types =  $('input[name=j_type]:checked').val(); 
    	if(j_types == 0){
		var ffno_fd = $('#ffno_fd').val();
		var p_age_fd = $('#p_age_fd').val();
		var b_purpose_fd = $('#b_purpose_fd').val();		 
		var pick_time_fd = $('#pick_time_fd').val();	
			
		 var b_state_boarding_fd = $('#b_state_boarding_fd').val();
	     if (b_state_boarding_fd==null || b_state_boarding_fd=="" || b_state_boarding_fd=="0"){ 
	        submircheak =1; 
			setvalidation('b_state_boarding_fd','F',"Please Select Boarding State name");
         }else{
			    setvalidation('b_state_boarding_fd','S',''); 
			 }
			 
			 
		 var b_state_drop_fd = $('#b_state_drop_fd').val();
	     if (b_state_drop_fd==null || b_state_drop_fd=="" || b_state_drop_fd=="0"){ 
	        submircheak =1; 
			setvalidation('b_state_drop_fd','F',"Please Select Drop State Name");
         }else{
			    setvalidation('b_state_drop_fd','S',''); 
			 }
			 
		var b_city_boarding_fd = $('#b_city_boarding_fd').val();
	     if (b_city_boarding_fd==null || b_city_boarding_fd==""){ 
	        submircheak =1; 
			setvalidation('b_city_boarding_fd','F',"Please Insert Boarding City");
         }else{
			    setvalidation('b_city_boarding_fd','S',''); 
			 }	
			 
	   var b_city_drop_fd = $('#b_city_drop_fd').val();
	     if (b_city_drop_fd==null || b_city_drop_fd==""){ 
	        submircheak =1; 
			setvalidation('b_city_drop_fd','F',"Please Insert Drop City");
         }else{
			    setvalidation('b_city_drop_fd','S',''); 
			 }	
			 
		var pick_date_fd = $('#pick_date_fd').val();
	     if (pick_date_fd==null || pick_date_fd==""){ 
	        submircheak =1; 
			setvalidation('pick_date_fd','F',"Please Select Journey Date");
         }else{
			    setvalidation('pick_date_fd','S',''); 
			 }	
			 
	   var so_no_fd = $('#so_no_fd').val();
	     if (so_no_fd==null || so_no_fd==""){ 
	        submircheak =1; 
			setvalidation('so_no_fd','F',"Please Insert S/O no.");
         }else{
			    setvalidation('so_no_fd','S',''); 
			 }	
			 	 		  
		
			 if(document.getElementById('guest_app_fd').checked == true)
   				 {	
				var booking_guest = 'chk';
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var traveler_email_fd = $('#traveler_email_fd').val();		
				 if (!filter.test(traveler_email_fd)){   
					submircheak =1; 
					setvalidation('traveler_email_fd','F',"Please Insert Guest Emailid");
				 }else{
						setvalidation('traveler_email_fd','S',''); 
					 } 
				var traveler_name_fd = $('#traveler_name_fd').val();		 
				if (traveler_name_fd==null || traveler_name_fd==""){   
					submircheak =1; 
					setvalidation('traveler_name_fd','F',"Please Insert Guest Name");
				 }else{
						setvalidation('traveler_name_fd','S',''); 
					 } 
				var traveler_mob_fd = $('#traveler_mob_fd').val();		 
				if (traveler_mob_fd==null || traveler_mob_fd==""){   
					submircheak =1; 
					setvalidation('traveler_mob_fd','F',"Please Insert Guest MobileNo.");
				 }else{
						setvalidation('traveler_mob_fd','S',''); 
					 } 
    			}else{
					var booking_guest = 'unchk';  
				}
				
		if(document.getElementById('spl_app_fd').checked == true)
			{
				var spl_txt_area_fd = $('#spl_txt_area_fd').val();
				 var spl_app_fd = 'chk';
				 if (spl_txt_area_fd==null || spl_txt_area_fd==""){   
					submircheak =1; 
					setvalidation('spl_txt_area_fd','F',"Enter details for special approval");
				 }else{
						setvalidation('spl_txt_area_fd','S',''); 
					 }   
			}else{
					 var spl_app_fd = 'unchk'
				}
			 
			 
		if(submircheak ==1){  
			   return false;
			}else{ 
			// alert('ok'); 
			 	  $.ajax({
        url: '<?php echo site_url();?>/User/saveflightBooking',
        type: 'POST',    
        data: { 
				domestic_inter : 0 ,
				f_boas:b_state_boarding_fd,
				f_dros:b_state_drop_fd ,
				f_loc:b_city_boarding_fd, 
				t_loc:b_city_drop_fd, 
				j_date : pick_date_fd, 
				f_time:pick_time_fd,
        		p_age:p_age_fd,
				ffno:ffno_fd,
				b_purpose_fi:b_purpose_fd,
				so_no:so_no_fd,
				btn_flg:btn_flg,
				booking_guest:booking_guest,
				traveler_email_fi:traveler_email_fd,
				traveler_name_fi:traveler_name_fd,
				traveler_mob_fi:traveler_mob_fd,
				spl_app_fi:spl_app_fd,
				spl_txt_area_fi:spl_txt_area_fd
				 
			},

        success: function (htmldata2) {

                                        // $("#publishBtnDiv").css("display","block");
                                        // document.getElementById('txtHint').innerHTML=data;
                                        // alert(htmldata2);
                                        // $('#successCab').html("Succesfully created Cab");
                                        // $('#cab_name').val("");
                                        //alert($('#editable-usage1').html());
                                        //$('#editable-usage1').prepend(htmldata2);
                                            $('#table_flight').show();
                                            $('#table_booking_flight').show();
                                            $('#flight_tab_body').html(htmldata2);
                                            $('#booking_tab_body3').html(htmldata2);

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
		
			
			
			}else{
		var ffno_fi = $('#ffno_fi').val();
		var p_age_if = $('#p_age_if').val();
		var b_purpose_fi = $('#b_purpose_fi').val();		 
		var pick_time_fi = $('#pick_time_fi').val();
	     
		 var state_boarding_fi = $('#state_boarding_fi').val();
		 if (state_boarding_fi==null || state_boarding_fi=="" || state_boarding_fi=="0"){ 
	        submircheak =1; 
			setvalidation('state_boarding_fi','F',"Please Insert From Airport");
         }else{
			    setvalidation('state_boarding_fi','S',''); 
			 }
			 
			 
		 var state_drop_fi = $('#state_drop_fi').val();
	     if (state_drop_fi==null || state_drop_fi=="" || state_drop_fi=="0"){ 
	        submircheak =1; 
			setvalidation('state_drop_fi','F',"Please Insert To Airport");
         }else{
			    setvalidation('state_drop_fi','S',''); 
			 }
	 
	 
			 
		var pick_date_fi = $('#pick_date_fi').val();
	     if (pick_date_fi==null || pick_date_fi==""){ 
	        submircheak =1; 
			setvalidation('pick_date_fi','F',"Please Select Journey Date");
         }else{
			    setvalidation('pick_date_fi','S',''); 
			 }	
			 
	   var so_no_fi = $('#so_no_fi').val();
	     if (so_no_fi==null || so_no_fi==""){ 
	        submircheak =1; 
			setvalidation('so_no_fi','F',"Please Insert S/O no.");
         }else{
			    setvalidation('so_no_fi','S',''); 
			 }	
			 	 		  
		
			 if(document.getElementById('guest_app_fi').checked == true)
   				 {	
				var booking_guest = 'chk';
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var traveler_email_fi = $('#traveler_email_fi').val();		
				 if (!filter.test(traveler_email_fi)){   
					submircheak =1; 
					setvalidation('traveler_email_fi','F',"Please Insert Guest Emailid");
				 }else{
						setvalidation('traveler_email_fi','S',''); 
					 } 
					 
				var traveler_name_fi = $('#traveler_name_fi').val();		 
				if (traveler_name_fi==null || traveler_name_fi==""){   
					submircheak =1; 
					setvalidation('traveler_name_fi','F',"Please Insert Guest Name");
				 }else{
						setvalidation('traveler_name_fi','S',''); 
					 } 
				var traveler_mob_fi = $('#traveler_mob_fi').val();		 
				if (traveler_mob_fi==null || traveler_mob_fi==""){   
					submircheak =1; 
					setvalidation('traveler_mob_fi','F',"Please Insert Guest MobileNo.");
				 }else{
						setvalidation('traveler_mob_fi','S',''); 
					 } 
    			}else{
					var booking_guest = 'unchk';  
				}
				
		if(document.getElementById('spl_app_fi').checked == true)
			{
				var spl_txt_area_fi = $('#spl_txt_area_fi').val();
				 var spl_app_fi = 'chk';
				 if (spl_txt_area_fi==null || spl_txt_area_fi==""){   
					submircheak =1; 
					setvalidation('spl_txt_area_fi','F',"Enter details for special approval");
				 }else{
						setvalidation('spl_txt_area_fi','S',''); 
					 }   
			}else{
					 var spl_app_fi = 'unchk'
				}
				
			
			 
		if(submircheak ==1){  
			   return false;
			}else{ 
			// alert('ok'); 
			 	  $.ajax({
        url: '<?php echo site_url();?>/User/saveflightBooking',
        type: 'POST',    
        data: { 
				domestic_inter : 1 ,
				j_date : pick_date_fi , 
				f_loc:state_boarding_fi, 
				t_loc:state_drop_fi, 
				f_time:pick_time_fi,
        		p_age:p_age_if,
				ffno:ffno_fi,
				b_purpose_fi:b_purpose_fi,
				so_no:so_no_fi,
				btn_flg:btn_flg,
				booking_guest:booking_guest,
				traveler_email_fi:traveler_email_fi,
				traveler_name_fi:traveler_name_fi,
				traveler_mob_fi:traveler_mob_fi,
				spl_app_fi:spl_app_fi,
				spl_txt_area_fi:spl_txt_area_fi
			},

        success: function (htmldata2) {

                                        // $("#publishBtnDiv").css("display","block");
                                        // document.getElementById('txtHint').innerHTML=data;
                                        // alert(htmldata2);
                                        // $('#successCab').html("Succesfully created Cab");
                                        // $('#cab_name').val("");
                                        //alert($('#editable-usage1').html());
                                        //$('#editable-usage1').prepend(htmldata2);
                                            $('#table_flight').show();
                                            $('#table_booking_flight').show();
                                            $('#flight_tab_body').html(htmldata2);
                                            $('#booking_tab_body3').html(htmldata2);

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
   function initialize() {
      var input = document.getElementById('f_loc');
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
      var input = document.getElementById('t_loc');
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
      var input = document.getElementById('b_city_boarding_fd');
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
      var input = document.getElementById('b_city_drop_fd');
      var options = {
                      types: ['(cities)'],
                      componentRestrictions: {country: "in"}
                     };

      var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>
 function CheakJourneyTypes(srt){
      		if(srt ==0){
				$( "#international_1" ).removeClass( "content-box-header bg-primary" ).addClass( "content-box-header bg-default" );
				$( "#domestic_1" ).removeClass( "content-box-header bg-default" ).addClass( "content-box-header bg-primary" );
				
				$( "#domestic" ).show();
				$( "#international" ).hide();
				}
				
			if(srt ==1){
				    $( "#domestic_1" ).removeClass( "content-box-header bg-primary" ).addClass( "content-box-header bg-default" );
				    $( "#international_1" ).removeClass( "content-box-header bg-default" ).addClass( "content-box-header bg-primary" );
					$( "#international" ).show();
					$( "#domestic" ).hide();
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
function enableGuestFormFltghtD()
{    
    if(document.getElementById('guest_app_fd').checked == true)
    {
    $( "#guestNam_div_fd" ).show(); $( "#guestEm_div_fd" ).show(); 
    $( "#guestMo_div_fd" ).show();
    }
    else
    {
     $( "#guestNam_div_fd" ).hide(); $( "#guestEm_div_fd" ).hide();    
     $( "#guestMo_div_fd" ).hide(); 
    }

}

function enableGuestFormFltghtI()
{    
    if(document.getElementById('guest_app_fi').checked == true)
    {
    $( "#guestNam_div_fi" ).show(); $( "#guestEm_div_fi" ).show(); 
    $( "#guestMo_div_fi" ).show();
    }
    else
    {
     $( "#guestNam_div_fi" ).hide(); $( "#guestEm_div_fi" ).hide();    
     $( "#guestMo_div_fi" ).hide(); 
    }

}

function enablePolicyFltghtD()
 {  
    if(document.getElementById('spl_app_fd').checked == true)
    {
     document.getElementById('spl_txt_area_fd').removeAttribute('disabled');
    }
    else
    {
     $("#spl_txt_area_fd").val("");
     document.getElementById('spl_txt_area_fd').setAttribute('disabled', 'disabled');
    }
}

function enablePolicyFltghtI()
 {
    if(document.getElementById('spl_app_fi').checked == true)
    {
     document.getElementById('spl_txt_area_fi').removeAttribute('disabled');
    }
    else
    {
     $("#spl_txt_area_fi").val("");
     document.getElementById('spl_txt_area_fi').setAttribute('disabled', 'disabled');
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

</html>
