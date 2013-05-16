<div class="container">
    <div style="margin-left:170px;">
        <img src="img/logo.png"></img>
        <br>
        <strong>Inventory Control System</strong>
    </div>
    <hr>

    <?php echo form_open('user/login', array("class" => "form-horizontal")); ?>
        <div class="control-group">
            <label class="control-label" for="username">Username</label>
            <div class="controls">
                <input type="text" name="username" placeholder="Username">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" name="password" placeholder="Password">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"></label>
            <div class="controls">
                <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
                <?php if (!$captchaSolved) { ?>
                    <div>
                        <?php echo $captchaHtml; ?>
                        <?php echo form_input(
                            array(
                            'name'        => 'captcha',
                            'id'          => 'captcha',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50'
                            )
                        );?>
                    </div>
                <?php }; ?>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn">Sign in</button>
            </div>
        </div>

    </form>
    <div style="margin-left:170px;">
        <?php echo '<div style="color:red">'.validation_errors().'</div>'; ?>
    </div>

</div>
