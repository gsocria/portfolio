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


