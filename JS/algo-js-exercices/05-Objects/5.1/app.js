let serieName = prompt("What's your favorite series?");
let productionYear = prompt("What's its production year?");
let n = prompt("How many actors?");
let cast = [];

for (i = 1; i <= n; i++) {
  let castMember = prompt("Who are they?");
  cast.push(castMember);
}

function askTvSerie(serieName, productionYear, castMembers) {
  return {
    name: serieName,
    year: productionYear,
    casters: castMembers.join(", "),
  };
}

let display = askTvSerie(serieName, productionYear, cast);

let jsonDisplay = JSON.stringify(display, null, 2);

alert(jsonDisplay);