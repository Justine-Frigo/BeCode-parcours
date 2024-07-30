function inFuture() {
    let date = new Date().getTime();
    let hoursInputValue = document.getElementById("hours").value;
    let timeDifference = date + hoursInputValue * 1000 * 60 * 60;
    let dateNew = new Date(timeDifference);
    document.getElementById("whatTime").innerHTML = `${dateNew}`;
  }

  let hoursInputField = document.getElementById("hours");

  hoursInputField.addEventListener("keyup", inFuture);
  hoursInputField.addEventListener("change", inFuture);
