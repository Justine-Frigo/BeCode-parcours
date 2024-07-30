function manhattan(streetA, avenueA, streetB, avenueB) {
    let distance = Math.abs(streetA - streetB) + Math.abs(avenueA - avenueB);
    return distance;
}

console.log(manhattan(1, 1, 2, 2));
console.log(manhattan(1, 1, 1, 1));
console.log(manhattan(5, 4, 3, 2));