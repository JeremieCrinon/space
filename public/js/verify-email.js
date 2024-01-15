const button = document.getElementById('open--destroy--profile');
const form = document.getElementById('destroy--profile');

button.addEventListener('click', () => {
    form.classList.toggle('hidden');
    button.classList.toggle('Verify_email--button_destroy_profile--active');
});