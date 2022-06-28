let btnClear = document.querySelector('btn-2');
let inputs = document.querySelectorAll('input');
btnClear.addEventListener('click', () => {
    inputs.forEach(input =>  input.value = '');
});