const logreBox = document.querySelector('logreg-box');
const loginLink = document.querySelector('login-link');
const registerLink = document.querySelector('registerLink');

registerLink.addEventListener('click', () => {
    logreBox.classList('active');
});