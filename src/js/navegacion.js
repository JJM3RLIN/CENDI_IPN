function mobileMenu(){
    const btn = document.querySelector('#mobile-menu');
    const navMobile = document.querySelector('#mobile-menu-drop');
    btn.addEventListener('click', ()=>{
       navMobile.classList.toggle('hidden');
    })
}