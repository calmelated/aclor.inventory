<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="list_table">
        <thead>
            <tr>
                <th>Req. Date</th>
                <th>Work Order #</th>
                <th>Fin Product #</th>
                <th>Raw Material #</th>
                <th>Approved<br>(Warehouse)</th>
                <th>Approved<br>(Production)</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($outodrs as $outodr) { ?>
                <tr>
                    <td class="span2"><?=$outodr['req_date'];?></td>
                    <td class="span2"><?=$outodr['wo_num'];?></td>
                    <td class="span2"><?=$outodr['fin_prod'];?></td>
                    <td class="span2"><?=$outodr['raw_num'];?></td>
                    <td class="span1"><?=$outodr['prod_approved'];?></td>
                    <td class="span1"><?=$outodr['wh_approved'];?></td>
                    <td class="span3">
                        <a href="outodr/id/<?=$outodr['id'];?>" class="btn btn-primary">View</a>
                        <?php if ($this->session->userdata['user_auth'] > 1) {  /* auth:admin */ ?>
                            <a href="outodr/id_edit/<?=$outodr['id'];?>" class="btn btn-edit">Edit</a>
                            <a href="outodr/id_del/<?=$outodr['id']; ?>" class="btn btn-danger">Delete</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div> <!-- /container -->
