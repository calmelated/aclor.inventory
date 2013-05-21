<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="list_table">
        <thead>
            <tr>
                <th class="span2">Adjust Date</th>
                <th class="span2">Item #</th>
                <th class="span2">Reason</th>
                <th class="span1">Qty</th>
                <th class="span1">Unit</th>
                <th class="span1">Qty1</th>
                <th class="span1">Unit1</th>
                <th class="span3"></th>
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
        "aaSorting": [[7, "desc"]],
        "aoColumns": [
            /* Date */     null,
            /* Item */     null,
            /* Reason */   null,
            /* Qty */      null,
            /* Unit */     {"bVisible": false},
            /* Qty1 */     null,
            /* Unit1 */    {"bVisible": false},
            /* Action */   null
        ],
        "iDisplayLength": 10,
        "aLengthMenu": [[10, 25, 50, 100, Math.pow(2,64)], [10, 25, 50, 100, 'All']],
        "sAjaxSource": 'adjodr/datatable',
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
