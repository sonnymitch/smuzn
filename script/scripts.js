<!--STICKY SCRIPT PER MENU A FISSAGGIO-->
// Seleziona tutti gli elementi con gli ID specificati
const headers = document.querySelectorAll("#menu, #menu3, #menu2");

// STICKY SCRIPT
window.addEventListener('scroll', handleScroll);

function handleScroll() {
    headers.forEach(header => {
        makeSticky(header);
    });
}

// Funzione per rendere un elemento sticky
function makeSticky(header) {
    const stickyClass = `sticky-${header.id}`;
    const rect = header.getBoundingClientRect();
    const headerTop = rect.top;

    if (headerTop <= 0 && headerTop > -rect.height) {
        header.classList.add(stickyClass);
    } else {
        header.classList.remove(stickyClass);
    }
}

// Esempio di utilizzo (opzionale)
headers.forEach(header => {
    console.log(`Elemento selezionato: ${header.id}`);
});



<!--TRANSIZIONE DA SFOCATURA-->
//        TRANSIZIONE DA SFOCATURA
function reveal() {
    const reveals = document.querySelectorAll(".reveal");
    for (let i = 0; i < reveals.length; i++) {
        const windowHeight = window.innerHeight;
        const elementTop = reveals[i].getBoundingClientRect().top;
        const elementVisible = 1;
        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);
reveal();



<!--Animazione icona "+" del menu per mobile-->
// Animazione icona "+" del menu per mobile
const plusIcon = document.getElementById('plusIcon');
const menu3 = document.getElementById('menu3');

function toggleMenu() {
    menu3.classList.toggle('open');
    updatePlusIcon();
}

function updatePlusIcon() {
    plusIcon.style.transform = menu3.classList.contains('open') ? 'rotate(45deg)' : '';
}

// Variabile per tenere traccia del tempo di inizio del tocco
let touchStartTime;

// Gestione eventi per desktop e mobile
plusIcon.addEventListener('click', toggleMenu);

plusIcon.addEventListener('touchstart', function(e) {
    touchStartTime = new Date().getTime();
});

plusIcon.addEventListener('touchend', function(e) {
    const touchEndTime = new Date().getTime();
    const touchDuration = touchEndTime - touchStartTime;

    // Se il tocco dura meno di 200ms, consideriamolo un tap
    if (touchDuration < 200) {
        e.preventDefault();  // Previene il comportamento di default
        toggleMenu();
    }
});

// Aggiorna l'icona quando la pagina viene caricata o ridimensionata
window.addEventListener('load', updatePlusIcon);
window.addEventListener('resize', updatePlusIcon);



<!--Animazione menu per mobile-->
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.menu3 a');

    links.forEach(function(link) {
        link.addEventListener('touchstart', function(e) {
            this.classList.add('clicked');
        });

        link.addEventListener('touchend', function(e) {
            const self = this;
            setTimeout(function() {
                self.classList.remove('clicked');
            }, 300);
        });

        // // Preveniamo il comportamento predefinito del link
        // link.addEventListener('click', function(e) {
        //     e.preventDefault();
        // });
    });
});



<!--Cambia sfondo menu dopo lo scroll-->
// Cambia sfondo menu dopo lo scroll
window.addEventListener('scroll', function() {
    const elemento = document.querySelector('.container-menu3');
    const scrollPosition = window.scrollY;

    // Cambia lo stile quando si scrolla oltre 300px
    if (scrollPosition > 10) {
        elemento.classList.add('scrolled');
    } else {
        elemento.classList.remove('scrolled');
    }
});



<!--TRANSIZIONE OPACITÀ-->
window.addEventListener('load', function() {
    const svgContainer = document.getElementById('central-img-nav2');
    svgContainer.style.display = 'flex'; // Mostra l'elemento
    svgContainer.classList.add('opacity-transition'); // Aggiungi la classe per attivare la transizione
});