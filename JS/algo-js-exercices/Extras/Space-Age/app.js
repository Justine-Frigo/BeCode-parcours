age = prompt("Quel âge avez-vous?") * 325.25 * 24 * 60 * 60;

function spaceAge(age) {
  if (age <= 0) {
    return null;
  }
  let mercuryAge = age / 31557600 / 0.2408467;
  let venusAge = age / 31557600 / 0.61519726;
  let marsAge = age / 31557600 / 1.8808158;
  let jupiterAge = age / 31557600 / 11.862615;
  alert(
    "Mercury: " +
      mercuryAge.toFixed(2) +
      " years, " +
      " Venus: " +
      venusAge.toFixed(2) +
      " years, " +
      " Mars: " +
      marsAge.toFixed(2) +
      " years," +
      " Jupiter: " +
      jupiterAge.toFixed(2) +
      " years"
  );
}

spaceAge(age);
