function displayDate(time) {
    let date = new Date();
    let timezone = time;
    let hours = date.getUTCHours() + timezone;
  
    if (hours === -1) {
      hours = 23;
    }
  
    let minutes = date.getUTCMinutes();
    let seconds = date.getUTCSeconds();
    let day = date.getUTCDate();
    let month = date.getUTCMonth() + 1;
    let year = date.getUTCFullYear();
  
    
    let formattedDate = `${day}/${month}/${year}`;
  
    let formattedTime = `${hours}:${minutes}:${seconds}`;
  
    console.log(date);
    console.log(formattedDate + " " + formattedTime);
  
    return `${formattedDate} ${formattedTime}`;
}
  
setInterval(() => {
    document.getElementById("anchorage").innerHTML = `${displayDate(-8)}`;
    document.getElementById("reykjavik").innerHTML = displayDate(0);
    document.getElementById("saintpetersburg").innerHTML = displayDate(+3);
    document.getElementById("bruxelles").innerHTML = displayDate(+2);
}, 1000);
