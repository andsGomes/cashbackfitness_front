const btnMobile = document.getElementById('btn-mobile');
console.log(btnMobile);

function toggleMenu() {
  const nav =  document.getElementById('nav'); 
  console.log(nav);
  nav.classList.toggle('active');
}

btnMobile.addEventListener('click',toggleMenu);