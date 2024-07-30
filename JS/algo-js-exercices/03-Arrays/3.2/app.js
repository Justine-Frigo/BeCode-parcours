let arr1 = [1, 2, 3, 4, 5];
let arr2 = [100, 101, 102];

let result = 0;

for (let num of arr1) {
  result += num;
}

console.log(result / arr1.length);

result = 0;

for (let num of arr2) {
  result += num;
}

console.log(result / arr2.length);