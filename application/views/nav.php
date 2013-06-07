<?php
    if(!isset($this->session->userdata['logged_in'])) {
        redirect(site_url('/'), 'refresh');
    }
?>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav">
                <li class="active nav brand"><img src="img/logo.png" style="margin: 0;max-width: 128px;max-height: 24px;"/></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Inventory
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="inodr">Material Receipt</a></li>
                        <li><a href="outodr">Material Reqisition</a></li>
                        <li><a href="adjodr">Stock Adjust</a></li>
                        <li class="divider"></li>
                        <li><a href="order">Stock Statement</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Sales
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="cpo">Customer P.O.</a></li>
                    </ul>
                </li>
                <?php if ($this->session->userdata['user_auth'] > 1) {  // auth:manager, admin ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Admin
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if ($this->session->userdata['user_auth'] > 2) {  // auth:admin ?>
                                <li><a href="user/ulist">Users</a></li>
                            <?php } ?>
                            <li><a href="item">Item List</a></li>
                            <li><a href="comp">Companies</a></li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>

            <div class="btn-group pull-right" style="margin-top:9px;">
                <a class="btn btn-info btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                    Hi, <?=$this->session->userdata['user_name']?>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- dropdown menu links -->
                    <li><a href="user/logout">Logout</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div style="margin-top:60px;">
