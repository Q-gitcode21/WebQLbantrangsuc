const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const btnPopup = document.querySelector('.btnLogin-popup');
loginLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});
btnPopup.addEventListener('click',()=>{
    wrapper.classList.add('active-pop');
});