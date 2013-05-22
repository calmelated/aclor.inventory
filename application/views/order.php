<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="list_table">
        <thead>
            <tr>
                <th>Item #</th>
                <th>Start</th>
                <th>Receipt</th>
                <th>Reqisition</th>
                <th>Adjust</th>
                <th>End</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($orders as $order) { ?>
                <tr>
                    <td><?=$order['item_num'];?></td>
                    <td>
                        <?=$order['init'];?> <?=$order['unit'];?><br>
                        <?=$order['init1'];?> <?=$order['unit1'];?>
                    </td>
                    <td>
                        <a href="inodr/item_time/<?=$order['item_num'];?>/<?=$req_from;?>/<?=$req_to;?>" target="_blank">
                            <?=$order['stockin'];?> <?=$order['unit'];?><br>
                            <?=$order['stockin1'];?> <?=$order['unit1'];?>
                        </a>
                    </td>
                    <td>
                        <a href="outodr/item_time/<?=$order['item_num'];?>/<?=$req_from;?>/<?=$req_to;?>" target="_blank">
                            <?=$order['stockout'];?> <?=$order['unit'];?><br>
                            <?=$order['stockout1'];?> <?=$order['unit1'];?>
                        </a>
                    </td>
                    <td>
                        <a href="adjodr/item_time/<?=$order['item_num'];?>/<?=$req_from;?>/<?=$req_to;?>" target="_blank">
                            <?=$order['stockadj'];?> <?=$order['unit'];?><br>
                            <?=$order['stockadj1'];?> <?=$order['unit1'];?>
                        </a>
                    </td>
                    <td>
                        <?=$order['fin'];?> <?=$order['unit'];?><br>
                        <?=$order['fin1'];?> <?=$order['unit1'];?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div> <!-- /container -->

<script>
/* Table initialisation */
$(document).ready(function() {
    var oTable = $('#list_table').dataTable( {
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        "sPaginationType": "bootstrap",
        //"bProcessing": true,
        //"bServerSide": true,
        //"aaSorting": [[6, "desc"]],
        "iDisplayLength": 10,
        "aLengthMenu": [[10, 25, 50, 100, Math.pow(2,64)], [10, 25, 50, 100, 'All']],
        //"sAjaxSource": 'outodr/datatable',
        //"oLanguage": {
        //    "sLengthMenu": "_MENU_ records per page"
        //},
        //"fnInitComplete": function() {
            //oTable.fnAdjustColumnSizing();
        //},
        //'fnServerData': function(sSource, aoData, fnCallback) {
        //    aoData.push({name: '<?=$this->security->get_csrf_token_name()?>', value : '<?=$this->security->get_csrf_hash()?>'});
        //    $.ajax ({
        //        'dataType': 'json',
        //        'type'    : 'POST',
        //        'url'     : sSource,
        //        'data'    : aoData,
        //        'success' : fnCallback
        //    });
        //}
    });
});
</script>
