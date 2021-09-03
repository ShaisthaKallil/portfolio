//intialize variables
var fname, lname, error1,gender, freqVisit, expVisit, favFood, newFood;

//function to call document.getElementById()
function _(x){
	return document.getElementById(x);
}

//function to validate user input in phase 1 - fname,lname,gender
function validatePhase1(){
	fname = _("firstName").value;
	lname = _("lastName").value;
	gender = _("gender").value;
	
	//Conditional Statement
	if(fname.length > 2 && lname.length > 2 && gender.length > 0){
		//validated , hide phase1
		_("phase1").style.display = "none";
		
		//display , show phase2
		_("phase2").style.display = "block"
		
		//update progress bar value
		_("progressBar").value = "20";
		
		//update phase number status
		_("status").innerHTML = "Phase 2 of 3";
	}else{
		//display error
		_("error1").innerHTML = "<h3>Please complete the fields</h3>";
	}
}//End of validatePhase1()


//function to validate user input in phase 2 - freqVisit
function validatePhase2(){
	freqVisit = document.querySelector('input[name="frequency"]:checked').value;
	
	//Conditional Statement
	if(freqVisit.length > 0){
		//validated , hide phase1
		_("phase2").style.display = "none";
		
		//display , show phase2
		_("phase3").style.display = "block"
		
		//update progress bar value
		_("progressBar").value = "40";
		
		//update phase number status
		_("status").innerHTML = "Phase 3 of 5";
	}	
	
}//End of validatePhase2()


//function to validate user input in phase 3 - expVisit
function validatePhase3(){
	expVisit = document.querySelector('input[name="experience"]:checked').value;
	
	//Conditional Statement
	if(expVisit.length > 0){
		//validated , hide phase1
		_("phase3").style.display = "none";
		
		//display , show phase2
		_("phase4").style.display = "block"
		
		//update progress bar value
		_("progressBar").value = "60";
		
		//update phase number status
		_("status").innerHTML = "Phase 4 of 5";
	}
	
}//End of validatePhase3()


//function to validate user input in phase 4 - favFood
function validatePhase4(){
	favFood = document.querySelector('input[name="favorite"]:checked').value;
	
	//Conditional Statement
	if(favFood.length > 0){
		//validated , hide phase1
		_("phase4").style.display = "none";
		
		//display , show phase2
		_("phase5").style.display = "block"
		
		//update progress bar value
		_("progressBar").value = "80";
		
		//update phase number status
		_("status").innerHTML = "Phase 5 of 5";
	}		
}//End of validatePhase4()


//function to validate user input in phase 5 - newFood
function validatePhase5(){
	newFood = document.querySelector('input[name="new"]:checked').value;
	
	//Conditional Statement
	if(newFood.length > 0){
		//validated , hide phase1
		_("phase5").style.display = "none";
		
		//display , show phase2 with values
		_("show_summary").style.display = "block";
		_("display_fname").innerHTML = fname;
		_("display_lname").innerHTML = lname;
		_("display_gender").innerHTML = gender;
		
		_("display_ans_one").innerHTML = freqVisit;
		_("display_ans_two").innerHTML = expVisit;
		_("display_ans_three").innerHTML = favFood;
		_("display_ans_four").innerHTML = newFood;
		
		//update progress bar value
		_("progressBar").value = "100";
		
		//update phase number status
		_("status").innerHTML = "Summary";
	}	
}//End of validatePhase5()

//function to submit Form and display summary
function submitForm(){
		_("survey").method = "post" ;
		//_("survey").action = "my_parser.php";
		_("survey").submit();
	
}//End of submitForm()
