particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 15,
      "density": {
        "enable": false,
        "value_area": 600
      }
    },
    "color": {
      "value": "#000"
    },
    "shape": {
      "type": "image",
      "stroke": {
        "width": 0,
        "color": "#456"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "/wp-content/themes/inochi/assets/img/ball-black.png",
        "width": 100,
        "height": 100     
      }
    },
    "opacity": {
      "value": .9,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 45,
      // "random": true,
      "anim": {
        "enable": true,
        "speed": 3,
        "size_min": 20,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 0.5,
      "direction": "none",
      "random": true,
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
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
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
        "distance": 100,
        "duration": 2
      },
      "push": {
        "particles_nb": 1
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});


