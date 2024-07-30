let user=prompt("What's your favorite number?");
let number=parseInt(user);

while (number !==42){
    let i=parseInt(prompt("Are you sure?"));
    if(i==42){
        break;
    }
}