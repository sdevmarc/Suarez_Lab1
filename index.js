const passwordInput = document.getElementById('password');
const capsWarn = document.querySelector('.caps-warn');

passwordInput.addEventListener('keyup', e => {
    if (e.getModifierState('CapsLock')) {
        capsWarn.style.display = 'block';
    } else {
        capsWarn.style.display = 'none';
    }
});