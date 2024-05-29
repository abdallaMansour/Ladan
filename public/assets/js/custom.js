// close responsive nav on scroll 
let closeResponsive = document.querySelector('.navbar-collapse');
window.onscroll = () => {
  closeResponsive.classList.remove("show");
}




// typed text 

const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["حلول تقنية", "معلومات متكاملة", "خبرة واسعة"];
const typingDelay = 100;
const erasingDelay = 100;
const newTextDelay = 2000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
  	setTimeout(erase, newTextDelay);
  }
}

function erase() {
	if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});




// typed text in english

const typedTextSpanEN = document.querySelector(".typed-in-en");
const cursorSpanEN = document.querySelector(".cursor");

const textArrayEN = ["technical solutions", "comprehensive information", "extensive experience"];
const typingDelayEN = 100;
const erasingDelayEN = 100;
const newTextDelayEN = 2000; // Delay between current and next text
let textArrayIndexEN = 0;
let charIndexEN = 0;

function type() {
  if (charIndexEN < textArrayEN[textArrayIndexEN].length) {
    if(!cursorSpanEN.classList.contains("typing")) cursorSpanEN.classList.add("typing");
    typedTextSpanEN.textContent += textArrayEN[textArrayIndexEN].charAt(charIndexEN);
    charIndexEN++;
    setTimeout(type, typingDelayEN);
  } 
  else {
    cursorSpanEN.classList.remove("typing");
  	setTimeout(erase, newTextDelayEN);
  }
}

function erase() {
	if (charIndexEN > 0) {
    if(!cursorSpanEN.classList.contains("typing")) cursorSpanEN.classList.add("typing");
    typedTextSpanEN.textContent = textArrayEN[textArrayIndexEN].substring(0, charIndexEN-1);
    charIndexEN--;
    setTimeout(erase, erasingDelayEN);
  } 
  else {
    cursorSpanEN.classList.remove("typing");
    textArrayIndexEN++;
    if(textArrayIndexEN>=textArrayEN.length) textArrayIndexEN=0;
    setTimeout(type, typingDelayEN + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArrayEN.length) setTimeout(type, newTextDelayEN + 250);
});






// hover cards 
let cards = document.querySelectorAll('.ser-card');
cards.forEach(card => {
  card.onmousemove = function(e) {
    let x = e.pageX - card.offsetLeft;
    let y = e.pageY - card.offsetTop;

    card.style.setProperty('--x', x + 'px');
    card.style.setProperty('--y', y + 'px');
  }
});



//   contact to watsapp 
function whatsapp(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var service = document.getElementById("service").value;
  
  var url = "https://wa.me/966570803605?text="
  +"*Name :* "+name+"%0a"
  +"*Email :* "+email+"%0a"
  +"*Phone :* "+phone+"%0a"
  +"*Service Requist :* "+service+"%0a";
  
  window.open(url,'_blank').focus();
  }



  
    // form local storage 
    let sendBtn = document.getElementById('send-btn');
    sendBtn.addEventListener('click', function(e) {
        e.preventDefault();

        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var service = document.getElementById("service").value;
        
        // localStorage 
        localStorage.setItem("name", name);

        localStorage.setItem("email", email);

        localStorage.setItem("phone", phone);

        localStorage.setItem("service", service);
    });


// header particlesJS
particlesJS("bg", {
    "particles": {
      "number": {
        "value": 100,
        "density": {
          "enable": true,
          "value_area": 400
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 3.5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": .8
      },
      "move": {
        "enable": true,
        "speed": 2,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "grab"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 150,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true
  });
  
//   requestAnimationFrame();


