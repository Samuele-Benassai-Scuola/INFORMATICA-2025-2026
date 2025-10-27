

function validateForm() {
    const name = document.querySelector('#nameInput')
    const email = document.querySelector('#emailInput')
    const message = document.querySelector('#messageInput')

    return validateName(name) &
        validateEmail(email) &
        validateMessage(message)
}

function validateName(name) {
    return name.match(/^[a-zA-Z ]*[a-zA-Z]+[a-zA-Z ]*$/)
}

function validateEmail(email) {
    const emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/

    return email.match(emailRegex)
}

function validateMessage(message) {
    return message.length <= 300
}