/**
 * Gives a random number between 1 and 10
 * This function doesn't take any parameter
 * @return {Number}       Generated random number
 */

function rand10() {
    return Math.floor(Math.random() * (10 - 1 + 1) + 1);
  }
  
  /**
   * Gives one or multiple random numbers based on the user's input
   *
   * @param {Number} n  Number the user inputs
   * Pushes the number(s) to an array then displays it
   */
  
  function multiRand(n) {
    let arr = [];
    for (i = 1; i <= n; i++) {
      arr.push(rand10());
    }
    alert(arr.toString());
  }
  
  n = Number(prompt("How much numbers do you want?"));
  
  multiRand(n);