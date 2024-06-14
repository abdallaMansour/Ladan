// typed text in english

const typedTextSpanEN = document.querySelector(".typed-in-en");
const cursorSpanEN = document.querySelector(".cursor");

const textArrayEN = [
    "technical solutions",
    "comprehensive information",
    "extensive experience",
];
const typingDelayEN = 100;
const erasingDelayEN = 100;
const newTextDelayEN = 2000; // Delay between current and next text
let textArrayIndexEN = 0;
let charIndexEN = 0;

function type() {
    if (charIndexEN < textArrayEN[textArrayIndexEN].length) {
        if (!cursorSpanEN.classList.contains("typing"))
            cursorSpanEN.classList.add("typing");
        typedTextSpanEN.textContent +=
            textArrayEN[textArrayIndexEN].charAt(charIndexEN);
        charIndexEN++;
        setTimeout(type, typingDelayEN);
    } else {
        cursorSpanEN.classList.remove("typing");
        setTimeout(erase, newTextDelayEN);
    }
}

function erase() {
    if (charIndexEN > 0) {
        if (!cursorSpanEN.classList.contains("typing"))
            cursorSpanEN.classList.add("typing");
        typedTextSpanEN.textContent = textArrayEN[textArrayIndexEN].substring(
            0,
            charIndexEN - 1
        );
        charIndexEN--;
        setTimeout(erase, erasingDelayEN);
    } else {
        cursorSpanEN.classList.remove("typing");
        textArrayIndexEN++;
        if (textArrayIndexEN >= textArrayEN.length) textArrayIndexEN = 0;
        setTimeout(type, typingDelayEN + 1100);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    // On DOM Load initiate the effect
    if (textArrayEN.length) setTimeout(type, newTextDelayEN + 250);
});

// header particlesJS
particlesJS("bg", {
    particles: {
        number: {
            value: 100,
            density: {
                enable: true,
                value_area: 400,
            },
        },
        color: {
            value: "#ffffff",
        },
        shape: {
            type: "circle",
            stroke: {
                width: 0,
                color: "#000000",
            },
            polygon: {
                nb_sides: 5,
            },
            image: {
                src: "img/github.svg",
                width: 100,
                height: 100,
            },
        },
        opacity: {
            value: 0.5,
            random: false,
            anim: {
                enable: false,
                speed: 1,
                opacity_min: 0.1,
                sync: false,
            },
        },
        size: {
            value: 3.5,
            random: true,
            anim: {
                enable: false,
                speed: 40,
                size_min: 0.1,
                sync: false,
            },
        },
        line_linked: {
            enable: true,
            distance: 150,
            color: "#ffffff",
            opacity: 0.4,
            width: 0.8,
        },
        move: {
            enable: true,
            speed: 2,
            direction: "none",
            random: false,
            straight: false,
            out_mode: "out",
            bounce: false,
            attract: {
                enable: false,
                rotateX: 600,
                rotateY: 1200,
            },
        },
    },
    interactivity: {
        detect_on: "canvas",
        events: {
            onhover: {
                enable: true,
                mode: "grab",
            },
            onclick: {
                enable: true,
                mode: "push",
            },
            resize: true,
        },
        modes: {
            grab: {
                distance: 150,
                line_linked: {
                    opacity: 1,
                },
            },
            bubble: {
                distance: 400,
                size: 40,
                duration: 2,
                opacity: 8,
                speed: 3,
            },
            repulse: {
                distance: 200,
                duration: 0.4,
            },
            push: {
                particles_nb: 4,
            },
            remove: {
                particles_nb: 2,
            },
        },
    },
    retina_detect: true,
});
