<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="list_table">
        <thead>
            <tr>
                <th>Adjust Date</th>
                <th>Item #</th>
                <th>Reason</th>
                <th>Qty</th>
                <th>Qty1</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($adjodrs as $adjodr) { ?>
                <tr>
                    <td class="span2"><?=$adjodr['adj_date'];?></td>
                    <td class="span2"><?=$adjodr['item_num'];?></td>
                    <td class="span2"><?=$adjodr['reason'];?></td>
                    <td class="span1"><?=$adjodr['qty'];?> <?=$adjodr['unit'];?></td>
                    <td class="span1"><?=$adjodr['qty1'];?> <?=$adjodr['unit1'];?></td>
                    <td class="span3">
                        <a href="adjodr/id/<?=$adjodr['id'];?>" class="btn btn-primary">View</a>
                        <?php if ($this->session->userdata['user_auth'] > 1) {  /* auth:admin */ ?>
                            <a href="adjodr/id_edit/<?=$adjodr['id'];?>" class="btn btn-edit">Edit</a>
                            <a href="adjodr/id_del/<?=$adjodr['id']; ?>" class="btn btn-danger">Delete</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div> <!-- /container -->
