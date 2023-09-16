let contador = 0;
window.addEventListener('load', () =>{
    document.querySelector('.btn').addEventListener('click', () =>{
        contador++;
        if (contador >4) contador = 0;
        const desplazamiento = contador * 500;
        document.querySelectorAll('.box').forEach(obj => {
        	obj.style.opacity = 0;
        	obj.style.transform = 'scale(0)';
        });
        console.log(contador)
        const obj = document.querySelector(".box"+contador);
        obj.style.transform = "scale(1)";
        obj.style.opacity = "1";
    });
});
window.addEventListener('load', () =>{
    document.querySelector('.btn2').addEventListener('click', () =>{
        contador--;
        if (contador < 0) contador = 4;
        const desplazamiento = contador * 500;
        document.querySelectorAll('.box').forEach(obj => {
        	obj.style.opacity = 0;
        	obj.style.transform = 'scale(0)';
        });
        console.log(contador)
        const obj = document.querySelector(".box"+contador);
        obj.style.transform = "scale(1)";
        obj.style.opacity = "1";
    });
});