<div class="page-header">
   <h3 style="text-indent: 3em;"> Stock Adjust Request</h3>
</div>

<?php
    if($act == "detail_edit") {
        $adjodr = $adjodrs[0];
        echo form_open('adjodr/id_edit/'.$adjodr['id'], array('id' => 'adjust_form', 'class' => 'form-horizontal'));
    } else if($act == "detail_add"){
        echo form_open('adjodr/add', array('id' => 'adjust_form', 'class' => 'form-horizontal'));
    } else {
        $adjodr = $adjodrs[0];
        echo form_open('', array('id' => 'adjust_form', 'class' => 'form-horizontal'));
    }
?>

    <?php if($act == "detail") { ?>
        <div class="control-group">
            <label class="control-label">Create Date</label>
            <div class="controls">
                <label><?php if(isset($adjodr['cre_date'])) echo $adjodr['cre_date'];?></label>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Modifier</label>
            <div class="controls">
                <label><?php if(isset($adjodr['modifier'])) echo $adjodr['modifier'];?></label>
            </div>
        </div>
    <?php } ?>

    <div class="control-group">
        <label class="control-label">Adjust Date</label>
        <div class="controls">
            <input type="text" name="adj_date" class="adjodr" placeholder="Format: 2013-01-01" value="<?php if(isset($adjodr['adj_date'])) echo $adjodr['adj_date'];?>">
            <?php echo '<div style="color:red">'.form_error('adj_date').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Item #</label>
        <div class="controls">
            <input type="text" name="item_num" class="adjodr" value="<?php if(isset($adjodr['item_num'])) echo $adjodr['item_num']?>" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('item_num').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Qty</label>
        <div class="controls">
            <input type="text" name="qty"  class="input-small adjodr" value="<?php if(isset($adjodr['qty']))  echo $adjodr['qty']?>">
            <input type="text" name="unit" class="input-small adjodr" value="<?php if(isset($adjodr['unit'])) echo $adjodr['unit']?>" placeholder="Unit" data-provide="typeahead">
            <span class="text-info">More than expectation: Qty &gt; 0, Less than expectation; Qty &lt; 0</span>
            <?php echo '<div style="color:red">'.form_error('qty').'</div>';?>
            <?php echo '<div style="color:red">'.form_error('unit').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Qty1</label>
        <div class="controls">
            <input type="text" name="qty1"  class="input-small adjodr" value="<?php if(isset($adjodr['qty1']))  echo $adjodr['qty1']?>">
            <input type="text" name="unit1" class="input-small adjodr" value="<?php if(isset($adjodr['unit1'])) echo $adjodr['unit1']?>" placeholder="Unit" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('qty1').'</div>';?>
            <?php echo '<div style="color:red">'.form_error('unit1').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Reason</label>
        <div class="controls">
            <input type="text" name="reason" class="adjodr" value="<?php if(isset($adjodr['reason'])) echo $adjodr['reason']?>" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('reason').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Approved By</label>
        <div class="controls">
            <input type="text" name="approved" class="adjodr" value="<?php if(isset($adjodr['approved'])) echo $adjodr['approved']?>">
            <?php echo '<div style="color:red">'.form_error('approved').'</div>';?>
        </div>
    </div>

    <div class="form-actions">
        <input type="hidden" name="cid" value="<?php if(isset($adjodr['cid'])) echo $adjodr['cid'];?>">
        <input type="hidden" name="add_next" value="0">

        <?php if($act == "detail_add") { ?>
            <button type="submit" class="btn btn-primary" onclick='javascript:$("input[name=add_next]").val(1);'>
                <i class="icon-ok icon-white"></i> Save &amp; Next
            </button>
            <button type="submit" class="btn btn-info">
                <i class="icon-ok icon-white"></i> Save
            </button>
            <button type="reset" class="btn btn-link">Cancel</button>
        <?php } else if($act == "detail_edit") { ?>
            <button type="submit" class="btn btn-info">
                <i class="icon-ok icon-white"></i> Save
            </button>
            <button type="reset" class="btn btn-link">Cancel</button>
        <?php } else { ?>
            <a href="adjodr/add" class="btn btn-primary">
                <i class="icon-ok icon-white"></i> Create Next
            </a>
        <?php } ?>

        <?php if(($this->session->userdata['user_auth'] > 1) &&   /* auth:2 admin */
                 ($act == "detail" || $act == "detail_edit")) { ?>
            <a href="adjodr/id_del/<?=$adjodr['id']; ?>" class="btn btn-danger pull-right">
                <i class="icon-trash icon-white"></i> Delete
            </a>
        <?php } ?>

        <?php if(($this->session->userdata['user_auth'] > 1) &&  /* auth:2 admin */
                 ($act == "detail")) { ?>
            <a href="adjodr/id_edit/<?=$adjodr['id']; ?>" class="btn btn-info pull-right">
                <i class="icon-edit icon-white"></i> Edit
            </a>
        <?php } ?>
    </div>

</form>

<script src="script/scripts.js"></script>
<script>
    $(document).ready(function() {
        <?php if ($act == "detail") { ?>
            // set some field can't editable
            $("input[type='text']").each(function() {
                $(".adjodr").addClass("uneditable-input");
            }).attr({readonly:true});

            $("input[type=submit]").click(function(event){
                return false;
            });
        <?php } else if ($act == "detail_add") { ?>
            // clear exist value
            $("input[type='text']").each(function() {
                $(".adjodr").attr({value:""});
            });

            // set datepicker
            $("input[name='adj_date']").datepicker();
            $("input[name='adj_date']").datepicker( "option", "dateFormat", "yy-mm-dd");
            $("input[name='adj_date']").attr({'autocomplete': 'off'});

            // set type ahead for some field
            var items = '<?=$items;?>';
            var units = '<?=$units;?>';

            $("input[name='item_num']").attr({'autocomplete': 'off', 'data-source': items});
            $("input[name='unit']").attr({'autocomplete': 'off', 'data-source': units});
            $("input[name='unit1']").attr({'autocomplete': 'off', 'data-source': units});
            $("input[name='reason']").attr({'autocomplete': 'off', 'data-source': '["surplus","loss","scrapped parts","order cancel"]'});

            form_validate("#adjust_form");
        <?php } else if ($act == "detail_edit") { ?>
            // set datepicker, the init value need to be reset again.
            $("input[name='adj_date']").datepicker();
            $("input[name='adj_date']").datepicker("option", "dateFormat", "yy-mm-dd");
            $("input[name='adj_date']").val("<?php if(isset($adjodr['adj_date'])) echo $adjodr['adj_date'];?>");
            $("input[name='adj_date']").attr({'autocomplete': 'off'});

            // set type ahead for some field
            var items = '<?=$items;?>';
            var units = '<?=$units;?>';
            var reasons = "['surplus', 'loss', 'scrapped parts', 'cancel the orders']";

            $("input[name='item_num']").attr({'autocomplete': 'off', 'data-source': items});
            $("input[name='unit']").attr({'autocomplete': 'off', 'data-source': units});
            $("input[name='unit1']").attr({'autocomplete': 'off', 'data-source': units});
            $("input[name='reason']").attr({'autocomplete': 'off', 'data-source': '["surplus","loss","scrapped parts","order cancel"]'});

            form_validate("#adjust_form");
        <?php } ?>
    });
</script>