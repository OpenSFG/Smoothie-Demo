// Raw data variables	
var ATemp, WTemp, RH, FR, DO2, PH, lastTimeStamp;
						
// Create the charts
var aTemp = new TimeSeries(),
	wTemp = new TimeSeries(),
	rH = new TimeSeries(),
	fR = new TimeSeries(),
	dO = new TimeSeries(),
	pH = new TimeSeries();


// Add data to the series at every x second
setInterval(function() {
	// Add a random value to each object every x second	
	// Math.random() * (high - low) + low;
	lastTimeStamp = new Date(); 
	//ATemp = Math.floor((Math.random() * 2) + 29);
	ATemp = (Math.random() * (30.3 - 30.1) + 30.1).toFixed(1);
	//WTemp = Math.floor((Math.random() * 2) + 29);
	WTemp = 28.5;
	RH = Math.floor((Math.random() * 2) + 64);
	FR = Math.floor((Math.random() * 8) + 104);
	//DO2 = (Math.random() * (7.1 - 6.9) + 6.9).toFixed(1);
	DO2 = 6.8;
	//PH = (Math.random() * (7.1 - 6.9) + 6.9).toFixed(1);	
	PH = 7.1;	
		
	// Append the current sensor value to the Timeseries
	aTemp.append(new Date().getTime(), ATemp);
	wTemp.append(new Date().getTime(), WTemp);
	rH.append(new Date().getTime(), RH);
	fR.append(new Date().getTime(), FR);
	dO.append(new Date().getTime(), DO2);
	pH.append(new Date().getTime(), PH);
	
	// Store the current individual sensor value as an innerHTML element
	document.getElementById("Temp").innerHTML = "TEMPERATURE [ Ambient: " + "<span style=\"color:blue\">" + ATemp + "</span>" + "; Water: " + "<span style=\"color:yellow\">" + WTemp + "</span>" + " ]"; 
	document.getElementById("RH").innerHTML = "RELATIVE HUMIDITY: " + "<span style=\"color:yellow\">" + RH + "</span>";
	document.getElementById("FR").innerHTML = "WATER FLOW RATE: " + "<span style=\"color:yellow\">" + FR + "</span>";
	document.getElementById("Water").innerHTML = "WATER QUALITY [ DO: " + "<span style=\"color:blue\">" + DO2 + "</span>" + "; pH: " + "<span style=\"color:yellow\">" + PH + "</span>" + " ]"; 
	document.getElementById("lastTimeStamp").innerHTML = "Last Updated: " + lastTimeStamp;
	
}, 1000/*every 1s*/);

