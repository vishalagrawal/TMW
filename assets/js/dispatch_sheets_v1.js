/* 
 *
 *	function to toggle the detail box for driver information and trip information 
 *
 */
function toggleDetail(div_id)
{
	if(document.getElementById(div_id+'-info').className.split(' ').indexOf('displaying-div') < 0)
	{
		document.getElementById(div_id+'-info').style.display = 'block';
		document.getElementById(div_id+'-info').className += ' displaying-div';
	}
	else
	{
		document.getElementById(div_id+'-info').style.display = 'none';
		document.getElementById(div_id+'-info').className = document.getElementById(div_id+'-info').className.replace( /(?:^|\s)displaying-div(?!\S)/g , '' );
	}
}

/* 
 *
 *	function to go to previous date 
 *
 */
function previousDay()
{
	// get the current date
	var current_start_date = document.getElementById('start-date').innerHTML;
	
	// update the dates in the header
	document.getElementById('start-date').innerHTML = incrementDate(current_start_date,-1,'long');
	document.getElementById('start-date-plus-1').innerHTML = incrementDate(current_start_date,0,'long');
	document.getElementById('start-date-plus-2').innerHTML = incrementDate(current_start_date,1,'long');
	document.getElementById('start-date-plus-3').innerHTML = incrementDate(current_start_date,2,'long');

	// update entries for each day 
	var day4 = document.getElementsByName('day-4');
	var day3 = document.getElementsByName('day-3');
	var day2 = document.getElementsByName('day-2');
	var day1 = document.getElementsByName('day-1');

	for(var i=0; i<day4.length; i++)
	{
		day4[i].innerHTML = day3[i].innerHTML;
		day3[i].innerHTML = day2[i].innerHTML;
		day2[i].innerHTML = day1[i].innerHTML;
		/*-------------------- update code to get the entry for the next day --------------------*/
		day1[i].innerHTML = '<a class="trip">add trip</a>';
	}

	// update the date range
	document.getElementById('date-range').innerHTML = incrementDate(current_start_date,-1,'short') + ' - ' + incrementDate(current_start_date,2,'short');;
}

/* 
 *	
 *	function to go to next date 
 *
 */
function nextDay()
{
	// get the current date from the headers
	var current_start_date = document.getElementById('start-date').innerHTML;
	
	// update the dates in the header
	document.getElementById('start-date').innerHTML = incrementDate(current_start_date,1,'long');
	document.getElementById('start-date-plus-1').innerHTML = incrementDate(current_start_date,2,'long');
	document.getElementById('start-date-plus-2').innerHTML = incrementDate(current_start_date,3,'long');
	document.getElementById('start-date-plus-3').innerHTML = incrementDate(current_start_date,4,'long');

	// update entries for each day 
	var day1 = document.getElementsByName('day-1');
	var day2 = document.getElementsByName('day-2');
	var day3 = document.getElementsByName('day-3');
	var day4 = document.getElementsByName('day-4');

	for(var i=0; i<day4.length; i++)
	{
		day1[i].innerHTML = day2[i].innerHTML;
		day2[i].innerHTML = day3[i].innerHTML;
		day3[i].innerHTML = day4[i].innerHTML;
		/*-------------------- update code to get the entry for the next day --------------------*/
		day4[i].innerHTML = '<a class="trip">add trip</a>';
	}

	// update the date range
	document.getElementById('date-range').innerHTML = incrementDate(current_start_date,1,'short') + ' - ' + incrementDate(current_start_date,4,'short');;
}

/*
 *
 *	function to increment the date positively or negatively 
 *
 */
function incrementDate(given_date,number_of_days,type)
{
	// array to store days
	var day = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	
	// array to store months
	var month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

	// convert given_date to javascript date
	var date = new Date(given_date);

	// increment date by number of days
	date.setDate(date.getDate() + number_of_days);
	
	// return new date with required format
	if(type === 'long')
	{
		return day[date.getDay()]+', '+month[date.getMonth()]+' '+date.getDate()+' '+date.getFullYear();
	}
	else
	{
		return month[date.getMonth()]+' '+date.getDate()+', '+date.getFullYear();
	}
}
 
