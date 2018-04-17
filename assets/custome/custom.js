// JavaScript Document

/******CAB BOOKING Valodations******/
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
                                             $("#pick_date").val('');
											 $("#pick_time").val('');
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