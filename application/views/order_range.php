<div class="page-header">
   <h3 style="text-indent: 3em;"> Stock Period </h3>
</div>

<?php echo form_open('order', array('id' => 'receipt_form', 'class' => 'form-horizontal')); ?>
    <div class="control-group">
        <label class="control-label">Date<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="from" class="input-small" placeholder="From">
            <input type="text" name="to"   class="input-small" placeholder="To">
            <?php echo '<div style="color:red">'.form_error('from').'</div>';?>
            <?php echo '<div style="color:red">'.form_error('to').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Item #</label>
        <div class="controls">
            <input type="text" name="item_num" placeholder='Empty for All items' data-provide="typeahead">
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">
            <i class="icon-ok icon-white"></i> Submit
        </button>
    </div>

</form>

<script>
    $(document).ready(function() {
        $("input[name='from']").datepicker();
        $("input[name='from']").datepicker("option", "dateFormat", "yy-mm-dd");

        $("input[name='to']").datepicker();
        $("input[name='to']").datepicker("option", "dateFormat", "yy-mm-dd");

        var items = '<?=$items;?>';
        $("input[name='item_num']").attr({'autocomplete': 'off', 'data-source': items});
    });
</script>
