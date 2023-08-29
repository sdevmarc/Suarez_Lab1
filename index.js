const passwordInput = document.getElementById('password');
const capsWarn = document.querySelector('.caps-warn');

passwordInput.addEventListener('keyup', e => {
    if (e.getModifierState('CapsLock')) {
        capsWarn.style.display = 'block';
    } else {
        capsWarn.style.display = 'none';
        capsWarn.style.color = 'red';
    }
});

let passwordState = false;
document.querySelector('.show-pas').addEventListener('click', () => {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        document.querySelector('.show-pas').textContent = 'Hide';
    } else {
        passwordInput.type = 'password';
        document.querySelector('.show-pas').textContent = 'Show';
    }
});