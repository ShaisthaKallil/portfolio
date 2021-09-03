// JavaScript Document

/////////////////////////////////////////////
// Computer guesses a number between 0 and //
// 5 randomly.Decimal avoided using floor  //
// method here                             //
/////////////////////////////////////////////

var computer_finger_num = Math.floor((Math.random() * 5) + 1);

/////////////////////////////////////////////
// Access display box elements - global    //
/////////////////////////////////////////////

var message_success = document.getElementById('success');
var message_fail = document.getElementById('fail');
var message_over = document.getElementById('over');

/////////////////////////////////////////////
// Access button elements - global         //
/////////////////////////////////////////////

var el_submit = document.getElementById('submit');
var el_reset = document.getElementById('reset');

/////////////////////////////////////////////////////
// Counter variable declared to keep track of lives//
// which is limited to 3 here  - global            //
/////////////////////////////////////////////////////
 
var counter = 0;

/////////////////////////////////////////////
// Add Event listener to both buttons      //
/////////////////////////////////////////////

el_reset.addEventListener("click", tryAgain);
el_submit.addEventListener("click", startGame);

//////////////////////////////////////////////////////
// Function startGame is called with click action of// 
// submit button.                                   //
// Action : validates user input value              //
//          increments counter                      //
//			calls function checker()if condition of //
//          counter is satisfied                    //
//////////////////////////////////////////////////////

function startGame(){
	
	var user_finger_num = document.getElementById("guess").value;

	if(user_finger_num > 5){
		alert("Invalid Number");
	}
	
	counter++;
	
	if(counter <= 3){
		
		checker(user_finger_num);
		
	}
	
}// End of startGame function
	
////////////////////////////////////////////////////////
// Function checker is called from startGame fcn      // 
// user's guess value is the argument                 //
// Action : Access display box elements               //
//          Uses condition to check user guess value  //
//          against computer's value                  //
//			Message displayed in display boxes        //
//          game life line coin disappears            //
////////////////////////////////////////////////////////

function checker(guessVal){	
 
 	var one = document.getElementById('one');
	var two = document.getElementById('two');
	var three = document.getElementById('three');

	
	if (guessVal == computer_finger_num){
		message_success.style.display = "block";
		message_fail.style.display = "none";	
		message_success.innerHTML = "<p>Congratulations !! Your guess was correct.</p>";
		el_submit.style.display = "none";
		
			
	}else {
		message_success.style.display = "none";	  
		message_fail.style.display = "block";
		message_fail.innerHTML = "<p>Sorry. Incorrect Guess. </p>";
		
		if(counter == 1){
		one.style.display = "none";
		}else if(counter ==2){
		two.style.display = "none";
		}else{
		three.style.display = "none";	
	     message_fail.style.display = "none";
		 message_over.style.display = "block";
		 message_over.innerHTML = "<span> GAME OVER - Number was : </span>"  + computer_finger_num;
		 el_submit.style.display = "none";
		}
		
	}
	
 }// End of checker function
 
//////////////////////////////////////////////////////
// Function tryAgain is called with click action of // 
// reset button.                                    //
// Action : Counter is reset                        //
//          Provides user to play new game with new //
//          computer picked value                   //
//          game display is restore back to original//
//          state                                   //
//////////////////////////////////////////////////////
 
 function tryAgain(){
	counter = 0;
	
	one.style.display = "inline-block";
	two.style.display = "inline-block";
	three.style.display = "inline-block"; 
	
	message_over.style.display = "none";
	message_fail.style.display = "none";
	message_success.style.display = "none";
	
	el_submit.style.display = "inline-block";
	computer_finger_num = Math.floor((Math.random() * 5) + 1);
 }
		
			