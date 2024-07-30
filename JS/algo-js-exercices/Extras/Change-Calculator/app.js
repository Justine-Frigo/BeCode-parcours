function computeChange(price, moneyHanded) {
  if (
    typeof price !== "number" ||
    typeof moneyHanded !== "number" ||
    price < 0 ||
    moneyHanded < 0
  )
    return [];

  if (moneyHanded < price) return [];

  let change = moneyHanded - price;

  let coins = [
    500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01,
  ];

  let result = [];

  for (let coin of coins) {
    if (change >= coin) {
      result.push(coin);
      change -= coin;
      change = (change * 100) / 100;
    }
    if (change === 0) break;
  }
  return result;
}

console.table(computeChange(12.3, 50));
console.table(computeChange(17.41, 20));
