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
        return true;
      }
    }
  }
  
  function rand() {
    return Math.floor(Math.random() * 100);
  }
  
  function createRectangles(nb) {
    let i;
    let arr = [];
    for (i = 1; i <= nb; i++) {
      arr.push(new Rectangle(rand(), rand(), rand(), rand()));
    }
    let a = 0;
    for (elements of arr) {
      arr.forEach((element) => {
        a++;
        if (elements.collides(element)) {
          console.log("Rectangle n°" + a + ": Collision detected!");
        }
      });
    }
  }
  
  createRectangles(1000);