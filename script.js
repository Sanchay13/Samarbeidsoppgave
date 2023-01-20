// kode for bildegalleri
var slider_img = document.querySelector('.slider-img');
var bilder = ['Bilde2.JPG', 'Bilde3.JPG', 'Bilde4.JPG',  'Bilde5.JPG', 'Bilde6.JPG', 'Bilde7.JPG', 'Bilde8.JPG', 'Bilde10.JPG', 'Bilde11.JPG', 'Bilde12.JPG', 'Bilde13.JPG', 'Bilde14.JPG', 'Bilde15.JPG'];
var i = 0;

function previous(){
	if(i <= 0) i = bilder.length;	
	i--;
	return setImg();			 
}

function next(){
	if(i >= bilder.length-1) i = -1;
	i++;
	return setImg();			 
}

function setImg(){
	return slider_img.setAttribute('src', "Bildegalleri/"+bilder[i]);
}

// kode for galleri avsluttes




var board;
var Spiller1 = "O";
var Spiller2 = "X";
var Nåværedespiller = Spiller1;
var gameOver = false;

window.onload = function() {
    setGame();
}

function setGame() {
    board = [
                [' ', ' ', ' '],
                [' ', ' ', ' '],
                [' ', ' ', ' ']
            ]

    for (let r = 0; r < 3; r++) {
        for (let c = 0; c < 3; c++) {
            let tile = document.createElement("div");
            tile.id = r.toString() + "-" + c.toString();
            tile.classList.add("tile");
            if (r == 0 || r == 1) {
                tile.classList.add("horizontal-line");
            }
            if (c == 0 || c == 1) {
                tile.classList.add("vertical-line");
            }
            tile.innerText = "";
            tile.addEventListener("click", setTile);
            document.getElementById("board").appendChild(tile);
        }
    }
}

function setTile() {
    if (gameOver) {
        return;
    }

    let coords = this.id.split("-");  
    let r = parseInt(coords[0]);
    let c = parseInt(coords[1]);

    if (board[r][c] != ' ') { 
        return;
    }
    
    board[r][c] = Nåværedespiller;
    this.innerText = Nåværedespiller;


    if (Nåværedespiller == Spiller1) {
        Nåværedespiller = Spiller2;
    }
    else {
        Nåværedespiller = Spiller1;
    }

    checkWinner();
}


function checkWinner() {
    for (let r = 0; r < 3; r++) {
        if (board[r][0] == board[r][1] && board[r][1] == board[r][2] && board[r][0] != ' ') {

            for (let i = 0; i < 3; i++) {
                let tile = document.getElementById(r.toString() + "-" + i.toString());
                tile.classList.add("winner");
            }
            gameOver = true;
            return;
        }
    }


    for (let c = 0; c < 3; c++) {
        if (board[0][c] == board[1][c] && board[1][c] ==  board[2][c] && board[0][c] != ' ') {
            for (let i = 0; i < 3; i++) {
                let tile = document.getElementById(i.toString() + "-" + c.toString());                
                tile.classList.add("winner");
            }
            gameOver = true;
            return;
        }
    }


    if (board[0][0] == board[1][1] && board[1][1] == board[2][2] && board[0][0] != ' ') {
        for (let i = 0; i < 3; i++) {
            let tile = document.getElementById(i.toString() + "-" + i.toString());                
            tile.classList.add("winner");
        }
        gameOver = true;
        return;
    }
}

function Reload(){
    window.location.reload();
} 


