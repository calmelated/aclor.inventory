<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-striped table-bordered table-condensed zebra-strip" id="list_table">
        <thead>
            <tr>
                <th class="span1">Username</th>
                <th class="span2">Password</th>
                <th class="span1">Auth</th>
                <th class="span1">
                    <a href="user/add" class="btn btn-primary btn-mini">New User</a>
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
        "aaSorting": [[3, "desc"]],
        "iDisplayLength": 10,
        "aLengthMenu": [[10, 25, 50, 100, Math.pow(2,64)], [10, 25, 50, 100, 'All']],
        "sAjaxSource": 'user/datatable',
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
