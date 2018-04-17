<?php 
if( !empty($request_list) && $request_list->num_rows() > 0)
{
    foreach($request_list->result() as $row)
    {
?>
</br>
     <tr class="gradeX">
    <td><span class="label bg-gradient-8">
    <a href="<?php echo site_url('User/generateModalFdata/'.$row->f_request_id); ?>" data-toggle="modal" data-target="#f_rqst_Modal">
    <font Color="white"> <?php  echo $row->f_request_id; ?></font>
    </a></span></td>    
    <td><?php echo $row->from_loc; ?></td> 
    <td><?php echo $row->to_loc; ?></td> 
    <td><?php echo $row->journey_date; ?></td> 
    <td><?php echo $row->spl_app; ?></td> 
        <td class="actions">
            <a href="<?php echo site_url('User_TD/deleteVehicleRequest/'.$row->f_request_id);?>/cc"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
        </td>
    </tr>
<?php }} ?>


    



                                       