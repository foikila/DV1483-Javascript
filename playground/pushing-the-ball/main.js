

window.onload = (function () {
    'use strict';

    var myBall = {
        position : {x:100, y:500},
        image : 'http://dbwebb.se/img/black_ball_64_64.png'
    };

    myBall.HTMLelement = document.getElementById('ball');

    myBall.draw = function () {
      this.HTMLelement.style.backgroundImage = 'url(' + this.image + ')';
      this.HTMLelement.style.left = this.position.y + 'px';
      this.HTMLelement.style.top = this.position.x + 'px';
    }


    myBall.HTMLelement.addEventListener('click', function (event) {

        myBall.position.x = Foiki.random(-200, 200) + myBall.position.x;
        myBall.position.y = Foiki.random(-200, 200) + myBall.position.y;

        if (myBall.position.x < 0 ) {
            myBall.position.x = 0;
        } else if (myBall.position.x >= window.innerWidth) {
            myBall.position.x = window.innerWidth;
        }

        if (myBall.position.y < 0) {
            console.log("innanför ");
            myBall.position.y = 0;
        } else if (myBall.position.y >= window.innerHeight) {
            console.log ("kall");
            myBall.position.y = window.innerHeight;
        }

        myBall.draw();
    });

    myBall.draw()
;})();
