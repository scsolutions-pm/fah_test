                    <div class="modal-header">

                        <h3 class="modal-title custom-font"><font class="text-blue"><strong>Bus  Request Id : </strong>  <?php echo $b_request_id; ?></font> </h3>

                    </div>

                    <div class="modal-body">

                        <p>
							 
                            <?php if (!empty($modal_result) ) { ?>

                            <table border="0" > 

                                <tr> 
                                <td style="padding : 5px;" width="270"><font class="text-darkgray"><b>Generated by</b>    :    </font><font class="text-slategray"><?php echo $modal_result->generated_by; ?></font></td><td style="padding : 5px;" width="270"><font class="text-darkgray"><b>Request generated on</b>    :    </font><font class="text-slategray"><?php echo $modal_result->date_time_request; ?></font></td>  </tr>

                                <tr> 
                                <td style="padding : 5px;" width="350"><font class="text-darkgray"><b>Boarding State/ Drop State</b>    :    </font><font class="text-slategray">
                                       <?php echo getStatName($modal_result->from_state_id); ?> / <?php echo getStatName($modal_result->to_state_id); ?>
                                       </font></td> </tr>
                                <tr><td style="padding : 5px;" width="270"><font class="text-darkgray"><b>Boarding City /Drop City</b>    :    </font><font class="text-slategray"><?php echo $modal_result->from_city_id; ?>/ <?php echo $modal_result->to_city_id; ?></font></td></tr>

                                <tr> <td style="padding : 5px;" width="270"><font class="text-darkgray"><b>Date</b>    :    </font><font class="text-slategray"><?php echo $modal_result->journey_date; ?></font></td> <td style="padding : 5px;" width="270"><font class="text-darkgray"><b>Time</b>    :    </font><font class="text-slategray"><?php echo $modal_result->from_time; ?></font></td></tr>

  <tr> <td style="padding : 5px;" width="270"><font class="text-darkgray"><b>Bus type</b>    :    </font><font class="text-slategray"><?php echo $modal_result->type_title; ?></font></td> </tr>
 
                                <tr> <td style="padding : 5px;" width="270"><font class="text-darkgray"><b>Status</b>    :    </font><font class="text-success"><?php echo $modal_result->status_data; ?></font></td></tr>

                                <?php if(!empty($modal_result->guest_name)){ ?>
                                <tr> <td style="padding : 5px;" width="270"><font class="text-darkgray"><b>Booking for Guest</b>    :    </font><font class="text-success">YES</font></td><td style="padding : 5px;" width="270"><b>Guest Name</b>    :    <?php echo $modal_result->guest_name; ?></td></tr>
                                 <tr> <td style="padding : 5px;" width="270"><b>Guest Mob.</b>    :    <?php echo $modal_result->guest_mob; ?></td><td style="padding : 5px;" width="270"><b>Guest Email</b>    :   <?php echo $modal_result->guest_email; ?></td></tr>
                                 <?php } ?>

                                 <?php if(!empty($modal_result->spl_app) && $modal_result->spl_app==2){ ?>
                                <tr> <td style="padding : 5px;" width="270"><font class="text-darkgray"><b>Is any special request ?</b>    :    </font><font class="text-success">YES</font></td></tr>
                                 <tr> <td style="padding : 5px;" width="540"><b>Special details</b>    :    <?php echo $modal_result->spl_app_dtls; ?></td></tr>
                                 <?php } ?>

                            </table> <?php  } ?>



                        </p>

                        

                    </div>

                    <div class="modal-footer">
                    <button class="btn btn-danger"  onclick="refresh_htl_data()" data-dismiss="modal">Close</button>
                    </div>

             

        