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
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/main.css">
        <script type="text/javascript" src="<?php echo asset_url();?>js/dispatch_sheets_v1.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- filters above the dispatch sheet -->
        <div class="dispatch-sheet-row">
            <div class="left-column-drivers">
                <select class="driver-filter">
                    <option value="defualt">driver filter(s)</option>
                </select>
            </div>

            <div class="right-column-settings-corner">
                <div class="previous-day no-border left-text">
                   <a href="javascript:void(0)" onclick="previousDay()">&larr; Previous Day</a>
                </div> 
            </div>

            <div class="right-column-settings-middle">
                <div class="previous-day no-border center-text" id="date-range">
                   <?echo date('F j, Y',strtotime($start_date));?> - <?echo date('F j, Y',strtotime("+3 day", strtotime($start_date)));?>
                </div> 
            </div>

            <div class="right-column-settings-corner">
                <div class="previous-day no-border right-text">
                    <a href="javascript:void(0)" onclick="nextDay()">Next Day &rarr;</a>
                </div>
            </div>
        </div>

        <!-- headers for the dispatch sheet -->
        <div class="dispatch-sheet-row">
            <div class="left-column-drivers">
                <div class="header">
                    Drivers
                </div>
            </div>

            <div class="right-column-days">
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
                <div class="header" id="start-date-plus-3">
                    <?echo date('l, F j Y',strtotime("+3 day", strtotime($start_date)));?>
                </div>
            </div>
        </div>

        <!-- headers and filters above the dispatch sheet -->
        <div class="dispatch-sheet-row">
            <div class="left-column-drivers">
                <div class="driver" id="vishal-agrawal" onclick="toggleDetail('vishal-agrawal')">
                    <div class="driver-name left">
                        Vishal Agrawal
                    </div>
                    <div class="driver-info left" id="vishal-agrawal-info">
                        <div class="tractor">
                            <label>
                                Assigned Tractor
                            </label>
                            <input type="text" autocomplete="on" value="1356" disabled>
                        </div>
                        <div class="trailer">
                            <label>
                                Assigned Trailer
                            </label>
                            <input type="text" autocomplete="on" value="861" disabled>
                        </div>
                        <div class="phone">  
                            <label>
                                Phone Number
                            </label>
                            <input type="text" autocomplete="on" value="412-499-0776" disabled>
                        </div>
                        <div class="domiscile">  
                            <label>
                                Domiscile Location
                            </label>
                            <input type="text" autocomplete="on" value="Ono, PA 17077" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div id="all-days">
                <div class="right-column-days" name="day-1">
                    <div class="trip" id="VISHALA_09092013_1">
                        <div class="trip-id" id="VISHALA_09092013_CD123456-trip_id" onclick="toggleDetail('VISHALA_09092013_CD123456-trip')">
                            new trip
                        </div>
                        <div class="trip-info" id="VISHALA_09092013_CD123456-trip_info">
                            <div class="trip-type" name="VISHALA_09092013_CD123456-type">
                                <label for="VISHALA_09092013_CD123456-type">
                                    Trip Type
                                </label>
                                <!--add onchange function when the selected option changes-->
                                <select id="VISHALA_09092013_CD123456-type" onchange="changeTripType('VISHALA_09092013','CD123456')">
                                    <option value="free-form">Free Form</option>
                                    <option value="freight-bill" selected>Freight Bill</option>
                                    <option value="trip-number">Trip Number</option>
                                <select>
                            </div>
                            <div id="VISHALA_09092013_CD123456-type_details">
                                <div class="shipper-info" name="VISHALA_09092013_CD123456-shipper">
                                    <label for="VISHALA_09092013_CD123456-shipper">
                                        Shipper
                                    </label>
                                    <input type="text" id="VISHALA_09092013_CD123456-shipper" autocomplete="on">
                                </div>
                                <div class="pick-up-window" name="VISHALA_09092013_CD123456-pick_up_window">
                                    <label for="VISHALA_09092013_CD123456-pick_up_window">
                                        Pick Up Window
                                    </label>
                                    <input type="text" id="VISHALA_09092013_CD123456-pick_up_window" autocomplete="on">
                                </div>
                                <div class="consignee-info" name="VISHALA_09092013_CD123456-consignee">
                                    <label for="VISHALA_09092013_CD123456-consignee">
                                        Consignee
                                    </label>
                                    <input type="text" id="VISHALA_09092013_CD123456-consignee" autocomplete="on">
                                </div>
                                <div class="delivery-window" name="VISHALA_09092013_CD123456-delivery_window">
                                    <label for="VISHALA_09092013_CD123456-delivery_window">
                                        Delivery Window
                                    </label>
                                    <input type="text" id="VISHALA_09092013_CD123456-delivery_window" autocomplete="on">
                                </div>
                                <div class="commodity" name="VISHALA_09092013_CD123456-commodity">
                                    <label for="VISHALA_09092013_CD123456-commodity">
                                        Commodity
                                    </label>
                                    <input type="text" id="VISHALA_09092013_CD123456-commodity" autocomplete="on">   
                                </div>
                                <div class="tractor" name="VISHALA_09092013_CD123456-tractor">
                                    <label for="VISHALA_09092013_CD123456-tractor">
                                        Tractor
                                    </label>
                                    <!--assign default tractor of driver to value-->
                                    <input type="text" id="VISHALA_09092013_CD123456-tractor" autocomplete="on" value="">  
                                </div>
                                <div class="trailer" name="VISHALA_09092013_CD123456-trailer">
                                    <label for="VISHALA_09092013_CD123456-trailer">
                                        Trailer
                                    </label>
                                    <!--assign default trailer of driver-->
                                    <input type="text" id="VISHALA_09092013_CD123456-trailer" autocomplete="on" value=""> 
                                </div>
                                <div class="trip-delay" name="VISHALA_09092013_CD123456-trip_delay">
                                    <label for="VISHALA_09092013_CD123456-trip_delay_input">
                                        Trip Delay
                                    </label>
                                    <input type="radio" name="VISHALA_09092013_CD123456-trip_delay_input" value="Yes">Yes<input type="radio" name="VISHALA_09092013_CD123456-trip_delay_input" value="No" checked="checked">No
                                </div>
                                <div class="tank-wash" name="VISHALA_09092013_CD123456-tank_wash">
                                    <label id="VISHALA_09092013_CD123456-tank_wash_input">
                                        Tank Wash
                                    </label>
                                    <input type="radio" name="VISHALA_09092013_CD123456-tank_wash_input" value="Yes">Yes<input type="radio" name="VISHALA_09092013_CD123456-tank_wash_input" value="No" checked="checked">No
                                </div>
                                <div class="dead-head" name="VISHALA_09092013_CD123456-dead-head">
                                    <label id="VISHALA_09092013_CD123456-dead_head_input">
                                        Dead Head
                                    </label>
                                    <input type="radio" name="VISHALA_09092013_CD123456-dead_head_input" value="Yes">Yes<input type="radio" name="VISHALA_09092013_CD123456-dead_head_input" value="No" checked="checked">No
                                </div>
                                <div class="buttons">
                                    <a class="button save" id="VISHALA_09092013_CD123456-save" href="javascript:void(0)" onclick="saveEntry('VISHALA_09092013_CD123456')">Save</a>
                                </div>
                                <!--add button for delete function-->
                            </div>
                        </div>
                    </div>
            
                    <div class="trip" id="VISHALA_09092013_2">
                        <a href="javascript:void(0)" onclick="addEntry('VISHALA_09092013','2')">add trip</a>
                    </div>
                </div>
                <div class="right-column-days" name="day-2">
                    <div class="trip" id="VISHALA_10092013_1">
                        <a href="javascript:void(0)" onclick="addEntry('VISHALA_10092013','1')">add trip</a>
                    </div>                
                </div>
                <div class="right-column-days" name="day-3">
                    <div class="trip" id="VISHALA_11092013_1">
                        <a href="javascript:void(0)" onclick="addEntry('VISHALA_11092013','1')">add trip</a>
                    </div>
                </div>

                <div class="right-column-days" name="day-4">
                    <div class="trip" id="VISHALA_12092013_1">
                        <a href="javascript:void(0)" onclick="addEntry('VISHALA_12092013','1')">add trip</a>
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
