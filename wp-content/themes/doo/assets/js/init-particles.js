
(function($) {
    "use strict";
    var initParticles = function () {
        var config;
        if ($('#particles-circle').length && (typeof particlesJS !== "undefined" && particlesJS !== null)) {

            config = {
                "particles": {
                    "number": {
                        "value": 50, "density": {
                            "enable": true, "value_area": 800
                        }
                    }
                    , "color": {
                        "value": "#fff"
                    }
                    , "shape": {
                        "type": "circle", "stroke": {
                            "width": 0, "color": "#000000"
                        }
                        , "polygon": {
                            "nb_sides": 5
                        }
                        , "image": {
                            "src": "img/github.svg", "width": 100, "height": 100
                        }
                    }
                    , "opacity": {
                        "value": 1, "random": true, "anim": {
                            "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false
                        }
                    }
                    , "size": {
                        "value": 3.945738208161363, "random": true, "anim": {
                            "enable": false, "speed": 12.181158184520175, "size_min": 7.308694910712106, "sync": false
                        }
                    }
                    , "line_linked": {
                        "enable": false, "distance": 500, "color": "#ffffff", "opacity": 0.4, "width": 2
                    }
                    , "move": {
                        "enable": true,
                        "speed": 1.603412060865523,
                        "direction": "bottom",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false, "rotateX": 320.6824121731046, "rotateY": 240.5118091298284
                        }
                    }
                }
                , "interactivity": {
                    "detect_on": "canvas", "events": {
                        "onhover": {
                            "enable": false, "mode": "repulse"
                        }
                        , "onclick": {
                            "enable": true, "mode": "repulse"
                        }
                        , "resize": true
                    }
                    , "modes": {
                        "grab": {
                            "distance": 400, "line_linked": {
                                "opacity": 0.5
                            }
                        }
                        , "bubble": {
                            "distance": 400, "size": 4, "duration": 0.3, "opacity": 1, "speed": 3
                        }
                        , "repulse": {
                            "distance": 200, "duration": 0.4
                        }
                        , "push": {
                            "particles_nb": 4
                        }
                        , "remove": {
                            "particles_nb": 2
                        }
                    }
                }
                , "retina_detect": true
            };
            particlesJS('particles-circle', config);
        }
    };
    initParticles();

    var initParticles2 = function () {
        var config;
        if ($('#particles-tringle').length && (typeof particlesJS !== "undefined" && particlesJS !== null)) {
            config = {
                "particles": {
                    "number": {
                        "value": 118, "density": {
                            "enable": true, "value_area": 868.0624057955
                        }
                    }
                    , "color": {
                        "value": "#ffffff"
                    }
                    , "shape": {
                        "type": "triangle", "stroke": {
                            "width": 0, "color": "#000000"
                        }
                        , "polygon": {
                            "nb_sides": 4
                        }
                        , "image": {
                            "src": "img/github.svg", "width": 100, "height": 100
                        }
                    }
                    , "opacity": {
                        "value": 0.5, "random": true, "anim": {
                            "enable": false, "speed": 1.2993235396821523, "opacity_min": 0.1, "sync": true
                        }
                    }
                    , "size": {
                        "value": 4.008530152163807, "random": true, "anim": {
                            "enable": false, "speed": 40, "size_min": 0.1, "sync": false
                        }
                    }
                    , "line_linked": {
                        "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 0.9620472365193136
                    }
                    , "move": {
                        "enable": true,
                        "speed": 4.810236182596568,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false, "rotateX": 600, "rotateY": 1603.4120608655228
                        }
                    }
                }
                , "interactivity": {
                    "detect_on": "canvas", "events": {
                        "onhover": {
                            "enable": true, "mode": "grab"
                        }
                        , "onclick": {
                            "enable": true, "mode": "push"
                        }
                        , "resize": true
                    }
                    , "modes": {
                        "grab": {
                            "distance": 400, "line_linked": {
                                "opacity": 1
                            }
                        }
                        , "bubble": {
                            "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3
                        }
                        , "repulse": {
                            "distance": 200, "duration": 0.4
                        }
                        , "push": {
                            "particles_nb": 4
                        }
                        , "remove": {
                            "particles_nb": 2
                        }
                    }
                }
                , "retina_detect": true

            };
            particlesJS("particles-tringle", config);
        }
    };
    initParticles2();

})(jQuery);