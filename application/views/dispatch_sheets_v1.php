<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/normalize.css">
        <script type="text/javascript" src="<?php echo asset_url();?>js/dispatch_sheets_v1.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="dispatch-sheet-row">
            <div class="left-column-drivers">
                <div class="none">
                    <select>
                        <option value="defualt">driver filter(s)</option>
                    </select>
                </div>
            </div>

            <div class="right-column-settings">
                <div class="previous-day none left-text">
                   <a href="javascript:void(0)" onclick="previousDay()">&larr; Previous Day</a>
                </div> 
            </div>
            <div class="right-column-settings">
                <div class="previous-day none right-text">
                    <a href="javascript:void(0)" onclick="nextDay()">Next Day &rarr;</a>
                </div>
            </div>
        </div>

        <div class="dispatch-sheet-row">
            <div class="left-column-drivers">
                <div class="header left">
                    Drivers
                </div>
            </div>

            <div class="right-column-days" id="">
                <div class="header" id="start-date">
                    <?echo $start_date;?>
                </div>
            </div>

            <div class="right-column-days">
                <div class="header" id="start-date-plus-1">
                    <?echo date('l, F j Y',strtotime("+1 day", strtotime($start_date)));?>
                </div>
            </div>

            <div class="right-column-days" id="start-date-plus-2">
                <div class="header">
                    <?echo date('l, F j Y',strtotime("+2 day", strtotime($start_date)));?>
                </div>
            </div>

            <div class="right-column-days">
                <div class="header right" id="start-date-plus-3">
                    <?echo date('l, F j Y',strtotime("+3 day", strtotime($start_date)));?>
                </div>
            </div>
        </div>

        <div class="dispatch-sheet-row">
            <div class="left-column-drivers">
                <div class="driver" id="vishal-agrawal" onclick="toggleDetail('vishal-agrawal')">
                    <div class="driver-name left">
                        Vishal Agrawal
                    </div>
                    <div class="driver-info left" id="vishal-agrawal-info">
                        <div class="tractor">
                            Assigned Tractor: 1356
                        </div>
                        <div class="trailer">
                            Assigned Trailer: 861
                        </div>
                        <div class="phone">
                            412-499-0776
                        </div>
                    </div>
                </div>
            </div>
            <div id="all-days">
                <div class="right-column-days" id="day-1">
                    <div class="trip" id="652584" onclick="toggleDetail('652584')">
                        <div class="trip-id top">
                            652584
                        </div>
                        <div class="trip-info" id="652584-info">
                            <div class="shipper-info">
                                <label>
                                    Colonial Metal Columbia, PA 17512   
                                </label>
                                <input>
                            </div>
                            <div class="consignee-info">
                                WEFCO
                                Franklin, NH 03235
                            </div>
                            <div class="commodity">
                                FAK
                            </div>
                            <div class="tractor">
                                Tractor: 1356
                            </div>
                            <div class="trailer">
                                Trailer: 861
                            </div>
                            <div class="trip-delay">
                                Trip Delay: No
                            </div>
                            <div class="tank-wash">
                                Tank Wash: No
                            </div>
                            <div class="dead-head">
                                Dead Head: No
                            </div>
                        </div>
                    </div>
            
                    <div class="trip">
                        <a href="">add trip</a>
                    </div>
                </div>
                <div class="right-column-days" id="day-2">
                    <div class="trip">
                        <a href="">add trip</a>
                    </div>
                </div>
                <div class="right-column-days" id="day-3">
                    <div class="trip">
                        <a href="">add trip</a>
                    </div>
                </div>
                <div class="right-column-days" id="day-4">
                    <div class="trip">
                        <a href="">add trip</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
