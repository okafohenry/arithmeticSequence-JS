<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<br><br>
		<input type="textbox" name="input" placeholder="Enter a number"  id="userInput"/><br>
		
		<input type="submit" value="Add to Array" onclick="addItem()">

		<input type="submit" value="Calculate" onclick="calc(Nums)">
	

		<!--displays the input array-->
		<div id="inputRes"></div><br>
		<!--displays the resulting array-->
		<div id="result"></div>
	</center>
	<script>
		//creating and initializing an empty array
		var Nums = [];
		//parsing textbox value into JS variable
		var txtbox = document.getElementById("userInput");

		function addItem(){
			//form validity check, does nothing if the textbox is empty
				if(txtbox.value === ""){
				alert("please ensure that field is not empty!");
				return;
			    }
			/*
			Adds user input to Nums array, if the textbox is NOT empty
			And clears the textbox thereafter
			*/
				Nums.push(txtbox.value);
				txtbox.value = "";
		}

		function calc(array){
			var  mult;
			var newArray = [];
			var result;
			var zero;
			/*
			  iterates through the operation as long as the number of elements in 
			  Nums[] array continues.
			  The first two lines where mult=1 and result=1 initialises both variables
			  at the start of each iteration.
			*/
		 	for (var i = 0; i < array.length; i++){
		 		mult = 1;
		 		result = 1;
		 		/*
		 		 This embedded loop multiplies all elements in the nums array (as long as the number of
		 		 elements continue). After its operation on the last element, the lopps breaks out into the outer loop and continues to execute subsequent lines of code.
		 		*/
		 		for(var x=0; x < array.length; x++){
		 		 	mult = mult * array[x];
		 		 }
		 		 /*
				   The total Multiplication of all Elements, divided by a specific Element will result to its exception. 
		 		 */
		 		 result = mult / array[i];
		 		 newArray.push(result);
		 		
		 	}

			document.getElementById("inputRes").innerHTML = "the input array = [" + Nums + "]";
			document.getElementById("result").innerHTML = "the resulting array = [" + newArray + "]";

			
		}
	</script>
</body>
</html>