/*
 *
 *	function to add a trip to the given driver and day
 *
 */
function addEntry(driverID_date,tripNumber)
{
	var addEntryDiv = document.getElementsByName(driverID_date+'_'+tripNumber);
	if(addEntryDiv.length > 1)
	{
		// do something here and check for error!!
		alert('please refresh your page');
	}
	else
	{
		addEntryDiv[0].innerHTML = addEntry_free_form(driverID_date,tripNumber+1);
	}
}

/*
 *
 *	function that returns the string of free form
 *
 */
function addEntry_free_form(driverID_date,tripNumber)
{
	return '<div class="trip" name="" id="PlaceHolderForPreId-trip"><div class="trip-id top" id="PlaceHolderForPreId-trip-id" onclick="toggleDetail(&quot;PlaceHolderForPreId-trip&quot;)">new trip</div><div class="trip-info" id="PlaceHolderForPreId-trip-info"><div class="trip-type" id="PlaceHolderForPreId-trip-info-trip-type"><label>Trip Type</label><!--add onchange function when the selected option changes--><select><option value="free-form" selected>Free Form</option><option value="freight-bill">Freight Bill</option><option value="trip-number">Trip Number</option><select></div><div class="shipper-info" id="PlaceHolderForPreId-trip-info-shipper"><label>Shipper</label><input type="text" name="PlaceHolderForPreId-trip-info-shipper" autocomplete="on"></div><div class="pick-up-window" id="PlaceHolderForPreId-trip-info-pick-up-window"><label>Pick Up Window</label><input type="text" name="PlaceHolderForPreId-trip-info-pick-up-window" autocomplete="on"></div><div class="consignee-info" id="PlaceHolderForPreId-trip-info-consignee"><label>Consignee</label><input type="text" name="PlaceHolderForPreId-trip-info-consignee" autocomplete="on"></div><div class="delivery-window" id="PlaceHolderForPreId-trip-info-delivery-window"><label>Delivery Window</label><input type="text" name="PlaceHolderForPreId-trip-info-delivery-window" autocomplete="on"></div><div class="commodity" id="PlaceHolderForPreId-trip-info-commodity"><label>Commodity</label><input type="text" name="PlaceHolderForPreId-trip-info-commodity" autocomplete="on"></div><div class="tractor" id="PlaceHolderForPreId-trip-info-tractor"><label>Tractor</label><!--assign default tractor of driver to value--><input type="text" name="PlaceHolderForPreId-trip-info-tractor" autocomplete="on" value=""></div><div class="trailer" id="PlaceHolderForPreId-trip-info-trailer"><label>Trailer</label><!--assign default trailer of driver--><input type="text" name="PlaceHolderForPreId-trip-info-trailer" autocomplete="on" value=""></div><div class="trip-delay" id="PlaceHolderForPreId-trip-info-trip-delay"><label>Trip Delay</label><input type="radio" name="PlaceHolderForPreId-trip-info-trip-delay" value="Yes">Yes<input type="radio" name="PlaceHolderForPreId-trip-info-trip-delay" value="No" checked="checked">No</div><div class="tank-wash" id="PlaceHolderForPreId-trip-info-tank-wash"><label>Tank Wash</label><input type="radio" name="PlaceHolderForPreId-trip-info-tank-wash" value="Yes">Yes<input type="radio" name="PlaceHolderForPreId-trip-info-tank-wash" value="No" checked="checked">No</div><div class="dead-head" id="PlaceHolderForPreId-trip-info-dead-head"><label>Dead Head</label><input type="radio" name="PlaceHolderForPreId-trip-info-dead-head" value="Yes">Yes<input type="radio" name="PlaceHolderForPreId-trips-info-dead-head" value="No" checked="checked">No</div><div class="buttons"><a class="button save" id="PlaceHolderForPreId-trip-info-save" href="javascript:void(0)" onclick="saveEntry(&quot;PlaceHolderForPreId-trip&quot;)">Save</a></div><!--add button for delete function--></div></div>';
}

/*
 *
 *	function to make the entries editable
 *
 */
