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



