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


// class MobileNavbar {
//     constructor(mobileMenu, navList, navLinks) {
//         this.mobileMenu = document.querySelector(mobileMenu);
//         this.navList = document.querySelector(navList);
//         this.navLinks = document.querySelector(navLinks);
//         this.navList = "active"
//     }

//     addClickEvent() {
//         this.mobileMenu.addEventListener('click', () => console.log ("hey"));
//     }

//     init() {
//         if(this.mobileMenu) {
//             this.addClickEvent();
//         }

//         return this;
//     }
// }

// const mobileNavbar = new MobileNavbar(
//     ".menu-mobile",
//     ".menu",
//     ".itens li",
// );

// mobileNavbar.init();

const btnMenu = document.querySelector('.menu-mobile');
const menu = document.getElementById('menu');

btnMenu.addEventListener('click', () => {
    if(!btnMenu == true) {
        menu.classList.toggle('active');
    }
})
