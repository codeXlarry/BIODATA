document.getElementById('biodataForm').addEventListener('submit', function(event) {

    const email = document.getElementById('email').value;
    const fathersEmail = document.getElementById('fathersEmail').value;
    const mothersEmail = document.getElementById('mothersEmail').value;

    const isValidEmail = email.includes('@');
    const isValidFathersEmail = fathersEmail.includes('@');
    const isValidMothersEmail = mothersEmail.includes('@');

    if (!isValidEmail) {
        document.getElementById('emailError').style.display = 'block';
        event.preventDefault();
    }

    if (!isValidFathersEmail) {
        document.getElementById('fathersEmailError').style.display = 'block';
        event.preventDefault();
    }

    if (!isValidMothersEmail) {
        document.getElementById('mothersEmailError').style.display = 'block';
        event.preventDefault();
    }
});


const contactNoInput = document.getElementById('contactNo');
const contactError = document.getElementById('contactError');

contactNoInput.addEventListener('input', function() {
const value = contactNoInput.value;

if (/^\d+$/.test(value)) {

    contactError.style.display = 'none';
} else {

    contactError.style.display = 'block';
}
});


document.getElementById('biodataForm').addEventListener('submit', function(event) {
if (!/^\d+$/.test(contactNoInput.value)) {
    event.preventDefault();  
}
});
function loadImage(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const image = document.getElementById('profilePicture');
        image.src = e.target.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    }
}

const childrenTextarea = document.getElementById('children');

const childrenCalendarDiv = document.getElementById('children-calendar');

childrenTextarea.addEventListener('input', () => {
    const childrenValue = childrenTextarea.value;

    if (childrenValue.trim() !== '') {
        const datePicker = document.createElement('input');
        datePicker.type = 'date';
        datePicker.id = 'children-date-picker';

        childrenCalendarDiv.innerHTML = '';
        childrenCalendarDiv.appendChild(datePicker);
    } else {
        childrenCalendarDiv.innerHTML = '';
    }
});