let tl = anime.timeline({ easing: 'easeOutExpo' });

tl.add({
  targets: '.container div',
  translateX: ['-100%', '0%'],
  opacity: [0, 1],
  delay: (el, i) => 10 * i
});

let navLinks = document.querySelectorAll('.logo a');

navLinks.forEach((navLink) => {

  navLink.addEventListener('click', e => e.preventDefault());

  navLink.addEventListener('mouseenter', () => {
    
    let letter = navLink.querySelectorAll('.letter');
    anime.remove(letter);
    anime.timeline({
      targets: letter
    })
    .add({
      translateX: ['0px', '-30px'],
      opacity: [1, 0],
      easing: 'easeInExpo',
      duration: 800,
      delay: (el, i) => 30 * i
    })
    .add({
      translateX: ['40px', '0px'],
      opacity: [0, 1],
      easing: 'easeOutExpo',
      duration: 1600,
      delay: (el, i) => 30 * i
    });

  });

});

/* let services = document.querySelectorAll('.service-wrapper');

services.forEach(service => {
  service.addEventListener('mouseenter', (event) => {
    tl.add({
      targets: service.querySelector('.arrow'),
      //easing: 'easeOutExpo',
      scale: 30
    })
    .add({
      targets: service.querySelector('.arrow-small'),
      //easing: 'easeOutExpo',
      scale: 6
    })
    .add({
      targets: service.querySelector('img'),
      rotate: '45deg',
      //easing: 'easeOutExpo'
    });
  });

  service.addEventListener('mouseleave', (event) => {
    tl.add({
      targets: service.querySelector('.arrow'),
      //easing: 'easeOutExpo',
      scale: 1
    })
    .add({
      targets: service.querySelector('.arrow-small'),
      //easing: 'easeOutExpo',
      scale: 1
    })
    .add({
      targets: service.querySelector('img'),
      rotate: '90deg',
      //easing: 'easeOutExpo'
    });
  });
}); */