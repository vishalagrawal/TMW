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
                    <div class="trip" id="PlaceHolderForPreId-trip">
                        <div class="trip-id top" id="PlaceHolderForPreId-trip-id" onclick="toggleDetail('PlaceHolderForPreId-trip')">
                            new trip
                        </div>
                        <div class="trip-info" id="PlaceHolderForPreId-trip-info">
                            <div class="trip-type" id="PlaceHolderForPreId-trip-info-trip-type">
                                <label>
                                    Trip Type
                                </label>
                                <!--add onchange function when the selected option changes-->
                                <select>
                                    <option value="free-form" selected>Free Form</option>
                                    <option value="freight-bill">Freight Bill</option>
                                    <option value="trip-number">Trip Number</option>
                                <select>
                            </div>
                            <div class="shipper-info" id="PlaceHolderForPreId-trip-info-shipper">
                                <label>
                                    Shipper
                                </label>
                                <input type="text" name="PlaceHolderForPreId-trip-info-shipper" autocomplete="on">
                            </div>
                            <div class="pick-up-window" id="PlaceHolderForPreId-trip-info-pick-up-window">
                                <label>
                                    Pick Up Window
                                </label>
                                <input type="text" name="PlaceHolderForPreId-trip-info-pick-up-window" autocomplete="on">
                            </div>
                            <div class="consignee-info" id="PlaceHolderForPreId-trip-info-consignee">
                                <label>
                                    Consignee
                                </label>
                                <input type="text" name="PlaceHolderForPreId-trip-info-consignee" autocomplete="on">
                            </div>
                            <div class="delivery-window" id="PlaceHolderForPreId-trip-info-delivery-window">
                                <label>
                                    Delivery Window
                                </label>
                                <input type="text" name="PlaceHolderForPreId-trip-info-delivery-window" autocomplete="on">
                            </div>
                            <div class="commodity" id="PlaceHolderForPreId-trip-info-commodity">
                                <label>
                                    Commodity
                                </label>
                                <input type="text" name="PlaceHolderForPreId-trip-info-commodity" autocomplete="on">   
                            </div>
                            <div class="tractor" id="PlaceHolderForPreId-trip-info-tractor">
                                <label>
                                    Tractor
                                </label>
                                <!--assign default tractor of driver to value-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-tractor" autocomplete="on" value="">  
                            </div>
                            <div class="trailer" id="PlaceHolderForPreId-trip-info-trailer">
                                <label>
                                    Trailer
                                </label>
                                <!--assign default trailer of driver-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-trailer" autocomplete="on" value=""> 
                            </div>
                            <div class="trip-delay" id="PlaceHolderForPreId-trip-info-trip-delay">
                                <label>
                                    Trip Delay
                                </label>
                                <input type="radio" name="PlaceHolderForPreId-trip-info-trip-delay" value="Yes">Yes
                                <input type="radio" name="PlaceHolderForPreId-trip-info-trip-delay" value="No" checked="checked">No
                            </div>
                            <div class="tank-wash" id="PlaceHolderForPreId-trip-info-tank-wash">
                                <label>
                                    Tank Wash
                                </label>
                                <input type="radio" name="PlaceHolderForPreId-trip-info-tank-wash" value="Yes">Yes
                                <input type="radio" name="PlaceHolderForPreId-trip-info-tank-wash" value="No" checked="checked">No
                            </div>
                            <div class="dead-head" id="PlaceHolderForPreId-trip-info-dead-head">
                                <label>
                                    Dead Head
                                </label>
                                <input type="radio" name="PlaceHolderForPreId-trip-info-dead-head" value="Yes">Yes
                                <input type="radio" name="PlaceHolderForPreId-trip-info-dead-head" value="No" checked="checked">No
                            </div>
                            <div class="buttons">
                                <a class="button save" id="PlaceHolderForPreId-trip-info-save" href="javascript:void(0)" onclick="saveEntry('PlaceHolderForPreId-trip')">Save</a>
                            </div>
                            <!--add button for delete function-->
                        </div>
                    </div>
            
                    <div class="trip">
                        <a href="">add trip</a>
                    </div>
                </div>
                <div class="right-column-days" name="day-2">
                    <div class="trip" id="PlaceHolderForPreId-trip">
                        <div class="trip-id top" id="PlaceHolderForPreId-trip-id" onclick="toggleDetail('PlaceHolderForPreId-trip')">
                            new trip
                        </div>
                        <div class="trip-info" id="PlaceHolderForPreId-trip-info">
                            <div class="trip-type" id="PlaceHolderForPreId-trip-info-trip-type">
                                <label>
                                    Trip Type
                                </label>
                                <!--add onchange function when the selected option changes-->
                                <select>
                                    <option value="free-form">Free Form</option>
                                    <option value="freight-bill" selected>Freight Bill</option>
                                    <option value="trip-number">Trip Number</option>
                                <select>
                            </div>
                            <div class="freight-bill" id="PlaceHolderForPreId-trip-info-freight-bill">
                                <label>
                                    Freight Bill
                                </label>
                                <input type="text" name="PlaceHolderForPreId-trip-info-freight-bill" autocomplete="on">
                            </div>
                            <div class="buttons">
                                <a class="button freight-bill" id="PlaceHolderForPreId-trip-info-freight-bill" href="javascript:void(0)" onclick="getFreightBill('PlaceHolderForPreId-trip')">Get Freight Bill</a>
                            </div>
                        </div>
                    </div>
                    <div class="trip" id="PlaceHolderForPreId-trip">
                        <div class="trip-id top" id="PlaceHolderForPreId-trip-id" onclick="toggleDetail('PlaceHolderForPreId-trip')">
                            new trip
                        </div>
                        <div class="trip-info" id="PlaceHolderForPreId-trip-info">
                            <div class="trip-type" id="PlaceHolderForPreId-trip-info-trip-type">
                                <label>
                                    Trip Type
                                </label>
                                <select disabled>
                                    <option value="free-form">Free Form</option>
                                    <option value="freight-bill" selected>Freight Bill</option>
                                    <option value="trip-number">Trip Number</option>
                                <select>
                            </div>
                            <div class="freight-bill" id="PlaceHolderForPreId-trip-info-freight-bill">
                                <label>
                                    Freight Bill
                                </label>
                                <!--plug in value for the freight bill-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-freight-bill" autocomplete="on" value="" disabled>
                            </div>
                                    <div class="shipper-info" id="PlaceHolderForPreId-trip-info-shipper">
                                <label>
                                    Shipper
                                </label>
                                <!--plug in value for the shipper-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-shipper" autocomplete="on" value="" disabled>
                            </div>
                            <div class="pick-up-window" id="PlaceHolderForPreId-trip-info-pick-up-window">
                                <label>
                                    Pick Up Window
                                </label>
                                <!--plug in value for pick up window-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-pick-up-window" autocomplete="on" value="" disabled>
                            </div>
                            <div class="consignee-info" id="PlaceHolderForPreId-trip-info-consignee">
                                <label>
                                    Consignee
                                </label>
                                <!--plug in value for the consignee-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-consignee" autocomplete="on" value="" disabled>
                            </div>
                            <div class="delivery-window" id="PlaceHolderForPreId-trip-info-delivery-window">
                                <label>
                                    Delivery Window
                                </label>
                                <!--plug in value for the delivery window-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-delivery-window" autocomplete="on" value="" disabled>
                            </div>
                            <div class="commodity" id="PlaceHolderForPreId-trip-info-commodity">
                                <label>
                                    Commodity
                                </label>
                                <!--plug in value for the commodity-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-commodity" autocomplete="on" value="" disabled>   
                            </div>
                            <div class="tractor" id="PlaceHolderForPreId-trip-info-tractor">
                                <label>
                                    Tractor
                                </label>
                                <!--plug in default value for the tractor-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-tractor" autocomplete="on" value="" disabled>  
                            </div>
                            <div class="trailer" id="PlaceHolderForPreId-trip-info-trailer">
                                <label>
                                    Trailer
                                </label>
                                <!--plug in default value for the trailer-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-trailer" autocomplete="on" value="" disabled> 
                            </div>
                            <div class="trip-delay" id="PlaceHolderForPreId-trip-info-trip-delay">
                                <label>
                                    Trip Delay
                                </label>
                                <input type="radio" name="PlaceHolderForPreId-trip-info-trip-delay" value="Yes" disabled>Yes
                                <input type="radio" name="PlaceHolderForPreId-trip-info-trip-delay" value="No" checked="checked" disabled>No
                            </div>
                            <div class="tank-wash" id="PlaceHolderForPreId-trip-info-tank-wash">
                                <label>
                                    Tank Wash
                                </label>
                                <input type="radio" name="PlaceHolderForPreId-trip-info-tank-wash" value="Yes" disabled>Yes
                                <input type="radio" name="PlaceHolderForPreId-trip-info-tank-wash" value="No" checked="checked" disabled>No
                            </div>
                            <div class="dead-head" id="PlaceHolderForPreId-trip-info-dead-head">
                                <label>
                                    Dead Head
                                </label>
                                <input type="radio" name="PlaceHolderForPreId-trip-info-dead-head" value="Yes" disabled>Yes
                                <input type="radio" name="PlaceHolderForPreId-trip-info-dead-head" value="No" checked="checked" disabled>No
                            </div>
                            <div class="buttons">
                                <a class="button edit" id="PlaceHolderForPreId-trip-info-edit" href="javascript:void(0)" onclick="editEntry('PlaceHolderForPreId-trip')">Edit</a>
                            </div>
                            <!--add button for delete function-->
                        </div>
                    </div>
                    <div class="trip">
                        <a href="">add trip</a>
                    </div>                
                </div>
                <div class="right-column-days" name="day-3">
                    <div class="trip" id="PlaceHolderForPreId-trip">
                        <div class="trip-id top" id="PlaceHolderForPreId-trip-id" onclick="toggleDetail('PlaceHolderForPreId-trip')">
                            new trip
                        </div>
                        <div class="trip-info" id="PlaceHolderForPreId-trip-info">
                            <div class="trip-type" id="PlaceHolderForPreId-trip-info-trip-type">
                                <label>
                                    Trip Type
                                </label>
                                <!--add onchange function when the selected option changes-->
                                <select>
                                    <option value="free-form">Free Form</option>
                                    <option value="freight-bill">Freight Bill</option>
                                    <option value="trip-number" selected>Trip Number</option>
                                <select>
                            </div>
                            <div class="freight-bill" id="PlaceHolderForPreId-trip-info-trip-number">
                                <label>
                                    Trip Number
                                </label>
                                <input type="text" name="PlaceHolderForPreId-trip-info-trip-number" autocomplete="on">
                            </div>
                            <div class="buttons">
                                <a class="button trip" id="PlaceHolderForPreId-trip-info-trip" href="javascript:void(0)" onclick="getTrip('PlaceHolderForPreId-trip')">Get Trip</a>
                            </div>
                        </div>
                    </div>
                    <div class="trip" id="PlaceHolderForPreId-trip">
                        <div class="trip-id top" id="PlaceHolderForPreId-trip-id" onclick="toggleDetail('PlaceHolderForPreId-trip')">
                            new trip
                        </div>
                        <div class="trip-info" id="PlaceHolderForPreId-trip-info">
                            <div class="trip-type" id="PlaceHolderForPreId-trip-info-trip-type">
                                <label>
                                    Trip Type
                                </label>
                                <select disabled>
                                    <option value="free-form">Free Form</option>
                                    <option value="freight-bill">Freight Bill</option>
                                    <option value="trip-number" selected>Trip Number</option>
                                <select>
                            </div>
                            <div class="freight-bill" id="PlaceHolderForPreId-trip-info-trip-number">
                                <label>
                                    Trip Number
                                </label>
                                <!--plug in value for the freight bill-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-trip-number" autocomplete="on" value="" disabled>
                            </div>
                                    <div class="shipper-info" id="PlaceHolderForPreId-trip-info-shipper">
                                <label>
                                    Shipper
                                </label>
                                <!--plug in value for the shipper-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-shipper" autocomplete="on" value="" disabled>
                            </div>
                            <div class="pick-up-window" id="PlaceHolderForPreId-trip-info-pick-up-window">
                                <label>
                                    Pick Up Window
                                </label>
                                <!--plug in value for pick up window-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-pick-up-window" autocomplete="on" value="" disabled>
                            </div>
                            <div class="consignee-info" id="PlaceHolderForPreId-trip-info-consignee">
                                <label>
                                    Consignee
                                </label>
                                <!--plug in value for the consignee-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-consignee" autocomplete="on" value="" disabled>
                            </div>
                            <div class="delivery-window" id="PlaceHolderForPreId-trip-info-delivery-window">
                                <label>
                                    Delivery Window
                                </label>
                                <!--plug in value for the delivery window-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-delivery-window" autocomplete="on" value="" disabled>
                            </div>
                            <div class="commodity" id="PlaceHolderForPreId-trip-info-commodity">
                                <label>
                                    Commodity
                                </label>
                                <!--plug in value for the commodity-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-commodity" autocomplete="on" value="" disabled>   
                            </div>
                            <div class="tractor" id="PlaceHolderForPreId-trip-info-tractor">
                                <label>
                                    Tractor
                                </label>
                                <!--plug in default value for the tractor if no tractor is assigned-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-tractor" autocomplete="on" value="" disabled>  
                            </div>
                            <div class="trailer" id="PlaceHolderForPreId-trip-info-trailer">
                                <label>
                                    Trailer
                                </label>
                                <!--plug in default value for the trailer if not trailer is assigned-->
                                <input type="text" name="PlaceHolderForPreId-trip-info-trailer" autocomplete="on" value="" disabled> 
                            </div>
                            <div class="trip-delay" id="PlaceHolderForPreId-trip-info-trip-delay">
                                <label>
                                    Trip Delay
                                </label>
                                <input type="radio" name="PlaceHolderForPreId-trip-info-trip-delay" value="Yes" disabled>Yes
                                <input type="radio" name="PlaceHolderForPreId-trip-info-trip-delay" value="No" checked="checked" disabled>No
                            </div>
                            <div class="tank-wash" id="PlaceHolderForPreId-trip-info-tank-wash">
                                <label>
                                    Tank Wash
                                </label>
                                <input type="radio" name="PlaceHolderForPreId-trip-info-tank-wash" value="Yes" disabled>Yes
                                <input type="radio" name="PlaceHolderForPreId-trip-info-tank-wash" value="No" checked="checked" disabled>No
                            </div>
                            <div class="dead-head" id="PlaceHolderForPreId-trip-info-dead-head">
                                <label>
                                    Dead Head
                                </label>
                                <input type="radio" name="PlaceHolderForPreId-trip-info-dead-head" value="Yes" disabled>Yes
                                <input type="radio" name="PlaceHolderForPreId-trip-info-dead-head" value="No" checked="checked" disabled>No
                            </div>
                            <div class="buttons">
                                <a class="button edit" id="PlaceHolderForPreId-trip-info-edit" href="javascript:void(0)" onclick="editEntry('PlaceHolderForPreId-trip')">Edit</a>
                            </div>
                            <!--add button for delete function-->
                        </div>
                    </div>
                    <div class="trip" id="add-trip-day-3">
                        <a href="javascript:void(0)" onclick="addTrip('day-3')">add trip</a>
                    </div>
                </div>

                <div class="right-column-days" name="day-4">
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
