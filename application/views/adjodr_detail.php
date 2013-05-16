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
        <label class="control-label">Adjust Date<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="adj_date" class="adjodr" placeholder="Format: 2013-01-01" value="<?php if(isset($adjodr['adj_date'])) echo $adjodr['adj_date'];?>">
            <?php echo '<div style="color:red">'.form_error('adj_date').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Item #<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="item_num" class="adjodr" value="<?php if(isset($adjodr['item_num'])) echo $adjodr['item_num']?>" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('item_num').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Qty<span class="star"> * </span></label>
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
        <label class="control-label">Reason<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="reason" class="adjodr" value="<?php if(isset($adjodr['reason'])) echo $adjodr['reason']?>" data-provide="typeahead">
            <?php echo '<div style="color:red">'.form_error('reason').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Approved By<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="approved" class="adjodr" value="<?php if(isset($adjodr['approved'])) echo $adjodr['approved']?>">
            <?php echo '<div style="color:red">'.form_error('approved').'</div>';?>
        </div>
    </div>

    <?php
        $data['act']    = $act;
        $data['add']    = 'adjodr/add';
        $data['remove'] = (isset($adjodr['id']))  ? 'adjodr/id_del/'  . $adjodr['id'] : '';
        $data['edit']   = (isset($adjodr['id']))  ? 'adjodr/id_edit/' . $adjodr['id'] : '';
        $data['cid']    = (isset($adjodr['cid'])) ? $adjodr['cid']                    : -1;
        $this->load->view('formact', $data);
    ?>

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
        <?php } else { ?>
            // set datepicker
            $("input[name='adj_date']").datepicker();
            $("input[name='adj_date']").datepicker( "option", "dateFormat", "yy-mm-dd");
            $("input[name='adj_date']").attr({'autocomplete': 'off'});

            <?php if ($act == "detail_add") { ?>
                // clear exist value
                $("input[type='text']").each(function() {
                    $(".adjodr").attr({value:""});
                });
            <?php } else if ($act == "detail_edit") { ?>
                $("input[name='adj_date']").val("<?php if(isset($adjodr['adj_date'])) echo $adjodr['adj_date'];?>");
            <?php } ?>

            // set type ahead for some field
            var items = <?=$items;?>;
            var units = <?=$units;?>;
            var reasons = ["Surplus", "Loss", "Scrapped parts", "Order cancel"];

            input_typeahead("item_num", items);
            input_typeahead("unit", units);
            input_typeahead("unit1", units);
            input_typeahead("reason", reasons);

            form_validate("#adjust_form");
        <?php } ?>
    });
</script>
