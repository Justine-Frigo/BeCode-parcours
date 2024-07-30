/**
Calculates the distance between a point A (a) and a point B (b)
* @param {Number}     The X coordinates of the point A
* @param {Number}     The Y coordinates of the point A
* @param {Number}     The X coordinates of the point B
* @param {Number}     The Y coordinates of the point B
* @return {Number}    Returns the mathematical formula to calculate a distance
*/

function calcDistance(a1, b1, a2, b2) {
  let a = b2 - b1;
  let b = a2 - a1;
  return Math.sqrt(a * a + b * b).toFixed(2);
}

let a1 = prompt("What're the X coordinates of A?");
let a2 = prompt("What're the Y coordinates of A?");
let b1 = prompt("What're the X coordinates of B?");
let b2 = prompt("What're the Y coordinates of B?");
console.log(calcDistance(a1, b1, a2, b2));
