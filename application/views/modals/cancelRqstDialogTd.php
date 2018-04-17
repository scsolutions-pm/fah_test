                    <form class="form-horizontal bordered-row" id="demo-form" method="POST" action="<?php echo site_url('Tdesk/cancelRqst'); ?>">
                    <input type="hidden" name="rqst_id" value="<?php echo $rqst_id; ?>">
                    <input type="hidden" name="rqst_type" value="<?php echo $rqst_type; ?>">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Confirm Cancel Request ?</h4>
                                </div>
                                
                                <div class="modal-body">
                                    <p>Are you sure you want to cancel this booking ? :<strong><?php echo $rqst_id; ?>
                                    </strong></p>
                                </div>
                                
                                <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="refresh_cancel_data();">No</button>
                            <button type="submit" class="btn btn-danger">Yes</button>
                                </div>

                   </form>
