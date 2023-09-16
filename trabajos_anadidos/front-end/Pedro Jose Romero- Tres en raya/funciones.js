let turno = 0;
let tablero = [];

function marcarTurno() {
    document.getElementById('jugador1').classList.add('marco');
    document.getElementById('jugador2').classList.remove('marco');

    if (turno % 2 !== 0) {
        document.getElementById('jugador2').classList.add('marco');
        document.getElementById('jugador1').classList.remove('marco');
    }


}



function pedirNombres() {
    let j1 = prompt('Nombre jugador 1:  ( color: Salmon )');
    let j2 = prompt('Nombre del jugador 2:  ( color: paleVerde)');

    document.getElementById('jugador1').innerHTML = j1;
    document.getElementById('jugador2').innerHTML = j2;
    marcarTurno();
}
pedirNombres();

contadorEmpate = 0;

const btnPulsado = (e, pos) => {
    turno++;
    const btn = e.target;
    const color = turno % 2 ? 'salmon' : 'palegreen';
    marcarTurno();

    if (btn.style.backgroundColor === 'salmon' || btn.style.backgroundColor === 'palegreen') {
        alert('¿Que haces? ¡Pierdes turno por tonto! ')
        return;
    }

    btn.style.backgroundColor = color;
    tablero[pos] = color;
    contadorEmpate++;


    if (haGanado()) {
        alert('Enhorabuena player ' + color);

        reset(false);
    }
    else if (contadorEmpate === 9 && !haGanado()) {//haGanado() == false es lo mismo que !haGanado()
        alert('Habeis empatado');

        reset(true);
    }
}

const haGanado = () => {
    if (tablero[0] == tablero[1] && tablero[0] == tablero[2] && tablero[0]) {
        return true;
    } else if (tablero[3] == tablero[4] && tablero[3] == tablero[5] && tablero[3]) {
        return true;
    } else if (tablero[6] == tablero[7] && tablero[6] == tablero[8] && tablero[6]) {
        return true;
    } else if (tablero[0] == tablero[3] && tablero[0] == tablero[6] && tablero[0]) {
        return true;
    } else if (tablero[1] == tablero[4] && tablero[1] == tablero[7] && tablero[1]) {
        return true;
    } else if (tablero[2] == tablero[5] && tablero[2] == tablero[8] && tablero[2]) {
        return true;
    } else if (tablero[0] == tablero[4] && tablero[0] == tablero[8] && tablero[0]) {
        return true;
    } else if (tablero[2] == tablero[4] && tablero[2] == tablero[6] && tablero[2]) {
        return true;
    }
    return false
}
document.querySelectorAll('button').forEach(
    (obj, i) => obj.addEventListener('click', (e) => btnPulsado(e, i)));

function reset(empate) {
    let txtconfirm = empate ? "¿Quieres desempatar?" : "¿Quieres jugar otra partida?";

    document.querySelectorAll('button').forEach(btn => btn.style.backgroundColor = 'black');
    let continuacion = confirm(txtconfirm);

    if (continuacion) {
        if (!empate) {
            pedirNombres();
        }
        tablero = [];
        turno = 0;
        contadorEmpate = 0;
        return;

    }
    document.getElementById('jugador1').classList.remove('marco');
    document.getElementById('jugador2').classList.remove('marco');
    document.querySelector('#gameover').style.display = 'block';
    document.querySelector('.container').style.display = 'none';


}

