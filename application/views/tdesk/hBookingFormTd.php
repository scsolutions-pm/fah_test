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
    <h2>HOTEL BOOKING SECTION</h2>
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
                    HOTEL Booking Form
                </h3>
                <div class="example-box-wrapper">
                    <ul class="list-group list-group-separator row list-group-icons">
                        <li class="col-md-3 active">
                            <a href="#tab-example-1" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-blue-alt icon-institution"></i>
                                HOTEL
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
             
                             <form class="form-horizontal bordered-row" id="hotel_form" name="hotel_form" data-parsley-validate="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select State</label>
                            <div class="col-sm-6">
                                        <select name="" required class="chosen-select form-control " id="h_state_select" >
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
                            <label class="col-sm-3 control-label">No. of Rooms</label>
                            <div class="col-sm-6">
                                        <select required class="form-control" id="rooms">
                                    <option value="0">Select rooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                        </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Checkin Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" id="in_date" required data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Checkin Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" required type="text" id="in_time">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Preference 1</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Enter preference" class="form-control" id="prfr1" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Preference 3</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Optional" class="form-control" id="prfr3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Booking for</label>
                            <div class="col-sm-6">
                                 <select name="requestee" required id="requestee" class="chosen-select form-control ">
                                        <option value="0">Select Requestee</option>
                                        <?php if(!empty($fa_list)) { foreach($fa_list->result() as $row1) { ?>
                                        <option value="<?php echo $row1->employee_id; ?>"><?php echo $row1->first_name." ".$row1->last_name."(".$row1->city_name.")"; ?></option>
                                        <?php } } ?>
                                        </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City</label>
                            <div class="col-sm-6">
                                <input type="text" name="" id="h_city_select" required class="form-control"  autocomplete="on">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No.of Persons</label>
                            <div class="col-sm-6">
                                             <select required class="form-control" id="persons" >
                                        <option value="0">Select Persons</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Checkout Date</label>
                            <div class="col-sm-6">
                               <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" id="out_date" required data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div> 
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Checkout Time</label>
                            <div class="col-sm-6">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" id="out_time" required type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Preference 2</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="Optional" class="form-control" id="prfr2">
                            </div>
                        </div>
                             <div class="form-group">
                                <label class="col-sm-3 control-label">Purpose</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Optional" class="form-control" id="h_purpose">
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

                <div class="bg-default content-box text-center pad20A mrg25T">
                     <input type="button" class="btn btn-lg btn-primary" onclick="addRequest('2');" value="ADD Hotel">
                </div>
            </form>
                         <div id="table_hotel" class="bg-default content-box text-center pad20A mrg25T" 
                         <?php if( empty($request_list_hotel) || $request_list_hotel->num_rows() <= 0) { ?>style="display:none" <?php } ?>>
                                    <table>
                                    <thead>
                                            <tr>
                                                <th>Hotel booking_id</th>
                                                <th >State</th>
                                                <th>City</th>
                                                <th >Checkin Date</th>
                                                <th >Checkout Date</th>
                                                <th >Rooms</th>
                                                <th >Action</th>
                                            </tr>
                                    </thead>
                                        <tbody id="hotel_tab_body">
                                        <?php 
                                        if( !empty($request_list_hotel) && $request_list_hotel->num_rows() > 0)
                                        {
                                        foreach($request_list_hotel->result() as $row)
                                        {
                                        ?>
                                        <tr class="gradeX">
                                        <td>
                                        <span class="label bg-gradient-2">
                                        <a href="<?php echo site_url('User/generateModalHdata/'.$row->h_request_id); ?>" data-toggle="modal" data-target="#h_rqst_Modal">
                                        <font color="white"> <?php  echo $row->h_request_id; ?></font></a></span>
                                        </td> 
                                        <td><?php echo $row->state_id; ?></td> 
                                        <td><?php echo $row->city_id; ?></td> 
                                        <td><?php echo $row->checkin_date; ?></td> 
                                        <td><?php echo $row->checkout_date; ?></td> 
                                        <td><?php echo $row->no_of_rooms; ?></td> 
                                        <td class="actions">
                                        <a href="<?php echo site_url('User_TD/deleteVehicleRequest/'.$row->h_request_id);?>/bb"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                        </td>
                                        </tr>
                                        <?php }} ?>
                                        </tbody>
                                    </table>
                            </div>
                            </p>
                        </div>

                        <!-- Book Now Tab -->
                       
                        <div class="tab-pane fade" id="tab-example-4">
                            <p>
                <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="post" action="<?php echo site_url();?>/User/generateBooking">
                <input type="hidden" name="booking_type" value="h">
                <div class="row">
                                    Are you sure you want to book these requests ?                     
                </div>
                
                            <div id="table_booking_cab" class="bg-default content-box text-center pad20A mrg25T" 
                             <?php if( empty($request_list_hotel) || $request_list_hotel->num_rows() <= 0) { ?> style="display:none" <?php } ?>>
                                            <table>
                                                    <thead>
                                                    <tr>
                                                    <th>Booking_id</th>
                                                    <th >State</th>
                                                    <th>City</th>
                                                    <th>Check in date</th>
                                                    <th>Check out date</th>
                                                    <th>No. of Rooms</th>
                                                    <th >Special Approval</th>
                                                    <th >Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="booking_tab_body1">
                                                    <?php 
                                                    if( !empty($request_list_hotel) || $request_list_hotel->num_rows() > 0)
                                                    {
                                                    foreach($request_list_hotel->result() as $row)
                                                    {
                                                    ?>
                                                    <tr class="gradeX">
                                                    <td><span class="label bg-gradient-3">
                                                    <a href="<?php echo site_url('User_TD/generateModalCdata/'.$row->h_request_id); ?>" data-toggle="modal" data-target="#h_rqst_Modal">    
                                                    <font color="white"><?php  echo $row->h_request_id; ?></font></a></span></td>
                                                    <td><?php echo $row->state_id; ?></td> 
                                                    <td><?php echo $row->city_id; ?></td> 
                                                    <td><?php echo $row->checkin_date; ?></td> 
                                                    <td><?php echo $row->checkout_date; ?></td> 
                                                    <td><?php echo $row->no_of_rooms; ?></td> 
                                                    <td><?php if($row->spl_app==1) {echo"NO";}
                                                    else {echo "YES";}?></td> 
                                                    <td class="actions">
                                                    <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->h_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
                                                    </td>
                                                    </tr>
                                                    <?php } } ?>

                                                    </tbody>
                                                    </table>
                            </div>

                                    <div class="bg-default content-box text-center pad20A mrg25T">                   
                                    <input type="submit" id="booking_btn" class="btn btn-lg btn-primary" value="Book Cabs Now" 
                                     <?php if( empty($request_list_hotel) || $request_list_hotel->num_rows() <= 0) { ?> disabled="disabled" <?php } ?> >   
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
     var in_date = $('#in_date').val();
     var out_date = $('#out_date').val();

     var in_time = $('#in_time').val();
     var out_time = $('#out_time').val();

     var h_state_select = $('#h_state_select').val();
     var h_city_select = $('#h_city_select').val();

     var rooms = $('#rooms').val();
     var persons = $('#persons').val();

     var prfr1 = $('#prfr1').val();
     var prfr2 = $('#prfr2').val();

     var prfr3 = $('#prfr3').val();
     var h_purpose = $('#h_purpose').val(); 

     var requestee = $('#requestee').val();  
     
     var traveler_name = $('#traveler_name').val();
     var traveler_email = $('#traveler_email').val(); 
     var traveler_mob = $('#traveler_mob').val();   

     var f_apprv = $('#f_apprv').val();
     var so_no = $('#so_no').val();

        $.ajax({

        url: '<?php echo site_url();?>/User/saveHtlBooking',
        type: 'POST',    

        data: { in_date : in_date , out_date: out_date, in_time:in_time , out_time:out_time, h_state_select:h_state_select, h_city_select:h_city_select , rooms:rooms ,  persons:persons, prfr1:prfr1, prfr2:prfr2 , prfr3:prfr3, h_purpose:h_purpose,requestee:requestee,traveler_name:traveler_name, traveler_email:traveler_email,traveler_mob:traveler_mob,so_no:so_no, btn_flg:btn_flg },

        success: function (htmldata2) {

                                        // $("#publishBtnDiv").css("display","block");
                                        // document.getElementById('txtHint').innerHTML=data;
                                        // alert(htmldata2);
                                        // $('#successCab').html("Succesfully created Cab");
                                        // $('#cab_name').val("");
                                        //alert($('#editable-usage1').html());
                                        //$('#editable-usage1').prepend(htmldata2);
                                             $('#table_hotel').show();
                                             $('#table_booking_cab').show();
                                             $('#hotel_tab_body').html(htmldata2);
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
</html>
