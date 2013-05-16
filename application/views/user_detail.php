<div class="page-header">
   <h3 style="text-indent: 3em;"> Add User</h3>
</div>

<?php echo form_open('user/add', array('id' => 'user_form', 'class' => 'form-horizontal')); ?>
    <div class="control-group">
        <label class="control-label">Username</label>
        <div class="controls">
            <input type="text" name="username" autocomplete="off">
            <?php echo '<div style="color:red">'.form_error('username').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Password</label>
        <div class="controls">
            <input type="password" name="password" autocomplete="off">
            <?php echo '<div style="color:red">'.form_error('password').'</div>';?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Authentication</label>
        <div class="controls">
            <select name="auth" class="input-medium">
              <option value="0">Read Only</option>
              <option value="1">Operator</option>
              <option value="2">Manager</option>
              <option value="3">Admin</option>
            </select>
            <?php echo '<div style="color:red">'.form_error('auth').'</div>';?>
        </div>
    </div>

    <div class="form-actions">
        <input type="hidden" name="add_next" value="0">

        <button type="submit" class="btn btn-primary" onclick='javascript:$("input[name=add_next]").val(1);'>
            <i class="icon-ok icon-white"></i> Save &amp; Next
        </button>
        <button type="submit" class="btn btn-info">
            <i class="icon-ok icon-white"></i> Save
        </button>
        <button type="reset" class="btn btn-link">Cancel</button>
    </div>

</form>

<script src="script/scripts.js"></script>
<script>
    $(document).ready(function() {
        form_validate("#user_form");
    });
</script>
