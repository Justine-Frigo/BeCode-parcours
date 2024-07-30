let students = [
  "Adrien C",
  "Adrien B",
  "Angel",
  "Arnaud VA",
  "Caroline",
  "Denis L",
  "Dorian",
  "Dylan",
  "Dzheylyan",
  "Giovanni",
  "Isabelle",
  "Julie",
  "Justine F",
  "Justine L",
  "Ludovic",
  "Lyne",
  "Jordan",
  "Manu",
  "Maryam",
  "Mohamed",
  "Natalia",
  "Nathanael",
  "Stacy",
  "Tom",
  "Youris",
  "Zahra",
];

let randStudents = [];
n = rand();

function rand() {
  let max = students.length;
  return Math.floor(Math.random() * max);
}

function pickLearner(inputAr, n) {
  for (i = 1; i < n; i++) {
    inputAr.push(students[i]);
  }
  console.log(inputAr);
}

pickLearner(randStudents, n);
