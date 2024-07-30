/**
* Gives a random number between 1 and 10
* This function doesn't take any parameter  
* @return {Number}       Generated random number
*/

function rand10() {
    return Math.floor(Math.random() * (10 - 1 + 1) + 1);
  }
  
  console.log(rand10());