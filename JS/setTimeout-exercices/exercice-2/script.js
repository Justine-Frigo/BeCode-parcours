
let mainElement = document.querySelector("main");
let secondsContainer = document.getElementById("seconds");
let minutesContainer = document.getElementById("minutes");

let secondsCount = 0; 
let minutesCount = 0;

function updateSeconds(){ 
    secondsContainer.innerHTML = secondsCount;
    secondsCount++;
}

function updateMinutes(){ 
    minutesCount = Math.floor((secondsCount - 1) / 60);
    if (minutesCount < 1) {
        minutesContainer.innerHTML = "";
    }
    else if (minutesCount < 2){
        minutesContainer.innerHTML = minutesCount + " minute has passed";
    } else { 
        minutesContainer.innerHTML = minutesCount + " minutes have passed";
    }
}

setInterval(updateSeconds, 1000);
setInterval(updateMinutes, 1000);
