/**
* Calculates the surface of a rectangle
* @param {Number} width      The width of your rectangle
* @param {Number} length      The length of your rectangle
       
* @return {Number}       The calculated surface
*/

function calcSurface(width, length) {
    return width * length;
  }
  
  let length = Number(prompt("What's the length of your rectangle?"));
  let width = Number(prompt("What's the width of your rectangle?"));
  
  alert("The surface of your rectangle is " + calcSurface(width, length));