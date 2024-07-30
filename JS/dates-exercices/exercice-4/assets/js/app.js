let time = document.querySelector(".time");
let year = document.querySelector(".year");
let month = document.querySelector(".month");
let days = document.querySelector(".day");
let dayWeek = document.querySelector(".day-week");
let hour24 = true;
let parameters = {
  hour12: false,
  hour: "numeric",
  minute: "numeric",
  second: "numeric",
};

function displayTime() {
  let date = new Date();
  time.innerHTML = date.toLocaleTimeString("en-US", parameters);
  year.innerHTML = date.getFullYear();
  month.innerHTML = date.toLocaleDateString("en-US", { month: "short" });
  days.innerHTML = date.getDate();
 dayWeek.innerHTML = date.toLocaleDateString("en-US", {
    weekday: "short",
  });
}

time.addEventListener("click", () => {
  let date = new Date();

  if (hour24) {
    parameters = {
      hour12: false,
      hour: "numeric",
      minute: "2-digit",
      second: "numeric",
    };
    time.innerHTML = date.toLocaleTimeString("en-US", parameters);
    hour24 = false;
  } else {
    parameters = {
      hour12: true,
      hour: "numeric",
      minute: "2-digit",
      second: "numeric",
    };
    let newTime = date.toLocaleTimeString("en-US", parameters).trim();
    console.log(newTime);
    time.innerHTML = date.toLocaleTimeString("en-US", parameters);
    hour24 = true;
  }
});

setInterval(displayTime, 1000);
