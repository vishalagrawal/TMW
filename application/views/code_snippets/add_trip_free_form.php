<!--replace PlaceHolderForPreId with DriverId_Day_TripNumberOfTheDay-->


<!--adding a free-form trip-->
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