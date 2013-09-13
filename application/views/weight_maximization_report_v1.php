<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/normalize.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <table style="font-size: 0.9em">
            <tr>
                <th>Driver ID</th>
                <th>Delivery Date</th>
                <th>Shipper Name</th>
                <th>Shipper City</th>
                <th>Consignee Name</th>
                <th>Consignee City</th>
                <th>Commodity Code</th>
                <th>Trailer-Cube</th>
                <th>Weight-Hauled</th>
                <th>Weight-Target</th>
                <th>Weight-Difference</th>
                <th>Rate</th>
                <th>Driver Rate</th>
                <th>Lost Driver Pay</th>
                <th>Lost Revenue</th>
                <th>Freight Charges</th>
                <th>Accessorial Charges</th>
                <th>Tractor</th>
                <th>Trailer</th>
                <th>Tractor-Type</th>
                <th>Tractor-SuperSingles</th>
                <th>Tractor-AirWeigh</th>
                <th>Trailer-SuperSingles</th>
                <th>Trailer-Suspension</th>
                <th>Trip #</th>
                <th>Current Status</th>
            <tr>
        <?php
            foreach($weight_maximation_report as $run)
            {
                $daycab = 0;
                if($run['tractor_type'] === "D")
                {
                    $daycab = 1000;
                }
                
                $tractor_super_singles = 0;
                if($run['tractor_super_singles'] === "Y")
                {
                    $tractor_super_singles = 400;
                }
                
                $trailer_super_singles = 0;
                if($run['trailer_super_singles'] == 'Y')
                {
                    $trailer_super_singles = 400;
                }

                $weight_goal = 'null';
                $weight_difference = 'null';
                $lost_driver_pay = 'null';
                $lost_revenue = 'null';
                if($run['weight_goal'] != -1 && $run['weight_goal'] != 0)
                {
                    $weight_goal = $run['weight_goal'] + $daycab + $tractor_super_singles + $trailer_super_singles;
                    $weight_difference = $run['weight']-$weight_goal;
                    $lost_driver_pay = '$'.round(($weight_difference/2000)*$run['driver_rate']*0.25,2);
                    $lost_revenue = '$'.round(($weight_difference/2000)*$run['rate'],2);
                }
                
                echo    '<tr>'
                            .'<td>'
                                .$run['pick_up_driver']
                            .'</td>'
                            .'<td>'
                                .date('m-d-Y', strtotime($run['deliver_date']))
                            .'</td>'
                            .'<td>'
                                .$run['shipper_name']
                            .'</td>'
                            .'<td>'
                                .$run['shipper_city']
                            .'</td>'
                            .'<td>'
                                .$run['consignee_name']
                            .'</td>'
                            .'<td>'
                                .$run['consignee_city']
                            .'</td>'
                            .'<td>'
                                .$run['commodity_code']
                            .'</td>'
                            .'<td>'
                                .$run['trailer_size']
                            .'</td>'
                            .'<td>'
                                .$run['weight']
                            .'</td>'
                            .'<td>'
                                .$weight_goal
                            .'</td>'
                            .'<td>'
                                .$weight_difference
                            .'</td>'
                           .'<td>'
                                .'$'.$run['rate']
                            .'</td>'
                            .'<td>'
                                .'$'.$run['driver_rate']
                            .'</td>'
                            .'<td>'
                                .$lost_driver_pay
                            .'</td>'
                            .'<td>'
                                .$lost_revenue
                            .'</td>'
                             .'<td>'
                                .'$'.$run['freight_charges']
                            .'</td>'
                            .'<td>'
                                .'$'.$run['accessorial_charges']
                            .'</td>'
                            .'<td>'
                                .$run['tractor']
                            .'</td>'
                            .'<td>'
                                .$run['trailer']
                            .'</td>'
                            .'<td>'
                                .$run['tractor_type']
                            .'</td>'
                            .'<td>'
                                .$run['tractor_super_singles']
                            .'</td>'
                            .'<td>'
                                .$run['tractor_air_weigh']
                            .'</td>'
                            .'<td>'
                                .$run['trailer_super_singles']
                            .'</td>'
                            .'<td>'
                                .$run['trailer_suspension']
                            .'</td>'
                            .'<td>'
                                .$run['trip_number']
                            .'</td>'
                            .'<td>'
                                .$run['current_status']
                            .'</td>'
                        .'</tr>';
            }
        ?>

        </table>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
