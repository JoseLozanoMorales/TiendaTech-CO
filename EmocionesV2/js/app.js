// const url = new URL(window.location.href);
// const tema = url.searchParams.get('tema');
// const header = document.getElementById("header");

// if(tema == '0'){
//     navbar.style.backgroundColor = "#009fff";
// }
// if(tema == '1'){
//     navbar.style.backgroundColor = "#ff006a";
// }
// if(tema == '2'){
//     navbar.style.backgroundColor = "#ff9500";
// }

// //elemento.classList.add("clase1", "clase2"); // Añade varias clases
// //elemento.classList.remove("clase1"); // Elimina una clase

// window.addEventListener("DOMContentLoaded", () => {
//     const url = new URL(window.location.href);
//     const tema = url.searchParams.get('tema');
//     const navbar = document.querySelector("nav.navbar");

//     if (navbar && tema !== null) {
//         // Elimina la clase que impide aplicar tu color personalizado
//         navbar.classList.remove("bg-body");

//         // Aplica color según el tema
//         switch (tema) {
//             case '0':
//                 navbar.style.backgroundColor = "#009fff"; // Azul
//                 break;
//             case '1':
//                 navbar.style.backgroundColor = "#ff006a"; // Fucsia
//                 break;
//             case '2':
                
//                 navbar.style.backgroundColor = "#ff9500"; // Naranja
//                 break;
//         }
//     }
// });

window.addEventListener("DOMContentLoaded", () => {
    const url = new URL(window.location.href);
    const tema = url.searchParams.get('tema');
    const navbar = document.querySelector("nav.navbar");
    const footer = document.querySelector("footer.footer-tema");

    if (navbar && tema !== null) {
        navbar.classList.remove("bg-body");

        let bodyColor;
        let accentColor;

        switch (tema) {
            case '0':
                accentColor = "#bfff00"; // Azul fuerte
                bodyColor = "#8dbc00";   // Azul medio
                break;
            case '1':
                accentColor = "#87CEFA"; // Fucsia
                bodyColor = "#00BFFF";   // Rosado oscuro
                break;
            case '2':
                accentColor = "#FFA500"; // Naranja
                bodyColor = "#FF7F50";   // Naranja oscuro
                break;
        }

        document.body.style.backgroundColor = bodyColor;
        navbar.style.backgroundColor = accentColor;

        if (footer) {
            footer.style.setProperty('background-color', accentColor, 'important');
        }
    }
});







