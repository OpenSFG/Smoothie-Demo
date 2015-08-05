// Ref: ATemp, WTemp, RH, FR, DO2, PH;

// Sensor Limits and Means
var tempLL = 25,
	tempUL = 35,
	tempMin = 20,
	tempNom = 30,
	tempMax = 40,
	rhLL = 25,
	rhUL = 70,
	rhMin = 10,
	rhNom = 60,
	rhMax = 85,
	frLL = 50,
	frUL = 'none',
	frMin = 0,
	frNom = 105,
	frMax = 300,	// Max pump flow rate
	pHdOLL = 6.5,
	pHdOUL = 7.5,
	pHdOMin = 6.0,
	pHdONom = 7.0,
	pHdOMax = 8.0;

// Auto adjust min/max
function adjustMinMax(){
	frMax = (FR > frMax) ? (FR + (FR * 0.10)) : frMax;	
	frMin = (FR < frMin) ? (FR + (FR * 0.10)) : frMin;
}	