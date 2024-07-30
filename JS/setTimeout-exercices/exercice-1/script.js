let title = document.createElement("h1");
document.body.append(title);
let text = "Keller";
let i = 0;

function typeText() {
    if (i < text.length) {
        title.innerHTML += text.charAt(i);
        i++
    } else {
        clearInterval();
    }
}

setInterval(typeText, 1000);