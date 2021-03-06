<div class="page-header">
   <h3 style="text-indent: 3em;"> Edit Company List</h3>
</div>

<?php
    if($act == "detail_edit") {
        $comp = $comps[0];
        echo form_open('comp/edit/'.$comp['id'], array('id' => 'comp_form', 'class' => 'form-horizontal'));
    } else if($act == "detail_add"){
        echo form_open('comp/add', array('id' => 'comp_form', 'class' => 'form-horizontal'));
    }
?>

    <div class="control-group">
        <label class="control-label">Company Name<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="name" class="comp" value="<?php if(isset($comp['name'])) echo $comp['name']?>">
            <?php echo '<div style="color:red">'.form_error('name').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Contact Person<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="contact" class="comp" value="<?php if(isset($comp['contact'])) echo $comp['contact']?>">
            <?php echo '<div style="color:red">'.form_error('contact').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Email<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="email" class="comp" value="<?php if(isset($comp['email'])) echo $comp['email']?>">
            <?php echo '<div style="color:red">'.form_error('email').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Tel.<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="tel" class="comp" value="<?php if(isset($comp['tel'])) echo $comp['tel']?>">
            <?php echo '<div style="color:red">'.form_error('tel').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Fax.</label>
        <div class="controls">
            <input type="text" name="fax" class="comp" value="<?php if(isset($comp['fax'])) echo $comp['fax']?>">
            <?php echo '<div style="color:red">'.form_error('fax').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Address<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="address" class="comp input-xxlarge" value="<?php if(isset($comp['address'])) echo $comp['address']?>">
            <?php echo '<div style="color:red">'.form_error('address').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">City/State<span class="star"> * </span></label>
        <div class="controls">
            <input type="text" name="city" class="comp input-xxlarge" value="<?php if(isset($comp['city'])) echo $comp['city']?>">
            <?php echo '<div style="color:red">'.form_error('city').'</div>';?>
        </div>
    </div>

    <?php
        $data['act']    = $act;
        $data['add']    = 'comp/add';
        $data['remove'] = (isset($comp['id'] )) ? 'comp/remove/' . $comp['id'] : '';
        $data['edit']   = (isset($comp['id'] )) ? 'comp/edit/'   . $comp['id'] : '';
        $data['cid']    = (isset($comp['cid'])) ? $comp['cid']                 : -1;
        $this->load->view('formact', $data);
    ?>

</form>

<script src="script/scripts.js"></script>
<script>
    $(document).ready(function() {
        <?php if ($act == "detail_add") { ?>
            // clear exist value
            $("input[type='text']").each(function() {
                $(".comp").attr({value:""});
            });
        <?php } ?>

        form_validate("#comp_form");
    });
</script>
