$(document).ready(function(){
	$('#submit').click(function() {
	 	$.ajax({
			url: "function.php"
		});
	});
});

//divide the input into strings
var inputData = document.getElementById("inputData").innerHTML;
var splitInputData = inputData.split("%");
var reverseArray = splitInputData.reverse();
var myText = "";
var i;
var arrayLength = reverseArray.length;

if (arrayLength <= 20) {
	//-1 so that I won't take the first empty array
	for (i = 0; i < reverseArray.length - 1; i++) {
		myText += "<p>" + reverseArray[i] + "</p><hr>";
		document.getElementById("inputDataList").innerHTML = myText;
	}
} else {
	for (i = 0; i < 20; i++) {
		myText += "<p>" + reverseArray[i] + "</p><hr>";
		document.getElementById("inputDataList").innerHTML = myText;
	}
}