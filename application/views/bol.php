<html>
    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
        <title>BILL OF LADING</title>
        <style>
            /* Font Definitions */
            @font-face
            {font-family:Wingdings;
                panose-1:5 0 0 0 0 0 0 0 0 0;}
            @font-face
            {font-family:PMingLiU;
                panose-1:2 2 3 0 0 0 0 0 0 0;}
            @font-face
            {font-family:PMingLiU;
                panose-1:2 2 3 0 0 0 0 0 0 0;}
            @font-face
            {font-family:Univers;
                panose-1:0 0 0 0 0 0 0 0 0 0;}
            @font-face
            {font-family:"Mono821CECP BT";
                panose-1:0 0 0 0 0 0 0 0 0 0;}
            @font-face
            {font-family:"\@PMingLiU";
                panose-1:2 2 3 0 0 0 0 0 0 0;}
            /* Style Definitions */
            p.MsoNormal, li.MsoNormal, div.MsoNormal
            {margin:0in;
                margin-bottom:.0001pt;
                punctuation-wrap:simple;
                text-autospace:none;
                font-size:10.0pt;
                font-family:"Times New Roman","serif";}
            p.MsoHeader, li.MsoHeader, div.MsoHeader
            {mso-style-link:"Header Char";
                margin:0in;
                margin-bottom:.0001pt;
                layout-grid-mode:char;
                punctuation-wrap:simple;
                text-autospace:none;
                font-size:10.0pt;
                font-family:"Times New Roman","serif";}
            p.MsoFooter, li.MsoFooter, div.MsoFooter
            {mso-style-link:"Footer Char";
                margin:0in;
                margin-bottom:.0001pt;
                layout-grid-mode:char;
                punctuation-wrap:simple;
                text-autospace:none;
                font-size:10.0pt;
                font-family:"Times New Roman","serif";}
            span.HeaderChar
            {mso-style-name:"Header Char";
                mso-style-link:Header;}
            span.FooterChar
            {mso-style-name:"Footer Char";
                mso-style-link:Footer;}
            /* Page Definitions */
            @page WordSection1
            {size:8.5in 11.0in;
                margin:.5in 1.25in .5in 59.05pt;}
            div.WordSection1
            {page:WordSection1;}
            -->
        </style>

    </head>

    <body lang=EN-US>

        <div class=WordSection1>

            <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=732
                style='width:549.0pt;margin-left:0pt;border-collapse:collapse'>
                <tr>
                    <td width=144 colspan=4 valign=top style='width:1.5in;border:solid windowtext 1.0pt;
                        border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt'>Date:</span> <?=$cpo['ship_date'];?></p>
                    </td>
                    <td width=460 colspan=20 valign=top style='width:344.9pt;border-top:solid windowtext 1.0pt;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:15.5pt;font-family:"Arial","sans-serif"'>BILL OF LADING</span></b></p>
                    </td>
                    <td width=128 colspan=3 valign=top style='width:96.1pt;border:solid windowtext 1.0pt;
                        border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>Page
                                __</span></b><b><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>1</span></b><b><span
                                style='font-size:11.5pt;font-family:"Arial","sans-serif"'>__</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border:solid windowtext 1.0pt;
                        border-top:none;background:#CBCBCB;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>                                                        SHIP
                                FROM           </span></b></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'>Bill of Lading Number:</span>  <?=$cpo['invoice'];?></b></p>
                    </td>
                </tr>
                <tr style='height:14.0pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Name: </span><span
                           style='font-size:9.5pt;font-family:"Arial","sans-serif"'><?=$cpo['vender_name'];?><br></span></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                    </td>
                </tr>
                <tr style='height:14.0pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Address: </span><span
                            style='font-size:9.5pt;font-family:"Arial","sans-serif"'><?=$cpo['vender_address'];?></span></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><b><span style='font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
                    </td>
                </tr>
                <tr style='height:14.0pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>City/State/Zip: </span><span
                            style='font-size:9.5pt;font-family:"Arial","sans-serif"'><?=$cpo['vender_city'];?></span><br></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal style='text-indent:52.05pt'><b><span style='font-size:
                                11.5pt;font-family:"Univers","sans-serif";color:silver;letter-spacing:1.5pt'>BAR
                                CODE SPACE</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=330 colspan=13 valign=top style='width:247.7pt;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                        border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>SID#:</span></p>
                    </td>
                    <td width=78 colspan=3 valign=top style='width:58.3pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:9.5pt;font-family:"Arial","sans-serif"'>FOB: </span><b><span
                                style='font-size:13.5pt;font-family:Wingdings'>o</span></b></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border:solid windowtext 1.0pt;
                        border-top:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.0pt;font-family:"Arial","sans-serif"'>SHIP TO</span></b></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border-top:solid windowtext 1.0pt;
                        border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>CARRIER NAME: <?=$cpo['carrier'];?></span></b></p>
                    </td>
                </tr>
                <tr style='height:14.0pt'>
                    <td width=252 colspan=9 valign=top style='width:188.65pt;border:none;
                        border-left:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                            <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Name: </span>
                            <?=$cpo['ship_name'];?></p>
                            <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>TEL: </span>
                            <?=$cpo['ship_tel'];?><br><br></p>
                    </td>
                    <td width=156 colspan=7 valign=top style='width:117.35pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Trailer
                            number:</span></p>
                    </td>
                </tr>
                <tr style='height:14.0pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Address: </span>
                        <?=$cpo['ship_address'];?></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Seal
                            number(s):</span></p>
                    </td>
                </tr>
                <tr style='height:14.0pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>City/State/Zip: </span>
                            <?=$cpo['ship_city'];?>
                        </p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border-top:solid windowtext 1.0pt;
                        border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                    </td>
                </tr>
                <tr>
                    <td width=330 colspan=13 valign=top style='width:247.7pt;border-top:none; border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>CID#:</span></p>
                    </td>
                    <td width=78 colspan=3 valign=top style='width:58.3pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>FOB: </span><b><span style='font-size:13.5pt;font-family:Wingdings'>o</span></b></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none; border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>SCAC:</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border:solid windowtext 1.0pt; border-top:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>THIRD PARTY FREIGHT CHARGES BILL TO:</span></b></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none; border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Pro number:</span></b></p>
                    </td>
                </tr>
                <tr style='height:14.0pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border-top:none; border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Name: <?=$cpo['billing_name'];?></span></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none; border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:11.5pt;font-family:"Univers","sans-serif";color:silver; letter-spacing:1.5pt'>BAR CODE SPACE</span></b></p>
                    </td>
                </tr>
                <tr style='height:14.0pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border-top:none; border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Address: <?=$cpo['billing_address']?></span></p>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>City/State/Zip: <?=$cpo['billing_city'];?></span></p>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border:none; border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr style='height:14.0pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                    </td>
                    <td width=324 colspan=11 valign=top style='width:243.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:14.0pt'>
                        <p class=MsoNormal><b><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Freight Charge Terms: </span></b><b><i><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>(freight charges are prepaid unless marked otherwise)</span></i></b></p>
                    </td>
                </tr>
                <tr style='height:15.15pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border-top:none; border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.15pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>SPECIAL INSTRUCTIONS:</span>  <?=$cpo['comment'];?> </p>
                    </td>
                    <td width=126 colspan=6 valign=top style='width:94.3pt;border:none; border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.15pt'>
                        <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>Prepaid ______</span></b></p>
                    </td>
                    <td width=103 colspan=3 valign=top style='width:77.05pt;border:none; border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.15pt'>
                        <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>Collect _____</span></b></p>
                    </td>
                    <td width=96 colspan=2 valign=top style='width:71.65pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.15pt'>
                        <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>3<sup>rd</sup> Party _</span></b><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>x</span></b><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>_</span></b></p>
                    </td>
                </tr>
                <tr style='height:17.25pt'>
                    <td width=408 colspan=16 valign=top style='width:4.25in;border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt;height:17.25pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=94 colspan=5 valign=top style='width:70.55pt;border:none; border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:17.25pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span style='font-size:11.5pt;font-family:Wingdings'>o</span></p>
                        <p class=MsoNormal align=center style='text-align:center'><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>(check box)</span></p>
                    </td>
                    <td width=230 colspan=6 valign=top style='width:172.45pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:17.25pt'>
                        <p class=MsoNormal><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>Master Bill of Lading: with attached underlying Bills of Lading</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=732 colspan=27 valign=top style='width:549.0pt;border:solid windowtext 1.0pt; border-top:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>CUSTOMER ORDER INFORMATION</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=210 colspan=7 valign=top style='width:157.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>CUSTOMER ORDER NUMBER</span></b></p>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>P.O. <?=$cpo['customer_po']?></span></b></p>
                    </td>
                    <td width=85 colspan=4 valign=top style='width:64.1pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'># PKGS</span></b></p>
                    </td>
                    <td width=85 colspan=4 valign=top style='width:64.1pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>WEIGHT</span></b></p>
                    </td>
                    <td width=96 colspan=4 valign=top style='width:1.0in;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>PALLET/SLIP</span></b></p>
                        <p class=MsoNormal align=center style='text-align:center'><span style='font-size:6.0pt;font-family:"Arial","sans-serif"'>(CIRCLE ONE)</span></p>
                    </td>
                    <td width=255 colspan=8 valign=top style='width:191.3pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>ADDITIONAL SHIPPER INFO</span></b></p>
                    </td>
                </tr>

                <?php $sum_pkg_ctns = $sum_gross_wt = $sum_pallet = 0; ?>
                <?php for($i = 0;;$i++) { ?>
                    <?php
                        $pallet = false;
                        $item_num = $pkg_ctns = $gross_wt = "";
                        if($i < count($cpocs)) {
                            $item_num = $cpocs[$i]['item_num'];
                            $pkg_ctns = round($cpocs[$i]['all_qty'] / $cpocs[$i]['pack_qty'], 3);
                            $gross_wt = $cpocs[$i]['gross_weight'];
                            $pallet   = true;

                            $sum_pkg_ctns += $pkg_ctns;
                            $sum_gross_wt += $gross_wt;
                            $sum_pallet   += $cpocs[$i]['pallet'];
                        } else if($i > 4) {
                            break;
                        }
                    ?>
                    <tr>
                        <td style='border:solid windowtext 1.0pt; border-right:none; padding:0in 0in 0in 0in' width=0></td>
                        <td width=210 colspan=6 valign=top style='width:157.15pt;border:solid windowtext 1.0pt; border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                            <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'><?=$item_num;?></span></b></p>
                        </td>
                        <td width=85 colspan=4 valign=top style='width:64.1pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                            <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'><?=$pkg_ctns;?></span></p>
                        </td>
                        <td width=85 colspan=4 valign=top style='width:64.1pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                            <p class=MsoNormal align=center style='text-align:center'><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'><?=$gross_wt;?></span></p>
                        </td>
                        <td width=48 colspan=3 valign=top style='width:.5in;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                            <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'><?php if($pallet){echo 'Y';} ?></span></b></p>
                        </td>
                        <td width=48 valign=top style='width:.5in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                            <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'><?php if(!$pallet){echo 'N';}?></span></b></p>
                        </td>
                        <td width=255 colspan=8 valign=top style='width:191.3pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
                            <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                        </td>
                    </tr>
                <?php } ?>

                <tr>
                    <td width=210 colspan=7 valign=top style='width:157.5pt;border:solid windowtext 1.0pt; border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>GRAND TOTAL</span></b></p>
                    </td>
                    <td width=85 colspan=4 valign=top style='width:64.1pt;border:solid windowtext 1.0pt; border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=85 colspan=4 valign=top style='width:64.1pt;border:solid windowtext 1.0pt; border-left:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=351 colspan=12 valign=top style='width:263.3pt;border-top:none; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; background:black;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal style='margin-right:40.25pt'><span style='font-size:11.5pt; font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=732 colspan=27 style='width:549.0pt;border:solid windowtext 1.0pt; border-top:none;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>CARRIER </span></b><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>INFORMATION</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=98 colspan=3 valign=top style='width:73.45pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.0pt;font-family:"Arial","sans-serif"'>HANDLING UNIT</span></b></p>
                    </td>
                    <td width=98 colspan=3 valign=top style='width:73.45pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.5pt;font-family:"Arial","sans-serif"'>PACKAGE</span></b></p>
                    </td>
                    <td width=86 colspan=4 valign=top style='width:.9in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=40 colspan=2 valign=top style='width:30.25pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:9.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=271 colspan=11 valign=top style='width:203.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:9.5pt;font-family:"Arial","sans-serif"'>COMMODITY
                                DESCRIPTION</span></b></p>
                    </td>
                    <td width=139 colspan=4 valign=top style='width:104.0pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:9.5pt;font-family:"Arial","sans-serif"'>LTL ONLY</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.5pt;font-family:"Arial","sans-serif"'>QTY</span></b></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.5pt;font-family:"Arial","sans-serif"'>TYPE</span></b></p>
                    </td>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.5pt;font-family:"Arial","sans-serif"'>QTY</span></b></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.5pt;font-family:"Arial","sans-serif"'>TYPE</span></b></p>
                    </td>
                    <td width=86 colspan=4 valign=top style='width:.9in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:9.5pt;font-family:"Arial","sans-serif"'>WEIGHT</span></b></p>
                    </td>
                    <td width=40 colspan=2 valign=top style='width:30.25pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.0pt;font-family:"Arial","sans-serif"'>H.M.</span></b></p>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.0pt;font-family:"Arial","sans-serif"'>(X)</span></b></p>
                    </td>
                    <td width=271 colspan=11 valign=top style='width:203.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:5.0pt;font-family:"Arial","sans-serif"'>Commodities
                            requiring special or additional care or attention in handling or stowing must
                            be so marked and packaged as to ensure safe transportation with ordinary
                            care. </span></p>
                        <p class=MsoNormal align=center style='text-align:center'><b><i><span
                                    style='font-size:5.0pt;font-family:"Arial","sans-serif"'>See Section 2(e) of
                                    NMFC Item 360</span></i></b></p>
                    </td>
                    <td width=79 colspan=3 valign=top style='width:59.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.5pt;font-family:"Arial","sans-serif"'>NMFC #</span></b></p>
                    </td>
                    <td width=60 valign=top style='width:44.95pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.5pt;font-family:"Arial","sans-serif"'>CLASS</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'><?=$sum_pallet;?></span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'>PLT</span></p>
                    </td>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'><?=$sum_pkg_ctns;?></span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Arial","sans-serif"'>CTNS</span></p>
                    </td>
                    <td width=86 colspan=4 valign=top style='width:.9in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'><?=$sum_gross_wt;?></span></p>
                    </td>
                    <td width=40 colspan=2 valign=top style='width:30.25pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=271 colspan=11 valign=top style='width:203.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>NOTEBOOKS</span></p>
                    </td>
                    <td width=79 colspan=3 valign=top style='width:59.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>153760</span></p>
                    </td>
                    <td width=60 valign=top style='width:44.95pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>55</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=86 colspan=4 valign=top style='width:.9in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=40 colspan=2 valign=top style='width:30.25pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=271 colspan=11 valign=top style='width:203.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=79 colspan=3 valign=top style='width:59.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=60 valign=top style='width:44.95pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=86 colspan=4 valign=top style='width:.9in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=40 colspan=2 valign=top style='width:30.25pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=409 colspan=15 valign=top style='width:307.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=right style='text-align:right'><b><span
                                style='font-size:11.5pt;font-family:"Arial","sans-serif";color:silver;
                                letter-spacing:1.5pt'>RECEIVING</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=86 colspan=4 valign=top style='width:.9in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=40 colspan=2 valign=top style='width:30.25pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=409 colspan=15 valign=top style='width:307.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=right style='text-align:right'><b><span
                                style='font-size:11.5pt;font-family:"Arial","sans-serif";color:silver;
                                letter-spacing:1.5pt'>STAMP SPACE</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=86 colspan=4 valign=top style='width:.9in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=40 colspan=2 valign=top style='width:30.25pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=271 colspan=11 valign=top style='width:203.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=79 colspan=3 valign=top style='width:59.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=60 valign=top style='width:44.95pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'><?=$sum_pallet;?></span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        background:black;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=49 colspan=2 valign=top style='width:36.7pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'><?=$sum_pkg_ctns;?></span></p>
                    </td>
                    <td width=49 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        background:black;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=86 colspan=4 valign=top style='width:.9in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'><?=$sum_gross_wt;?></span></p>
                    </td>
                    <td width=40 colspan=2 valign=top style='width:36.75pt;border-top:none;border-left:
                        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        background:black;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=271 colspan=11 valign=top style='width:203.05pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:11.5pt;font-family:"Arial","sans-serif"'>GRAND TOTAL</span></b></p>
                    </td>
                    <td width=139 colspan=4 valign=top style='width:104.0pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        background:black;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=420 colspan=17 valign=top style='width:315.0pt;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 2.25pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Where
                            the rate is dependent on value, shippers are required to state specifically
                            in writing the agreed or declared value of the property as follows:</span></p>
                    </td>
                    <td width=312 colspan=10 valign=top style='width:3.25in;border:none;
                        border-right:solid windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:9.5pt;font-family:"Arial","sans-serif"'>COD
                                Amount:  $ ______________________</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=420 colspan=17 valign=top style='width:315.0pt;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
                        border-right:solid windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:6.0pt;font-family:"Arial","sans-serif"'>“The
                            agreed or declared value of the property is specifically stated by the
                            shipper to be not exceeding </span></p>
                        <p class=MsoNormal><span style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                        <p class=MsoNormal><span style='font-size:6.0pt;font-family:"Arial","sans-serif"'>__________________
                            per ___________________.”</span></p>
                    </td>
                    <td width=312 colspan=10 valign=top style='width:3.25in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 2.25pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Fee Terms:   
                                Collect:  </span></b><b><span style='font-size:9.5pt;font-family:Wingdings'>¨</span></b><b><span
                                style='font-size:9.5pt;font-family:"Arial","sans-serif"'>    Prepaid: </span></b><b><span
                                style='font-size:9.5pt;font-family:Wingdings'>o</span></b></p>
                        <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:9.5pt;font-family:"Arial","sans-serif"'>Customer check
                                acceptable: </span></b><b><span style='font-size:9.5pt;font-family:Wingdings'>o</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=732 colspan=27 valign=top style='width:549.0pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>NOTE 
                                Liability Limitation for loss or damage in this shipment may be applicable. 
                                See 49 U.S.C. </span></b><b><span style='font-size:8.5pt;font-family:"Mono821CECP BT"'>§</span></b><b><span
                                style='font-size:8.5pt;font-family:"Arial","sans-serif"'> 14706(c)(1)(A) and
                                (B).</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=420 colspan=17 valign=top style='width:315.0pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:6.0pt;font-family:"Arial","sans-serif"'>RECEIVED,
                            subject to individually determined rates or contracts that have been agreed
                            upon in writing between the carrier and shipper, if applicable, otherwise to
                            the rates, classifications and rules that have been established by the
                            carrier and are available to the shipper, on request, and to all applicable
                            state and federal regulations.</span></p>
                    </td>
                    <td width=312 colspan=10 valign=top style='width:3.25in;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>The
                            carrier shall not make delivery of this shipment without payment of freight
                            and all other lawful charges.</span></p>
                        <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>_______________________________________<b>Shipper
                                Signature</b></span></p>
                    </td>
                </tr>
                <tr>
                    <td width=246 colspan=8 valign=top style='width:184.5pt;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>SHIPPER
                                SIGNATURE / DATE</span></b></p>
                    </td>
                    <td width=90 colspan=6 valign=top style='width:67.5pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><u><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Trailer
                                Loaded:</span></u></p>
                    </td>
                    <td width=162 colspan=6 valign=top style='width:121.35pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><u><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Freight
                                Counted:</span></u></p>
                    </td>
                    <td width=234 colspan=7 valign=top style='width:175.65pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif"'>CARRIER
                                SIGNATURE / PICKUP DATE</span></b></p>
                    </td>
                </tr>
                <tr>
                    <td width=246 colspan=8 valign=top style='width:184.5pt;border-top:none;
                        border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:5.0pt;font-family:"Arial","sans-serif"'>This
                            is to certify that the above named materials are properly classified,
                            described, packaged, marked and labeled, and are in proper condition for
                            transportation according to the applicable regulations of the U.S. DOT.</span></p>
                    </td>
                    <td width=90 colspan=6 valign=top style='width:67.5pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:Wingdings'>p</span><span
                            style='font-size:11.5pt;font-family:"Arial","sans-serif"'>  </span><span
                            style='font-size:7.0pt;font-family:"Arial","sans-serif"'>By Shipper</span></p>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:Wingdings'>p</span><span
                            style='font-size:8.0pt;font-family:"Arial","sans-serif"'>  </span><span
                            style='font-size:7.0pt;font-family:"Arial","sans-serif"'>By Driver</span></p>
                    </td>
                    <td width=162 colspan=6 valign=top style='width:121.35pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:Wingdings'>p</span><span
                            style='font-size:8.0pt;font-family:"Arial","sans-serif"'>  </span><span
                            style='font-size:7.0pt;font-family:"Arial","sans-serif"'>By Shipper</span></p>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:Wingdings'>p</span><span
                            style='font-size:8.0pt;font-family:"Arial","sans-serif"'>  </span><span
                            style='font-size:7.0pt;font-family:"Arial","sans-serif"'>By Driver/pallets
                            said to contain</span></p>
                    </td>
                    <td width=234 colspan=7 valign=top style='width:175.65pt;border:none;
                        border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:5.0pt;font-family:"Arial","sans-serif"'>Carrier
                            acknowledges receipt of packages and required placards.  Carrier certifies
                            emergency response information was made available and/or carrier has the U.S.
                            DOT emergency response guidebook or equivalent documentation in the vehicle.</span></p>
                    </td>
                </tr>
                <tr>
                    <td width=246 colspan=8 valign=top style='width:184.5pt;border:solid windowtext 1.0pt;
                        border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=90 colspan=6 valign=top style='width:67.5pt;border:none;border-bottom:
                        solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                    </td>
                    <td width=162 colspan=6 valign=top style='width:121.35pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><span style='font-size:11.5pt;font-family:Wingdings'>p</span><span
                            style='font-size:8.0pt;font-family:"Arial","sans-serif"'>  </span><span
                            style='font-size:7.0pt;font-family:"Arial","sans-serif"'>By Driver/Pieces</span></p>
                    </td>
                    <td width=234 colspan=7 valign=top style='width:175.65pt;border-top:none;
                        border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                        padding:0in 5.4pt 0in 5.4pt'>
                        <p class=MsoNormal><b><i><span style='font-size:5.0pt;font-family:"Arial","sans-serif"'>Property
                                    described above is received in good order, except as noted.</span></i></b></p>
                    </td>
                </tr>
                <tr height=0>
                    <td width=0 style='border:none'></td>
                    <td width=48 style='border:none'></td>
                    <td width=49 style='border:none'></td>
                    <td width=46 style='border:none'></td>
                    <td width=3 style='border:none'></td>
                    <td width=49 style='border:none'></td>
                    <td width=14 style='border:none'></td>
                    <td width=36 style='border:none'></td>
                    <td width=6 style='border:none'></td>
                    <td width=31 style='border:none'></td>
                    <td width=13 style='border:none'></td>
                    <td width=27 style='border:none'></td>
                    <td width=8 style='border:none'></td>
                    <td width=6 style='border:none'></td>
                    <td width=45 style='border:none'></td>
                    <td width=27 style='border:none'></td>
                    <td width=12 style='border:none'></td>
                    <td width=9 style='border:none'></td>
                    <td width=48 style='border:none'></td>
                    <td width=21 style='border:none'></td>
                    <td width=4 style='border:none'></td>
                    <td width=32 style='border:none'></td>
                    <td width=60 style='border:none'></td>
                    <td width=11 style='border:none'></td>
                    <td width=33 style='border:none'></td>
                    <td width=36 style='border:none'></td>
                    <td width=60 style='border:none'></td>
                </tr>
            </table>

            <p class=MsoNormal>&nbsp;</p>

        </div>

    </body>

</html>
