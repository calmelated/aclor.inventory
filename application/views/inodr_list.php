<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-striped table-bordered table-condensed zebra-strip" id="list_table">
        <thead>
            <tr>
                <th class="span2">Receive Date</th>
                <th class="span2">Item #</th>
                <th class="span2">PO #</th>
                <th class="span3">Vendor</th>
                <th class="span1">Qty</th>
                <th class="span1">Unit</th>
                <th class="span1">Qty1</th>
                <th class="span1">Unit1</th>
                <th class="span2">
                    <?php if ($this->session->userdata['user_auth'] > 0) {  // auth:operator,manager,admin ?>
                        <a href="inodr/add" class="btn btn-primary btn-mini">New</a>
                    <?php } ?>
                </th>
            </tr>
        </thead>
    </table>
</div> <!-- /container -->

<script>
/* Table initialisation */
$(document).ready(function() {
    var oTable = $('#list_table').dataTable( {
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        "sPaginationType": "bootstrap",
        "bProcessing": true,
        "bServerSide": true,
        "aaSorting": [[8, "desc"]],
        "aoColumns": [
            /* Date */     null,
            /* Item */     null,
            /* PO */       null,
            /* Vendor */   null,
            /* Qty */      null,
            /* Unit */     {"bVisible": false},
            /* Qty1 */     null,
            /* Unit1 */    {"bVisible": false},
            /* Action */   null,
        ],
        "iDisplayLength": 10,
        "aLengthMenu": [[10, 25, 50, 100, Math.pow(2,64)], [10, 25, 50, 100, 'All']],
        "sAjaxSource": 'inodr/datatable',
        "oLanguage": {
            "sLengthMenu": "_MENU_ records per page"
        },
        //"fnInitComplete": function() {
            //oTable.fnAdjustColumnSizing();
        //},
        'fnServerData': function(sSource, aoData, fnCallback) {
            aoData.push({name: '<?=$this->security->get_csrf_token_name()?>', value : '<?=$this->security->get_csrf_hash()?>'});
            $.ajax ({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
            });
        }
    });
});
</script>
