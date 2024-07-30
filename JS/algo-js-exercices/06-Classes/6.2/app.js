class Rectangle {
    constructor(topLeftXPos, topLeftYPos, width, length) {
      this.topLeftXPos = topLeftXPos;
      this.topLeftYPos = topLeftYPos;
      this.width = width;
      this.length = length;
    }
  
    collides(otherRectangle) {
      if (
        this.topLeftXPos < otherRectangle.topLeftXPos + otherRectangle.width &&
        this.topLeftXPos + this.width > otherRectangle.topLeftXPos &&
        this.topLeftYPos < otherRectangle.topLeftYPos + otherRectangle.length &&
        this.topLeftYPos + this.length > otherRectangle.topLeftYPos
      ) {
        console.log("Collision detected!");
      } else {
        console.log("No collision!");
      }
    }
  }
  
  let rect1 = new Rectangle(50, 60, 10, 40);
  let rect2 = new Rectangle(65, 950, 150, 200);
  let rect3 = new Rectangle(200, 200, 50, 50);
  let rect4 = new Rectangle(300, 300, 20, 20);
  let rect5 = new Rectangle(400, 400, 30, 30);
  
  let arr_rect = [];
  arr_rect.push(rect1);
  arr_rect.push(rect2);
  arr_rect.push(rect3);
  arr_rect.push(rect4);
  arr_rect.push(rect5);
  
  for (let nb of arr_rect) {
    rect1.collides(nb);
  }