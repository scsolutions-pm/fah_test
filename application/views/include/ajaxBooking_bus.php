<?php 
if( !empty($request_list) && $request_list->num_rows() > 0)
{
    foreach($request_list->result() as $row)
    {
?>
</br>
     <tr class="gradeX">
    <td><span class="label bg-gradient-8">
    <a href="<?php echo site_url('User/generateModalFdata/'.$row->b_request_id); ?>" data-toggle="modal" data-target="#b_rqst_Modal">
    <font Color="white"> <?php  echo $row->b_request_id; ?></font>
    </a></span></td>    
    <td><?php echo getStatName($row->from_state_id); ?></td> 
    <td><?php echo $row->from_city_id; ?></td> 
        <td class="actions">
            <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->b_request_id);?>/cc"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
        </td>
    </tr>
<?php }} ?>


    



                                       