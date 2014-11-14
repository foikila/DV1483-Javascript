

window.onload = (function () {
    'use strict';

    var Map = {};

    var rockford = document.getElementById('baddie1'),
        area = document.getElementById('flash'),
        pos = {x:1, y:1},
        tileSize = 32,
        gameArea = [],
        boardSize = 24,
        annoyingText = false;

    /**
     * init the map
     */
    function init () {
        var x, y;
        // init game gameArea
        for (x = 0; x < boardSize; x++) {
            gameArea[x] = [];
            for (y = 0; y < boardSize; y++) {
                gameArea[x][y] = 0;
            }
        }
    }

    /**
     * Add nice gui shit
     */
    function createWorld () {
        var x, y, element;

        for (x = 0; x < boardSize; x++) {
            for (y = 0; y < boardSize; y++) {
                element = document.createElement('div');
                element.innerHTML = '';
                element.className = 'title t12';
                element.id = 'n' + x + "-" + y;
                area.appendChild(element);
            }
        }

        for (y = 0; y < boardSize; y++) {
            gameArea[0][y] = 1;
        }
        for (x = 0; x < boardSize; x++) {
            gameArea[x][0] = 1;
        }
    }

    document.onkeydown = function (event) {
        var key;
        key = event.keyCode || event.which;
            switch(key) {
                case 37:
                    Map.move('left');
                    break;
                case 39:
                    Map.move('right');
                    break;
                case 38:
                    Map.move('up');
                    break;
                default:
                case 40:
                    Map.move('down');
                    break;
            }
    };

    Map.move = function (which) {
        switch (which) {
            case 'left':
                pos.x -= 1;
                if (gameArea[pos.x][pos.y] == 1) {
                    pos.x += 1;
                }
                break;
            case 'right':
                pos.x += 1;
                if (gameArea[pos.x][pos.y] == 1) {
                    pos.x -= 1;
                }
                break;
            case 'up':
                pos.y -= 1;
                if (gameArea[pos.x][pos.y] == 1) {
                    pos.x += 1;
                }
                break;
            case 'down':
                pos.y += 1;
                if (gameArea[pos.x][pos.y] == 1) {
                    pos.x -= 1;
                }
                break;
        }
        rockford.style.left =
                (area.offsetLeft + pos.x*tileSize + tileSize/2) + 'px';
            rockford.style.top  =
                (area.offsetTop + pos.y*tileSize + tileSize/2) + 'px';
        rockford.className='baddie ' + which;
        if (annoyingText)
            console.log('Moved ' + which + '!');
        return '';
    };

    init();
    createWorld();
    return Map;

})(window, document);
