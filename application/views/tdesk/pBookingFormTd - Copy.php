<!DOCTYPE html> 
<html lang="en">
 <body>
 		 <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    
<!-- Autocomplete city -->
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
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding City</label>
                            <div class="col-sm-6">
                                <select name="" id="b_city_boarding" required class="chosen-select form-control ">
                                    <optgroup label="Select City">
                                        <option value="0">Select City</option>
                                        <?php if(!empty($city_list)) { foreach($city_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->city_id; ?>"><?php echo $row1->city_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
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
                                    </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Person's Age</label>
                                <div class="col-sm-6">
                                <input class="form-control" type="text" value="18" id="p_age" name="touchspin-demo-2">
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
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Booking for</label>
                            <div class="col-sm-6">
                                    <select name="f_apprv" required id="requestee" class="chosen-select form-control ">
                                        <option value="0">Select Requestee</option>
                                        <?php if(!empty($fa_list)) { foreach($fa_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->employee_id; ?>"><?php echo $row1->first_name." ".$row1->last_name."(".$row1->city_name.")"; ?></option>
                                        <?php } } ?>
                                        </select>
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
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop City</label>
                            <div class="col-sm-6">
                                <select name="" id="b_city_drop" required class="chosen-select form-control ">
                                    <optgroup label="Select City">
                                        <option value="0">Select City</option>
                                        <?php if(!empty($city_list)) { foreach($city_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->city_id; ?>"><?php echo $row1->city_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                            </div>
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
                            <label class="col-sm-3 control-label">Person Contact no.</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter mobile no" required class="form-control" id="cntct">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" id="b_purpose" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-3 control-label">Guest Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" id="traveler" class="form-control">
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
                    <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('1');" value="ADD Bus">
                </div>

            </form>           
                             <div id="bus_train" class="bg-default content-box text-center pad20A mrg25T" 
                              <?php if( empty($request_list_bus) || $request_list_bus->num_rows() <= 0) { ?> style="display:none" <?php } ?> >
                                                    <table>
                                                    <thead>
                                                    <tr>
                                                    <th>Bus booking_id</th>
                                                    <th >State</th>
                                                    <th>City</th>
                                                    <th >Special Approval</th>
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
                                                    <a href="<?php echo site_url('User/generateModalCdata/'.$row->b_request_id); ?>" data-toggle="modal" data-target="#b_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->b_request_id; ?></font></a></span></td>
                                                    <td><?php echo $row->from_state_id; ?></td> 
                                                    <td><?php echo $row->from_city_id; ?></td> 
                                                    <td><?php echo $row->spl_app; ?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->b_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
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
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding City</label>
                            <div class="col-sm-6">
                                <select name="" id="b_city_boarding_t" required class="chosen-select form-control ">
                                    <optgroup label="Select City">
                                        <option value="0">Select City</option>
                                        <?php if(!empty($city_list)) { foreach($city_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->city_id; ?>"><?php echo $row1->city_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
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
                                        <option value="5">Second AC</option>
                                        <option value="6">First AC</option>
                                    </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Person's Age</label>
                                <div class="col-sm-6">
                            <input class="form-control" type="text" value="21" id="p_age_t" name="touchspin-demo-2">
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
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Booking for</label>
                            <div class="col-sm-6">
                                    <select name="f_apprv" required id="requestee_t" class="chosen-select form-control ">
                                        <option value="0">Select Requestee</option>
                                        <?php if(!empty($fa_list)) { foreach($fa_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->employee_id; ?>"><?php echo $row1->first_name." ".$row1->last_name."(".$row1->city_name.")"; ?></option>
                                        <?php } } ?>
                                        </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Select Functional Approver</label>
                            <div class="col-sm-6">
                                        <select name="f_apprv" required id="f_apprv_t" class="chosen-select form-control ">
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
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Drop City</label>
                            <div class="col-sm-6">
                                <select name="" id="b_city_drop_t" required class="chosen-select form-control ">
                                    <optgroup label="Select City">
                                        <option value="0">Select City</option>
                                        <?php if(!empty($city_list)) { foreach($city_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->city_id; ?>"><?php echo $row1->city_name; ?></option>
                                        <?php } } ?>
                                    </optgroup>
                                        </select>
                            </div>
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
                            <label class="col-sm-3 control-label">Person Contact no.</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter mobile no" required class="form-control" id="cntct_t">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" id="t_purpose" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-3 control-label">Guest Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" id="traveler_t" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">S/O no.</label>
                            <div class="col-sm-6">
                                 <input type="text" name="so_no" id="so_no_t" placeholder="Enter S/O no." class="form-control">       
                            </div>
                            </div>
                             
                    </div>
                </div>
                <div class="bg-default content-box text-center pad20A mrg25T">
                    <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('2');" value="ADD Train">
                </div>

            </form>    
                           <div id="table_train" class="bg-default content-box text-center pad20A mrg25T" 
                              <?php if( empty($request_list_train) || $request_list_train->num_rows() <= 0) { ?> style="display:none" <?php } ?> >
                                                    <table>
                                                    <thead>
                                                    <tr>
                                                    <th>Train booking_id</th>
                                                    <th >State</th>
                                                    <th>City</th>
                                                    <th >Special Approval</th>
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
                                                    <td><span class="label bg-gradient-3">
                                                    <a href="<?php echo site_url('User/generateModalCdata/'.$row->t_request_id); ?>" data-toggle="modal" data-target="#t_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->t_request_id; ?></font></a></span></td>
                                                    <td><?php echo $row->from_state_id; ?></td> 
                                                    <td><?php echo $row->from_city_id; ?></td> 
                                                    <td><?php echo $row->spl_app; ?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->t_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
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
            <form class="form-horizontal bordered-row" id="domestic" data-parsley-validate="">
             		                   
                                
               		 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Boarding State</label>
                            <div class="col-sm-6">
                                        <select name="" required id="f_state_boarding" class="chosen-select form-control ">
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
                                    <input type="text" class="bootstrap-datepicker form-control" id="j_date" required data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">From City</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter starting point" id="f_loc" required class="form-control" autocomplete="on">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">From Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" id="f_time" required type="text">
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
                                <input type="text" placeholder="Optional" id="ffno" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Booking for</label>
                            <div class="col-sm-6">
                                    <select name="f_apprv" required id="requestee" class="chosen-select form-control ">
                                        <option value="0">Select Requestee</option>
                                        <?php if(!empty($fa_list)) { foreach($fa_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->employee_id; ?>"><?php echo $row1->first_name." ".$row1->last_name."(".$row1->city_name.")"; ?></option>
                                        <?php } } ?>
                                        </select>
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
                            <label class="col-sm-3 control-label">Drop State</label>
                            <div class="col-sm-6">
                                       <select name="" id="f_state_drop" required class="chosen-select form-control ">
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
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" class="form-control" id="f_purpose">
                            </div>
                        </div>

                           <div class="form-group">
                            <label class="col-sm-3 control-label">To City</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter destination point" required class="form-control" id="t_loc" autocomplete="on">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">To Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" required type="text" id="t_time">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Person Contact no.</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter mobile no" required class="form-control" id="cntct">
                            </div>
                        </div>

                             <div class="form-group">
                                <label class="col-sm-3 control-label">Functional Dept.</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" class="form-control" id="fdpt">
                                </div>
                            </div>

                        <div class="form-group">
                                <label class="col-sm-3 control-label">Guest Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" id="traveler" class="form-control">
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
           	    	      <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('3');" value="ADD Flight">
                          <input type="hidden" name="domestic_inter" value="0">
            	    </div>
            </form>
            
            
            <form class="form-horizontal bordered-row" id="international" data-parsley-validate="" style="display:none">
             		            
               		 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">From Airport</label>
                            <div class="col-sm-6">
                                        <input type="text" value="" id="f_state_boarding" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Journey Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" id="j_date" required data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                         <!--<div class="form-group">
                            <label class="col-sm-3 control-label">From City</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter starting point" id="f_loc" required class="form-control" autocomplete="on">
                            </div>
                        </div>-->
                         <div class="form-group">
                            <label class="col-sm-3 control-label">From Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" id="f_time" required type="text">
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
                                <input type="text" placeholder="Optional" id="ffno" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Booking for</label>
                            <div class="col-sm-6">
                                    <select name="f_apprv" required id="requestee" class="chosen-select form-control ">
                                        <option value="0">Select Requestee</option>
                                        <?php if(!empty($fa_list)) { foreach($fa_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->employee_id; ?>"><?php echo $row1->first_name." ".$row1->last_name."(".$row1->city_name.")"; ?></option>
                                        <?php } } ?>
                                        </select>
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
                            <label class="col-sm-3 control-label">To Airport</label>
                            <div class="col-sm-6">
                                        <input type="text" id="f_state_drop" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Purpose</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" class="form-control" id="f_purpose">
                            </div>
                        </div>

                           <!--<div class="form-group">
                            <label class="col-sm-3 control-label">To City</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter destination point" required class="form-control" id="t_loc" autocomplete="on">
                            </div>
                        </div>-->
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">To Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" required type="text" id="t_time">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Person Contact no.</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter mobile no" required class="form-control" id="cntct">
                            </div>
                        </div>

                             <div class="form-group">
                                <label class="col-sm-3 control-label">Functional Dept.</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" class="form-control" id="fdpt">
                                </div>
                            </div>

                        <div class="form-group">
                                <label class="col-sm-3 control-label">Guest Name</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" id="traveler" class="form-control">
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
           	    	      <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('3');" value="ADD Flight">
                          <input type="hidden" name="domestic_inter" value="1">
            	    </div>
            </form>
            
            
                             <div id="table_flight" class="bg-default content-box text-center pad20A mrg25T" 
                              <?php if( empty($request_list_flight) || $request_list_flight->num_rows() <= 0) { ?> style="display:none" <?php } ?> >
                                                    <table>
                                                    <thead>
                                                    <tr>
                                                    <th>Cab booking_id</th>
                                                    <th >From</th>
                                                    <th>To</th>
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
                                                    <td><?php echo $row->from_loc; ?></td> 
                                                    <td><?php echo $row->to_loc; ?></td> 
                                                    <td><?php echo $row->spl_app; ?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->f_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
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
                                            <table>
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
                                            <table>
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
                                            <table>
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

        if(btn_flg==1)
     {

     var b_state_boarding = $('#b_state_boarding').val();
     var b_city_boarding = $('#b_city_boarding').val();
     var b_state_drop = $('#b_state_drop').val();
     var b_city_drop = $('#b_city_drop').val();

     var bus_type_select = $('#bus_type_select').val();
     var b_purpose = $('#b_purpose').val();
     
     var p_age = $('#p_age').val();
     var cntct = $('#cntct').val();

     var pick_date = $('#pick_date').val();
     var pick_time = $('#pick_time').val();
     
     var requestee = $('#requestee').val();
     var traveler = $('#traveler').val();  
     var f_apprv = $('#f_apprv').val();
     var so_no = $('#so_no').val();

        $.ajax({

        url: '<?php echo site_url();?>/User/saveBusBooking',
        type: 'POST',    

        data: { b_state_boarding : b_state_boarding , b_city_boarding: b_city_boarding, b_state_drop:b_state_drop, 
                b_city_drop:b_city_drop, bus_type_select:bus_type_select , b_purpose:b_purpose, p_age:p_age,        cntct:cntct , pick_date:pick_date, pick_time:pick_time, requestee:requestee ,traveler:traveler, f_apprv:f_apprv , so_no:so_no , btn_flg:btn_flg },

        success: function (htmldata2) {

                                        // $("#publishBtnDiv").css("display","block");
                                        // document.getElementById('txtHint').innerHTML=data;
                                        // alert(htmldata2);
                                        // $('#successCab').html("Succesfully created Cab");
                                        // $('#cab_name').val("");
                                        //alert($('#editable-usage1').html());
                                        //$('#editable-usage1').prepend(htmldata2);
                                             $('#table_bus').show();
                                             $('#table_booking_bus').show();
                                             $('#bus_tab_body').html(htmldata2);
                                             $('#booking_tab_body1').html(htmldata2);
                                             $('#booking_btn').disabled="false";
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

        if(btn_flg==2)
     {
     var b_state_boarding = $('#b_state_boarding_t').val();
     var b_city_boarding = $('#b_city_boarding_t').val();
     var b_state_drop = $('#b_state_drop_t').val();
     var b_city_drop = $('#b_city_drop_t').val();

     var train_class = $('#train_class').val();
     var t_purpose = $('#t_purpose').val();
     
     var p_age = $('#p_age_t').val();
     var cntct = $('#cntct_t').val();

     var pick_date = $('#pick_date_t').val();
     var pick_time = $('#pick_time_t').val();
     
     var requestee = $('#requestee_t').val();
     var traveler = $('#traveler_t').val();  
     var f_apprv = $('#f_apprv_t').val();
     var so_no = $('#so_no_t').val();

        $.ajax({

        url: '<?php echo site_url();?>/User/saveTrainBooking',
        type: 'POST',    

        data: { b_state_boarding : b_state_boarding , b_city_boarding: b_city_boarding, b_state_drop:b_state_drop, 
                b_city_drop:b_city_drop, train_class:train_class , t_purpose:t_purpose, p_age:p_age, cntct:cntct , pick_date:pick_date, pick_time:pick_time, requestee:requestee ,traveler:traveler, f_apprv:f_apprv , so_no:so_no , btn_flg:btn_flg },

        success: function (htmldata2) {

                                        // $("#publishBtnDiv").css("display","block");
                                        // document.getElementById('txtHint').innerHTML=data;
                                        // alert(htmldata2);
                                        // $('#successCab').html("Succesfully created Cab");
                                        // $('#cab_name').val("");
                                        //alert($('#editable-usage1').html());
                                        //$('#editable-usage1').prepend(htmldata2);
                                        alert(htmldata2);
                                           // $('#table_train').show();
                                           // $('#table_booking_train').show();
                                           // $('#train_tab_body').html(htmldata2);
                                           // $('#booking_tab_body2').html(htmldata2);
                                            // $('#append1').submit()=false;
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


    if(btn_flg==3)
     {
     var j_date = $('#j_date').val();

     var f_loc = $('#f_loc').val();
     var t_loc = $('#t_loc').val(); 

     var f_time = $('#f_time').val();
     var t_time = $('#t_time').val();

     var f_state_boarding = $('#f_state_boarding').val();
     var f_state_drop = $('#f_state_drop').val();

     var p_age = $('#p_age').val();
     var cntct = $('#cntct').val();

     var ffno = $('#ffno').val();
     var fdpt = $('#fdpt').val();
     var f_purpose = $('#f_purpose').val();

     var traveler = $('#traveler').val();
     var so_no = $('#so_no').val(); 

     var requestee = $('#requestee').val();
     var f_apprv = $('#f_apprv').val(); 
 
        $.ajax({

        url: '<?php echo site_url();?>/User/saveflightBooking',
        type: 'POST',    

        data: { j_date : j_date , f_loc:f_loc, t_loc:t_loc, f_time:f_time , t_time:t_time ,  f_state_boarding:f_state_boarding, 
        f_state_drop:f_state_drop, p_age:p_age, cntct:cntct, ffno:ffno, fdpt:fdpt, f_purpose:f_purpose ,
        f_apprv: f_apprv, requestee:requestee, traveler:traveler, so_no:so_no , btn_flg:btn_flg },

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

</html>
