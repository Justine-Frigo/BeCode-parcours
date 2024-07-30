function old(day){
    let date = new Date().getTime();
    let birthDate = new Date(`${day}`).getTime();
    let timeDifference = date - birthDate;
     
    let elapsedDays = Math.floor((timeDifference / (1000 * 60 * 60 * 24)));
    
    console.log(elapsedDays);
    return elapsedDays;
    }
    
    setInterval(() => {
    
        document.getElementById("birth").innerHTML = `Jours depuis ma naissance : ${old("1995-09-12")}`;
        document.getElementById("manyDays").innerHTML = `Jours depuis le dernier Noël : ${old("2023-12-25")}`;}
        , 1000);