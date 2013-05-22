function form_validate(form) {
    'use strict';
    $(document).ready(function() {
        $(form).validate({
            rules: {
                adj_date:   { required: true, minlength:    8, maxlength: 10 },
                rcv_date:   { required: true, minlength:    8, maxlength: 10 },
                req_date:   { required: true, minlength:    8, maxlength: 10 },
                item_num:   { required: true, minlength:    2, maxlength: 16 },
                item_num_0: { required: true, minlength:    2, maxlength: 16 },
                unit:       { required: true },
                unit_0:     { required: true },
                qty1:       { number  : true },
                owner:      { required: true },
                vendor:     { required: true },
                qty:        { required: true, number   : true },
                qty_0:      { required: true, number   : true },
                po_num:     { required: true },
                wo_num:     { required: true },
                fin_prod:   { required: true },
                raw_num:    { required: true },
                prod_approved: { required: true },
                wh_approved:   { required: true },
                import_num: { minlength: 2  , maxlength:   16 }
            },
            onkeyup: false,
            onblur: true
        });
    });
}

function input_typeahead(field, ahead_list) {
    'use strict';
    //console.log(ahead_list);
    $(document).ready(function() {
        var input = $("input[name='" + field + "']");
        input.attr({'autocomplete': 'off'});
        input.typeahead({
            "source": ahead_list,
            //match any item
            matcher: function(item) {
                if (this.query === '*') {
                    return true;
                } else {
                    return item.indexOf(this.query) >= 0;
                }
            },
            //avoid highlightning of "*"
            highlighter: function(item) {
                return "<div>" + item + "</div>";
            }
        });

        input.focus(function(){
            input.val('*');
            input.typeahead('lookup');
            input.val('');
        });
    });
}
