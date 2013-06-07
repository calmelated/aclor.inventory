var set_itemname_autocomplete;
var set_cpo_autocomplete;
var set_company_autocomplete;
var input_typeahead;

function add_cpocs_row(items){
    "use strict";

    var next  = parseInt($('#row_idx').val(), 10);
    var newtr =
        ' <tr id="cpocs_row_' + next + '">                                                           ' +
        '     <td><input type="text" name="all_qty_'      + next + '" class="cpo input-small"></td>  ' +
        '     <td><input type="text" name="pack_qty_'     + next + '" class="cpo input-small"></td>  ' +
        '     <td><input type="text" name="pallet_'       + next + '" class="cpo input-small"></td>  ' +
        '     <td><input type="text" name="item_num_'     + next + '" class="cpo input-small">       ' +
        '         <input type="hidden" name="item_desc_'  + next + '" class="cpo input-small"></td>  ' +
        '     <td><input type="text" name="cust_item_'    + next + '" class="cpo input-small"></td>  ' +
        '     <td><input type="text" name="net_weight_'   + next + '" class="cpo input-small"></td>  ' +
        '     <td><input type="text" name="gross_weight_' + next + '" class="cpo input-small"></td>  ' +
        '     <td><i class="icon-remove" onclick="remove_cpocs_row(' + next +  ');"></i></td>        ' +
        '     <td></td> ' +
        ' </tr>         ' ;

    //var newtrr = $(newtr);
    $('#cpocs_row_space').before(newtr);
    $('#row_idx').val(next + 1);
    $('#max_row_idx').val(next + 1);

    // set type ahead for item names
    set_itemname_autocomplete(items);
}

function set_cpo_autocomplete(items, companies) {
    "use strict";

    // set datepicker, the init value need to be reset again.
    $("input[name='ship_date']").datepicker();
    $("input[name='ship_date']").datepicker("option", "dateFormat", "yy-mm-dd");
    $("input[name='ship_date']").attr({'autocomplete': 'off'});
    $("input[name='due_date']").datepicker();
    $("input[name='due_date']").datepicker("option", "dateFormat", "yy-mm-dd");
    $("input[name='due_date']").attr({'autocomplete': 'off'});

    set_company_autocomplete(companies);
    set_itemname_autocomplete(items);
}

function set_company_autocomplete(companies) {
    "use strict";

    // set type ahead for company field
    var complist = ["vender", "billing", "factory", "ship"];
    $.each(complist ,function(idx, comp) {
        input_typeahead(comp + "_name", companies);
        $("input[name='" + comp + "_name']").change(function () {
            $.ajax({
                type: "GET",
                url: 'comp/get_comp_info/' + $(this).val(),
                cache: false,
                data: '',
                success: function(data){
                    var rst = JSON.parse(data);
                    $("input[name='" + comp + "_tel']").val(rst.tel);
                    $("input[name='" + comp + "_address']").val(rst.address);
                    $("input[name='" + comp + "_city']").val(rst.city);
                }
            });
        });
    });
}

function set_itemname_autocomplete(items) {
    "use strict";

    // set type ahead for item names
    $("input[name^=item_num]").each(function(idx){
        var key  = $(this)[0].name; // item_num_x
        var desc = key.replace("num", "desc"); // item_num_x -> item_desc_x
        input_typeahead(key, items);
        $(this).change(function () {
            $.ajax({
                type: "GET",
                url: 'item/getdesc/' + $(this).val(),
                cache: false,
                data: '',
                success: function(data){
                    var rst = JSON.parse(data);
                    $("input[name=" + desc + "]").val(rst.desc);
                }
            });
        });
    });
}

function remove_cpocs_row(row) {
    "use strict";

    var cols = ["all_qty", "pack_qty", "pallet", "item_num", "cust_item", "net_weight", "gross_weight"];
    $.each(cols, function(idx, col) {
        $("input[name^=" + col + "_" + row + "]").val("");
    });

    var cur = parseInt($('#row_idx').val(), 10);
    if(cur > 1) {
        $('#row_idx').val(cur - 1);
        $("#cpocs_row_" + row).remove();
    } else {
        $('#myModal').modal('show');
    }
}
