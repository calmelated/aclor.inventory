
<div class="container">
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td width="40%"><img src="img/logo.png" style="margin: 0;max-width: 196px;max-height: 48px;" /></td>
            <td width="60%"><h4> PACKING LIST </h4></td>
        </tr>
    </table>

    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="table table-condensed">
        <tr>
            <td width="50%">
                VENDOR:<br>
                <?=$cpo['vender_name'];?><br>
                <?=$cpo['vender_address'];?><br>
                <?=$cpo['vender_city'];?><br>
                TEL: <?=$cpo['vender_tel'];?><br>
                I.D. 26-3613222 <br>
                <br>
                SHIP Date: <?=$cpo['ship_date'];?><br>
                P.O. NO.: <?=$cpo['customer_po'];?><br>
                INVOICE: <strong><?=$cpo['invoice'];?></strong> <br>
            </td>
            <td width="100%">
                SHIP TO: <br>
                <?=$cpo['ship_name'];?><br>
                <?=$cpo['ship_address'];?><br>
                <?=$cpo['ship_city'];?><br>
                TEL: <?=$cpo['ship_tel'];?><br>
            </td>
        </tr>
    </table><br>

    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-striped table-condensed">
        <thead>
            <tr>
                <th class="span1">Pkg/Ctns</th>
                <th class="span2">Total QTY(pcs)</th>
                <th class="span1">Pack QTY</th>
                <th class="span1">Pallet</th>
                <th class="span4">Description</th>
                <th class="span2">Net WT(LB)</th>
                <th class="span2">Gross WT(LB)</th>
            </tr>
        </thead>
        <tbody>
            <tr><td colspan="7"></td></tr>
            <?php $sum_pkg_ctns = $sum_all_qty = $sum_pallet = $sum_gross_wt = $sum_net_wt = 0; ?>
            <?php for($i = 0; $i < count($cpocs); $i++) { ?>
                <?php
                    $all_qty   = $cpocs[$i]['all_qty'];
                    $pack_qty  = $cpocs[$i]['pack_qty'];
                    $pkg_ctns  = round($all_qty/$pack_qty, 3);
                    $pallet    = $cpocs[$i]['pallet'];
                    $item_num  = $cpocs[$i]['item_num'];
                    $item_desc = $cpocs[$i]['item_desc'];
                    $cust_item = $cpocs[$i]['cust_item'];
                    $net_wt    = $cpocs[$i]['net_weight'];
                    $gross_wt  = $cpocs[$i]['gross_weight'];

                    $sum_pkg_ctns += $pkg_ctns;
                    $sum_all_qty  += $all_qty;
                    $sum_net_wt   += $net_wt;
                    $sum_gross_wt += $gross_wt;
                    $sum_pallet   += $cpocs[$i]['pallet'];
                ?>
                <tr>
                    <td><?=$pkg_ctns;?></td>
                    <td><?=$all_qty;?></td>
                    <td><?=$pack_qty;?></td>
                    <td><?=$pallet;?></td>
                    <td>Item #: <?=$cust_item;?> (Aclor: <?=$item_num;?>)<br><?=$item_desc?></td>
                    <td><?=$net_wt;?></td>
                    <td><?=$gross_wt;?></td>
                </tr>
            <?php } ?>
            <tr><td colspan="7"></td></tr>
            <tr>
                <td><b><?=$sum_pkg_ctns;?></b></td>
                <td><b><?=$sum_all_qty;?></b></td>
                <td></td>
                <td><b><?=$sum_pallet;?></b></td>
                <td></td>
                <td><b><?=$sum_net_wt;?></b></td>
                <td><b><?=$sum_gross_wt;?></b></td>
            </tr>
        </tbody>
    </table><br>

    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td width="35%"><strong>TOTAL BULTOS: <?=$sum_pallet?></strong></td>
            <td width="60%"></td>
        </tr>
        <tr><td colspan="2"><br></td></tr>
        <tr>
            <td>Manufacturer's Name and Address: <br>
            <?=$cpo['factory_name']?> <br>
            <?=$cpo['factory_address']?> <br>
            <?=$cpo['factory_city']?>
            </td>
            <td style="vertical-align:top;text-align:left">
                ___________________________________________
            </td>
        </tr>
    </table>

</div>
