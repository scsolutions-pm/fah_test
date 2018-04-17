<?php 
if( !empty($request_list) && $request_list->num_rows() > 0)
{
    foreach($request_list->result() as $row)
    {
?>
</br>
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
<?php }} ?>


    



                                       