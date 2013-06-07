
<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-striped table-bordered table-condensed zebra-strip" id="list_table">
        <thead>
            <tr>
                <th class="span1">Due Date</th>
                <th class="span1">Ship Date</th>
                <th class="span1">Customer</th>
                <th class="span1">Customer PO</th>
                <th class="span2">
                    <a href="cpo/add" class="btn btn-primary btn-mini">New</a>
                </th>
            </tr>
        </thead>

    </table>
</div>

<script>
/* Table initialisation */
$(document).ready(function() {
    var oTable = $('#list_table').dataTable( {
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        "sPaginationType": "bootstrap",
        "bProcessing": true,
        "bServerSide": true,
        "aaSorting": [[4, "desc"]],
        "iDisplayLength": 10,
        "aLengthMenu": [[10, 25, 50, 100, Math.pow(2,64)], [10, 25, 50, 100, 'All']],
        "sAjaxSource": 'cpo/datatable',
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
