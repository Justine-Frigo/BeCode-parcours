let userNum = 0;
let newNum = 0;
let n = parseInt(prompt("Please pick a number:"));

for (i = 1; i <= n; i++) {
    userNum = parseInt(prompt("Pick another one:"));
    newNum += userNum;
}

alert(newNum);