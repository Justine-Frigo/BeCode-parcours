class Circle {
    constructor(xPos, yPos, radius) {
      this.xPos = xPos;
      this.yPos = yPos;
      this.radius = radius;
    }
    move(xOffset, yOffset) {
      this.xPos = this.xPos + xOffset;
      this.yPos = this.yPos + yOffset;
    }
  
    get surface() {
      return Math.PI * this.radius ** 2;
    }
  }
  
  let myCircle = new Circle(70, 50, 20);
  console.log(myCircle.surface.toFixed(2));