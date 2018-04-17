<?php 
if( !empty($request_list) && $request_list->num_rows() > 0)
{
    foreach($request_list->result() as $row)
    {
?>
     <tr class="gradeX">
        <td><span class="label bg-gradient-7">
        <a href="<?php echo site_url('User/generateModalCdata/'.$row->c_request_id); ?>" data-toggle="modal" data-target="#c_rqst_Modal">    
        <font color="white"><?php  echo $row->c_request_id; ?></font></a></span></td>
    <td><?php echo getStatName($row->state_id); ?></td> 
    <td><?php echo $row->city_id; ?></td> 
    <td><?php if($row->spl_app==1) {echo"NO";}else {echo "YES";}?></td> 
        <td class="actions">
            <a href="<?php echo site_url('User/deleteVehicleRequest/'.$row->c_request_id);?>/aa"  onclick="return confirm('Are you sure you want to delete this request?');" tabindex="0" role="button" ><span class="label bg-red">Delete</span></a>
        </td>
    </tr>
<?php } } ?>


    



                                       