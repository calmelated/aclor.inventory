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
                <li class="active nav brand"><img src="img/logo.png" height=60 width=60 /></li>
                <li><a href="order">Stock</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Material Receipt
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="inodr/add">Add Receipt</a></li>
                        <li><a href="inodr">Receipt List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Material Reqisition
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="outodr/add">Add Reqisition</a></li>
                        <li><a href="outodr">Reqisition List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Stock Adjust
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="adjodr/add">Add Adjust</a></li>
                        <li><a href="adjodr">Adjust List</a></li>
                    </ul>
                </li>
                <?php if ($this->session->userdata['user_auth'] > 1) {  // auth:admin ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Admin
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="user/ulist">Users</a></li>
                            <li><a href="item">Item List</a></li>
                            <li><a href="comp">Companies</a></li>
                            <!-- li><a href="fileup/items">Imort Item List</a></li--!>
                            <!-- li><a href="fileup">Upload Files</a></li--!>
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
