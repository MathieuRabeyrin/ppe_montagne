document.addEventListener('DOMContentLoaded', () => {
  const nav = document.querySelectorAll('header nav ul li a');

  for (let i = 1; i < nav.length; i++) {
    nav[i].addEventListener('click', function() {
      for (let i = 1; i < nav.length; i++)
        nav[i].classList.remove('active');
      this.classList.add('active');
    });
  }
});