function editEntry(input_name)
{

}

/*
 *
 *	function to save the changes to the entries 
 *
 */
function saveEntry(input_name)
{

}

/*
 *
 *	function to change the trip type when a different select option is selected
 *
 */
function changeTripType(driverID_date,tripID)
{
	// check to see which value is selected
	var value = document.getElementById(driverID_date+'_'+tripID+'-type').value;

	// based on the value change the innerHTML
	if(value === 'free-form')
	{
		document.getElementById(driverID_date+'_'+tripID+'-type-details').innerHTML = changeTripType_free_form(driverID_date+'_'+tripID);
	}
	else if(value === 'freight-bill')
	{
		// do something
	}
	else if(value === 'trip-number')
	{
		// do something
	}
}

/*
 *
 *	function to change the innerHTML based on select value - free_form
 *
 */
function changeTripType_free_form(driverID_date_tripID)
{
	return '<div class="shipper-info" name="'+driverID_date_tripID+'-shipper"><label id="'+driverID_date_tripID+'-shipper-label">Shipper</label><input type="text" id="'+driverID_date_tripID+'-shipper" autocomplete="on"></div><div class="pick-up-window" name="'+driverID_date_tripID+'-pick-up-window"><label id="'+driverID_date_tripID+'-pick-up-window-label">Pick Up Window</label><input type="text" id="'+driverID_date_tripID+'-pick-up-window" autocomplete="on"></div><div class="consignee-info" name="'+driverID_date_tripID+'-consignee"><label id="'+driverID_date_tripID+'-consignee-label">Consignee</label><input type="text" id="'+driverID_date_tripID+'-consignee" autocomplete="on"></div><div class="delivery-window" name="'+driverID_date_tripID+'-delivery-window"><label id="'+driverID_date_tripID+'-delivery-window-label">Delivery Window</label><input type="text" id="'+driverID_date_tripID+'-delivery-window" autocomplete="on"></div><div class="commodity" name="'+driverID_date_tripID+'-commodity"><label id="'+driverID_date_tripID+'-commodity-label">Commodity</label><input type="text" id="'+driverID_date_tripID+'-commodity" autocomplete="on"></div><div class="tractor" name="'+driverID_date_tripID+'-tractor"><label id="'+driverID_date_tripID+'-tractor-label">Tractor</label><!--assign default tractor of driver to value--><input type="text" id="'+driverID_date_tripID+'-tractor" autocomplete="on" value="">  </div><div class="trailer" name="'+driverID_date_tripID+'-trailer"><label id="'+driverID_date_tripID+'-trailer-label">Trailer</label><!--assign default trailer of driver--><input type="text" id="'+driverID_date_tripID+'-trailer" autocomplete="on" value=""> </div><div class="trip-delay" name="'+driverID_date_tripID+'-trip-delay"><label id="'+driverID_date_tripID+'-trip-delay-label">Trip Delay</label><input type="radio" id="'+driverID_date_tripID+'-trip-delay-yes" value="Yes">Yes<input type="radio" id="'+driverID_date_tripID+'-trip-delay-no" value="No" checked="checked">No</div><div class="tank-wash" name="'+driverID_date_tripID+'-tank-wash"><label id="'+driverID_date_tripID+'-tank-wash-label">Tank Wash</label><input type="radio" id="'+driverID_date_tripID+'-tank-wash-yes" value="Yes">Yes<input type="radio" id="'+driverID_date_tripID+'-tank-wash-no" value="No" checked="checked">No</div><div class="dead-head" name="'+driverID_date_tripID+'-dead-head"><label id="'+driverID_date_tripID+'-dead-head-label">Dead Head</label><input type="radio" id="'+driverID_date_tripID+'-dead-head-yes" value="Yes">Yes<input type="radio" id="'+driverID_date_tripID+'-dead-head-no" value="No" checked="checked">No</div><div class="buttons"><a class="button save" id="'+driverID_date_tripID+'-save" href="javascript:void(0)" onclick="saveEntry(&quot;'+driverID_date_tripID+'&quot;)">Save</a></div><!--add button for delete function--></div>';
}