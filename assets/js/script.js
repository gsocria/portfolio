const el = document.querySelector(".text-subTitulo");
const text = "Através de códigos, transformo ideias em realidade digital, com intuito de construir soluções web que encantam e facilitam a vida das pessoas."
const interval = 50;

function showText(el,text,interval) {

    const char = text.split("").reverse();

    const typer = setInterval(() => {
        
        if (!char.length) {
            return clearInterval(typer);
        }

        const next = char.pop();

        el.innerHTML += next;

    }, interval)
}

showText(el, text, interval);

const chk = document.getElementById('chk');
let claro = document.getElementById('modo-claro');
let escuro = document.getElementById('modo-escuro');

chk.addEventListener('change', () => {
    if (chk.checked) {
        document.documentElement.style.setProperty('--primary-color', '#f5f5f5');
        document.documentElement.style.setProperty('--second-color', '#000000');
        document.documentElement.style.setProperty('--branco', '#000000');
        claro.style.display = "none";
        escuro.style.display = "flex";

    } else {
        document.documentElement.style.setProperty('--primary-color', '#000000');
        document.documentElement.style.setProperty('--second-color', '#f5f5f5');
        document.documentElement.style.setProperty('--branco', '#ffffff');
        claro.style.display = "flex";
        escuro.style.display = "none";
    }
});



const btnMenu = document.querySelector('.menu-mobile');
const menu = document.getElementById('menu');
const mode = document.getElementById('mode')
const itensLi = document.getElementById('itens');
const linha1 = document.querySelector(".linha1");
const linha2 = document.querySelector(".linha2");
const linha3 = document.querySelector(".linha3");

btnMenu.addEventListener('click', () => {
    menu.classList.toggle('active');

    if(linha1.style.transform === '' ){
        linha1.style.transform = 'rotate(-45deg) translate(-8px, 9px)';
        linha2.style.opacity = '0';
        linha3.style.transform = 'rotate(45deg) translate(-5px, -6px)';
    }
    else {
        linha1.style.transform = '';
        linha2.style.opacity = '1';
        linha3.style.transform = '';
    }

    if (mode.style.animation === '' && itensLi.style.animation === ''){
        mode.style.animation = 'menuFade 1s ease forwards 0.5s';
        itensLi.style.animation = 'menuFade 1s ease forwards 0.5s';
    }
    else {
        mode.style.animation = '';
        itensLi.style.animation = '';
    }



    

})
