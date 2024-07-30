let min = parseFloat(prompt("Enter the minimum number:"));
let max = parseFloat(prompt("Enter the maximum number:"));

if (min > max) {
  alert("Error: The minimum value cannot be greater than the maximum value.");
} else {
  let current = parseFloat(prompt("Enter the current number:"));

  if (current >= min && current <= max) {
    alert("The current number is between the minimum and maximum values.");
  } else {
    alert("The current number is NOT between the minimum and maximum values.");
  }
}