function createSmoothieChart() {
	// Uncomment the following line once you have your database working
	//get_latest_data();
	
	// Create SmoothieChart for temp
	var temp = new SmoothieChart({
		// Series line width
		millisPerPixel:100,
		// Y-scaling max value scale
		maxValueScale:0.8,
		// Interpolation
		interpolation:'step',
		// Y-scaling adjust speed
		scaleSmoothing:1,
		// Gridlines
		grid:{
			strokeStyle:'none', 
			sharpLines:true,
			verticalSections:12
		},
		// Show timestamp
		//timestampFormatter:SmoothieChart.timeFormatter,
		// Y-scaling fix min max values
		maxValue:tempMax,
		minValue:tempMin,	
		horizontalLines:[{
				color:'red',
				lineWidth:0.5,
				value:tempUL
			},{
				color:'white',
				lineWidth:0.1,
				value:tempNom
			},{
				color:'red',
				lineWidth:0.5,
				value:tempLL
			}
		]
	});
	temp.addTimeSeries(aTemp, { strokeStyle: 'blue', lineWidth: 2 });
	temp.addTimeSeries(wTemp, { strokeStyle: 'yellow', lineWidth: 2 });
	
	// Render it
	temp.streamTo(document.getElementById("temp"), 1000 /*delay*/);	
	
	// Create SmoothieChart for humidity
	var humidity = new SmoothieChart({
		// Series line width
		millisPerPixel:100,
		// Y-scaling max value scale
		maxValueScale:0.8,
		// Interpolation
		interpolation:'step',
		// Y-scaling adjust speed
		scaleSmoothing:1,
		// Gridlines
		grid:{
			strokeStyle:'none', 
			sharpLines:true,
			verticalSections:12
		},
		// Show timestamp
		//timestampFormatter:SmoothieChart.timeFormatter,
		// Y-scaling fix min max values
		maxValue:rhMax,
		minValue:rhMin,	
		horizontalLines:[{
				color:'red',
				lineWidth:0.5,
				value:rhUL
			},{
				color:'white',
				lineWidth:0.1,
				value:rhNom
			},{
				color:'red',
				lineWidth:0.5,
				value:rhLL
			}
		]
	});
	humidity.addTimeSeries(rH, { strokeStyle: 'yellow', lineWidth: 2 });	
		
	// Render it				
	humidity.streamTo(document.getElementById("humidity"), 1000 /*delay*/);
	
	// Create SmoothieChart for fR
	var flowRate = new SmoothieChart({
		// Series line width
		millisPerPixel:100,
		// Y-scaling max value scale
		maxValueScale:0.8,
		// Interpolation
		interpolation:'step',
		// Y-scaling adjust speed
		scaleSmoothing:1,
		// Gridlines
		grid:{
			strokeStyle:'none', 
			sharpLines:true,
			verticalSections:12
		},
		// Show timestamp
		//timestampFormatter:SmoothieChart.timeFormatter,
		// Y-scaling fix min max values
		maxValue:frMax,
		minValue:frMin,	
		horizontalLines:[{
				color:'red',
				lineWidth:0.5,
				value:frUL
			},{
				color:'white',
				lineWidth:0.1,
				value:frNom
			},{
				color:'red',
				lineWidth:0.5,
				value:frLL
			}
		]
	});
	flowRate.addTimeSeries(fR, { strokeStyle: 'yellow', lineWidth: 2 });
	
	// Render it
	flowRate.streamTo(document.getElementById("flowRate"), 1000 /*delay*/);
	
	// Create SmoothieChart for pH/dO
	var waterQ = new SmoothieChart({
		// Series line width
		millisPerPixel:100,
		// Y-scaling max value scale
		maxValueScale:0.8,
		// Interpolation
		interpolation:'step',
		// Y-scaling adjust speed
		scaleSmoothing:1,
		// Gridlines
		grid:{
			strokeStyle:'none', 
			sharpLines:true,
			verticalSections:12
		},
		// Show timestamp
		//timestampFormatter:SmoothieChart.timeFormatter,
		// Y-scaling fix min max values
		maxValue:pHdOMax,
		minValue:pHdOMin,	
		horizontalLines:[{
				color:'red',
				lineWidth:0.5,
				value:pHdOUL							
			},{
				color:'white',
				lineWidth:0.1,
				value:pHdONom
			},{
				color:'red',
				lineWidth:0.5,
				value:pHdOLL
			}
		]
	});
	
	waterQ.addTimeSeries(pH, { strokeStyle: 'yellow', lineWidth: 2 });
	waterQ.addTimeSeries(dO, { strokeStyle: 'blue', lineWidth: 2 });
	
	// Render it
	waterQ.streamTo(document.getElementById("waterQ"), 1000 /*delay*/);												
}

// Make sure that the canvas is just as wide as its parent
jQuery(document).ready( function(){
	//Get the canvas & context 
	var c = $('canvas');
	var ct = c.get(0).getContext('2d');
	var container = $(c).parent();
	
	//Run function when browser resizes
	$(window).resize( respondCanvas );
	
	function respondCanvas(){ 
		c.attr('width', $(container).width() ); //max width
		c.attr('height', $(container).height() ); //max height
	
		//alert("firing up");		
	}
	
	//Initial call 
	respondCanvas();

});