let tl = anime.timeline({ easing: 'easeOutExpo' });

tl.add({
  targets: '.container div',
  translateX: ['-100%', '0%'],
  opacity: [0, 1],
  delay: (el, i) => 100 * i
});
tl.add({
  targets: 'input, label, span',
  scale: [0, 1],
  opacity: [0, 1]
}, '-=500');

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

let snackbar = document.getElementById('snackbar');
snackbar.className = 'show';
setTimeout(() => {
  snackbar.className = snackbar.className.replace('show', '');
}, 4000);