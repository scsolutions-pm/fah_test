<!DOCTYPE html> 
<html lang="en">
 <body>

   
                <!-- ..... side BAR-->
        <div id="page-sidebar">
    <div class="scroll-sidebar">
        

    <ul id="sidebar-menu">
    <li class="header"><span>Overview</span></li>
    <li>
        <a href="index.html" title="Admin Dashboard">
            <i class="glyph-icon icon-linecons-tv"></i>
            <span>Travity dashboard</span>
        </a>
    </li>
    <li class="divider"></li>
    <li class="no-menu">
        <a href="<?php echo base_url(); ?>/frontend-template/index.html" title="Frontend template">
            <i class="glyph-icon icon-linecons-beaker"></i>
            <span>Frontend view</span>
            <span class="bs-label label-danger">
                NEW
            </span>
        </a>
    </li>

    <?php if(!empty($user_type)){  ?>
    <li class="header"><span>Operations</span></li>

    <?php if($user_type==1 || $user_type==2 || $user_type==3 || $user_type==5 ) { ?>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-diamond"></i>
            <span>Generate Bookings</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="<?php echo site_url(); ?>/User/BookingForm/1" title="Buttons"><span>Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/User/BookingForm/2" title="Buttons"><span>Hotel requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/User/BookingForm/3" title="Buttons"><span>Bus/Train/Flight requests</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>
    <?php }  ?>

     

     <?php if($user_type==1 || $user_type==2 || $user_type==3) { ?>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-eye"></i>
            <span>Track My Bookings</span>
        </a>
        <div class="sidebar-submenu">
            
            <ul>
                <li><a href="<?php echo site_url(); ?>/User/trackCabRqstFrm/1" title="Buttons"><span>Track Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/User/trackHtlRqstFrm/1" title="Buttons"><span>Track Hotel requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/User/cabBookingForm" title="Buttons"><span>Track Bus/Trains/Flights</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>
    <?php } ?>

    <?php if($user_type==1 || $user_type==2 || $user_type==3) { ?>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
            <span>Approve/Reject Bookings</span>
        </a>
        <div class="sidebar-submenu">
            
            <ul>
                <li><a href="<?php echo site_url(); ?>/User/trackCabRqstFrm/2" title="Buttons"><span>Appr/Rjct Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/User/trackHtlRqstFrm/2" title="Buttons"><span>Appr/Rjct Hotel requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/User/trackBusRqstFrm/2" title="Buttons"><span>Appr/Rjct Bus requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/User/trackTrnRqstFrm/2" title="Buttons"><span>Appr/Rjct Train requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/User/trackFltRqstFrm/2" title="Buttons"><span>Appr/Rjct Flight requests</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>
    <?php } ?>

    <!-- functiional head Appprove/track bucket -->
    <?php if($user_type==4) { ?>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
            <span>Approve/Reject Bookings</span>
        </a>
        <div class="sidebar-submenu">
            
            <ul>
                <li><a href="<?php echo site_url(); ?>/Fhead/trackCabRqstFrm/2" title="Buttons"><span>Appr/Rjct Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/Fhead/trackHtlRqstFrm/2" title="Buttons"><span>Appr/Rjct Hotel requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Fhead/trackBusRqstFrm/2" title="Buttons"><span>Appr/Rjct Bus requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Fhead/trackTrnRqstFrm/2" title="Buttons"><span>Appr/Rjct Train requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Fhead/trackFltRqstFrm/2" title="Buttons"><span>Appr/Rjct Flight requests</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>

    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-eye"></i>
            <span>Track Approved Bookings</span>
        </a>
        <div class="sidebar-submenu">
            
            <ul>
                <li><a href="<?php echo site_url(); ?>/Fhead/trackCabRqstFrm/3" title="Buttons"><span>Track Approved Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/Fhead/trackHtlRqstFrm/3" title="Buttons"><span>Track Approved Hotel requests</span></a></li>
                 <li><a href="<?php echo site_url(); ?>/Fhead/trackBusRqstFrm/3" title="Buttons"><span>Track Approved Bus requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Fhead/trackTrnRqstFrm/3" title="Buttons"><span>Track Approved Train requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Fhead/trackFltRqstFrm/3" title="Buttons"><span>Track Approved Flight requests</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>
    <?php } ?>


    <?php if($user_type==1 || $user_type==2 || $user_type==3) { ?>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-eye"></i>
            <span>Track Approved Bookings</span>
        </a>
        <div class="sidebar-submenu">
            
            <ul>
                <li><a href="<?php echo site_url(); ?>/User/trackCabRqstFrm/3" title="Buttons"><span>Track Approved Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/User/trackHtlRqstFrm/3" title="Buttons"><span>Track Approved Hotel requests</span></a></li>
                 <li><a href="<?php echo site_url(); ?>/User/trackBusRqstFrm/3" title="Buttons"><span>Track Approved Bus requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/User/trackTrnRqstFrm/3" title="Buttons"><span>Track Approved Train requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/User/trackFltRqstFrm/3" title="Buttons"><span>Track Approved Flight requests</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>
    <?php } ?>

        <!-- Vendor Lead -->
        <?php if($user_type==9) { ?>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-megaphone"></i> 
            <span>Execute Pending Bookings</span>

        </a><span class="bs-badge badge-absolute float-right bg-red"><?php echo $tot_count_pndg; ?></span>
        <div class="sidebar-submenu">
            
            <ul>
                <li><a href="<?php echo site_url(); ?>/Vdol/pendCRqstFrm/1" title="Buttons"><span>Execute Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/Vdol/pendHRqstFrm/1" title="Buttons"><span>Execute Hotel requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Vdol/pendFRqstFrm/1" title="Buttons"><span>Execute Bus/Train/Flight</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>

     <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-eye"></i>
            <span>Track Executed Bookings</span>
        </a><span class="bs-badge badge-absolute float-right bg-green"><?php echo $tot_count_exe; ?></span>
        <div class="sidebar-submenu">
            
            <ul>
                <li><a href="<?php echo site_url(); ?>/Vdol/pendCRqstFrm/2" title="Buttons"><span>Track Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/Vdol/pendHRqstFrm/2" title="Buttons"><span>Track Hotel requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Vdol/pendFRqstFrm/2" title="Buttons"><span>Track Bus/Train/Flight</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>

    <?php } ?>
        <!-- Vendor Lead End -->


        <!-- Travel Desk -->
        <?php if($user_type==5) { ?>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
            <span>Edit / Delete Sp. Bookings</span>
        </a>
        <div class="sidebar-submenu">
            
            <ul>
                <li><a href="<?php echo site_url(); ?>/Tdesk/editCSRqstFrm" title="Buttons"><span>Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/Tdesk/editHSRqstFrm" title="Buttons"><span>Hotel requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Tdesk/editBSRqstFrm" title="Buttons"><span>Bus requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Tdesk/editTSRqstFrm" title="Buttons"><span>Train requests</span></a></li>
                <li><a href="<?php echo site_url();?>/Tdesk/editFSRqstFrm" title="Buttons"><span>Flight requests</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>


    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-megaphone"></i> 
            <span>Execute Pending Bookings</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
               <li><a href="<?php echo site_url(); ?>/Tdesk/pendCRqstFrm/1" title="Buttons"><span>Execute Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/Tdesk/pendHRqstFrm/1" title="Buttons"><span>Execute Hotel requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Tdesk/pendBRqstFrm/1" title="Buttons"><span>Execute Bus requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Tdesk/pendTRqstFrm/1" title="Buttons"><span>Execute Train requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Tdesk/pendFRqstFrm/1" title="Buttons"><span>Execute Flight requests</span></a></li>  
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>


    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-eye"></i>
            <span>Track Executed Bookings</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                <li><a href="<?php echo site_url(); ?>/Tdesk/pendCRqstFrm/2" title="Buttons"><span>Track Cab requests</span></a></li>
                <li><a href="<?php echo site_url();?>/Tdesk/pendHRqstFrm/2" title="Buttons"><span>Track Hotel requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Tdesk/pendBRqstFrm/2" title="Buttons"><span>Track Bus requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Tdesk/pendTRqstFrm/2" title="Buttons"><span>Track Train requests</span></a></li>
                <li><a href="<?php echo site_url(); ?>/Tdesk/pendFRqstFrm/2" title="Buttons"><span>Track Flight requests</span></a></li>
            </ul>
        </div><!-- .sidebar-submenu -->
    </li>


    <?php } } ?>



        <!-- Travel Desk End -->


    </ul><!-- #sidebar-menu -->


    </div>
</div>

<!-- SIDEbAr -->


</body>
</html>
