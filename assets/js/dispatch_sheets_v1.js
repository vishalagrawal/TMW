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
  *	function to add a trip to the given driver and day
  *
  */
function addTrip(driver_day_id)
{
}

