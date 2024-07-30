function randomizeCast(tvSerie) {
    let castCopy = [...tvSerie.casters.split(", ")];
    let randomizedCast = [];
  
    while (castCopy.length > 0) {
      let randomIndex = Math.floor(Math.random() * castCopy.length);
      let randomActor = castCopy.splice(randomIndex, 1)[0];
      randomizedCast.push(randomActor);
    }
  
    return randomizedCast;
  }
  
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
  
  let tvSerie = askTvSerie(serieName, productionYear, cast);
  let jsonDisplay = JSON.stringify(tvSerie, null, 2);
  
  let newCast = randomizeCast(tvSerie);
  let jsonNewCast = JSON.stringify(newCast, null, 2);
  
  alert(
    "Original TV Serie:\n" +
      jsonDisplay +
      "\n Randomized Cast for the Next Serie:\n" +
      jsonNewCast
  );