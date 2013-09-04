/* function to toggle the detail box for driver information and trip information */
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

/* function to go to previous date */
function previousDay()
{
	// get the current date from the headers
	var current_start_date = document.getElementById('start-date').innerHTML;
	
	// update the dates in the header
	document.getElementById('start-date').innerHTML = incrementDate(current_start_date,-1);
	document.getElementById('start-date-plus-1').innerHTML = incrementDate(current_start_date,0);
	document.getElementById('start-date-plus-2').innerHTML = incrementDate(current_start_date,1);
	document.getElementById('start-date-plus-3').innerHTML = incrementDate(current_start_date,2);

	// update entries for each day 

	/* works only for one row --- update code for multiple rows */
	document.getElementById('day-4').innerHTML = document.getElementById('day-3').innerHTML;
	document.getElementById('day-3').innerHTML = document.getElementById('day-2').innerHTML;
	document.getElementById('day-2').innerHTML = document.getElementById('day-1').innerHTML;
	document.getElementById('day-1').innerHTML = '<div class="trip">add trip</div>';
}

/* function to go to previous date */
function nextDay()
{
	// get the current date from the headers
	var current_start_date = document.getElementById('start-date').innerHTML;
	
	// update the dates in the header
	document.getElementById('start-date').innerHTML = incrementDate(current_start_date,1);
	document.getElementById('start-date-plus-1').innerHTML = incrementDate(current_start_date,2);
	document.getElementById('start-date-plus-2').innerHTML = incrementDate(current_start_date,3);
	document.getElementById('start-date-plus-3').innerHTML = incrementDate(current_start_date,4);

	// update entries for each day 

	/* works only for one row --- update code for multiple rows */
	document.getElementById('day-1').innerHTML = document.getElementById('day-2').innerHTML;
	document.getElementById('day-2').innerHTML = document.getElementById('day-3').innerHTML;
	document.getElementById('day-3').innerHTML = document.getElementById('day-4').innerHTML;
	document.getElementById('day-4').innerHTML = '<div class="trip">add trip</div>';
}


function incrementDate(given_date,number_of_days)
{
	var day = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	var month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

	// convert given_date to javascript date
	var date = new Date(given_date);

	// increment date by number of days
	date.setDate(date.getDate() + number_of_days);
	
	// return new date with required format
	return day[date.getDay()]+', '+month[date.getMonth()]+' '+date.getDate()+' '+date.getFullYear();
}
