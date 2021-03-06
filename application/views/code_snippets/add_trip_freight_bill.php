<!--replace PlaceHolderForPreId with DriverId_Day_TripNumberOfTheDay-->

<!--adding a freight bill:STEP1-->
<!--check to make sure the freight bill does not already exist in the local database or is assigned to another driver-->
<!--check to make sure the freight bill does not have a trip associated with it in TMW-->
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

<!--adding a freight bill:STEP2-->
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