function form_validate(form) {
    $(document).ready(function() {
        $(form).validate({
            rules: {
                adj_date:   { required: true, minlength:    8, maxlength: 10, },
                rcv_date:   { required: true, minlength:    8, maxlength: 10, },
                req_date:   { required: true, minlength:    8, maxlength: 10, },
                item_num:   { required: true, minlength:    2, maxlength: 16, },
                item_num_0: { required: true, minlength:    2, maxlength: 16, },
                unit:       { required: true, },
                unit_0:     { required: true, },
                qty1:       { number  : true, },
                owner:      { required: true, },
                vendor:     { required: true, },
                qty:        { required: true, number   : true, },
                qty_0:      { required: true, number   : true, },
                po_num:     { required: true, },
                wo_num:     { required: true, },
                fin_prod:   { required: true, },
                raw_num:    { required: true, },
                prod_approved: { required: true, },
                wh_approved:   { required: true, },
                import_num: { minlength: 2  , maxlength:   16, },
            },
            onkeyup: false,
            onblur: true
        });
    });
}
