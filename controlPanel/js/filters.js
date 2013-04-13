'use strict';

/* Filters */

angular.module('controlPanel.filters', []).
  filter('securityQuestion', function () {
  	return function (input) {
  		var qVal = parseInt(input.substring(1)),
  			question;

  		switch(qVal){
  			case 0:
  				question = "What was the type of your first car?";
  				break;
  			case 1:
  				question = "What city were you born in?";
  				break;
  			case 2:
  				question = "What is your favorite pet's name?";
  				break;
  			case 3:
  				question = "What is your favorite TV show?";
  				break;
  			case 4:
  				question = "What is your favorite resturant?";
  				break;
  			case 5:
  				question = "What is your favorite food?";
  				break;
  			case 6:
  				question = "Who is your favorite actor?";
  				break;
  			case 7:
  				question = "Who is your favorite athlete?";
  				break;
  			case 8:
  				question = "Who is your favorite author?";
  				break;
  			case 9:
  				question = "What is the name of the high school you attended?";
  				break;
  			case 10:
  				question = "What is the name of your first pet?";
  				break;
  			case 11:
  				question = "What is your father's middle name?";
  				break;
  			case 12:
  				question = "What is the name of the street on which you grew up?";
  				break;
  			case 13:
  				question = "What is the last name of your first boss?";
  				break;
  			case 14:
  				question = "What is the last name of your favorite teacher?";
  				break;
  			case 15:
  				question = "What is the name of your favorite book?";
  				break;
  			case 16:
  				question = "What was your favorite activity in grade school?";
  				break;
  			case 17:
  				question = "What was the name of the city in which you spent your teen years?";
  				break;
  			case 18:
  				question = "What was the first thing you saved up to buy?";
  				break;
  			case 19:
  				question = "What is the name of the hospital where you were born?";
  				break;
  			case 20:
  				question = "What was the first foreign country you visited?";
  				break;
  			case 21:
  				question = "Who is your favorite historical figure?";
  				break;
  			case 22:
  				question = "What is the name of the city where your parents first met?";
  				break;
  			case 23:
  				question = "What was the profession of your maternal grandmother?";
  				break;
  			case 24:
  				question = "What was the first name of your best friend from high school?";
  				break;
  			default:
  				question = "Error Processing Security Question";
  		}
  		return question;
  	}
  });
