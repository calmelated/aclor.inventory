<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="list_table">
        <thead>
            <tr>
                <th>Receive Date</th>
                <th>Item #</th>
                <th>PO #</th>
                <th>Vendor</th>
                <th>Qty</th>
                <th>Qty1</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($inodrs as $inodr) { ?>
                <tr>
                    <td class="span2"><?=$inodr['rcv_date'];?></td>
                    <td class="span2"><?=$inodr['item_num'];?></td>
                    <td class="span2"><?=$inodr['po_num'];?></td>
                    <td class="span3"><?=$inodr['vendor'];?></td>
                    <td class="span1"><?=$inodr['qty'];?> <?=$inodr['unit'];?></td>
                    <td class="span1"><?=$inodr['qty1'];?> <?=$inodr['unit1'];?></td>
                    <td class="span3">
                        <a href="inodr/id/<?=$inodr['id'];?>" class="btn btn-primary">View</a>
                        <?php if ($this->session->userdata['user_auth'] > 1) {  /* auth:admin */ ?>
                            <a href="inodr/id_edit/<?=$inodr['id'];?>" class="btn btn-edit">Edit</a>
                            <a href="inodr/id_del/<?=$inodr['id']; ?>" class="btn btn-danger">Delete</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div> <!-- /container -->
