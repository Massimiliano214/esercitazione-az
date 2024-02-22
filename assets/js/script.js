document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('send_site');
    const submitButton = form.querySelector('.login_bt');

    function validateName() {
        const nameInput = document.getElementById('name_user');
        const nameError = document.getElementById('name-error');
        const nameValue = nameInput.value.trim();

        if (nameValue === '' || nameValue.length < 3 || nameValue.length > 40) {
            nameError.textContent = 'Please enter a valid name (3-40 characters).';
            return false;
        } else {
            nameError.textContent = '';
            return true;
        }
    }

    function validateSurname() {
        const surnameInput = document.getElementById('surname_user');
        const surnameError = document.getElementById('surname-error');
        const surnameValue = surnameInput.value.trim();

        if (surnameValue === '' || surnameValue.length < 3 || surnameValue.length > 40) {
            surnameError.textContent = 'Please enter a valid surname (3-40 characters).';
            return false;
        } else {
            surnameError.textContent = '';
            return true;
        }
    }

    function validateCodiceFiscale() {
        const pattern = /^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$/;
        const codiceFiscaleInput = document.getElementById('register_cv');
        const codiceFiscaleError = document.getElementById('cv-error');
        const codiceFiscaleValue = codiceFiscaleInput.value.trim();

        if (codiceFiscaleValue.search(pattern) === -1) {
            codiceFiscaleError.textContent = 'Invalid Codice Fiscale format.';
            return false;
        } else {
            codiceFiscaleError.textContent = '';
            return true;
        }
    }

    function validateForm() {
        const isNameValid = validateName();
        const isSurnameValid = validateSurname();
        const isCodiceFiscaleValid = validateCodiceFiscale();

        submitButton.disabled = !(isNameValid && isSurnameValid && isCodiceFiscaleValid);
    }

    const nameInput = document.getElementById('name_user');
    const surnameInput = document.getElementById('surname_user');
    const codiceFiscaleInput = document.getElementById('register_cv');

    nameInput.addEventListener('input', validateForm);
    surnameInput.addEventListener('input', validateForm);
    codiceFiscaleInput.addEventListener('input', validateForm);

    // Validate the form on submit
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        validateForm();

        if (!submitButton.disabled) {
            this.submit();
        }
    });

    submitButton.disabled = true;
});
