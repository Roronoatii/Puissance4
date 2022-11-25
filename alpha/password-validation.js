const SPECIALE_CHAR_REGEX = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
const LOWERCASE_REGEX = /[a-z]/;
const UPERCASE_REGEX = /[A-Z]/;
const DIGIT_REGEX = /[0-9]/;

function getPasswordLevel(password) {
    if (password.length < 8) {
        return "LOW";
    }

    if (password.match(DIGIT_REGEX) &&
        password.match(LOWERCASE_REGEX) &&
        password.match(UPERCASE_REGEX) &&
        password.match(SPECIALE_CHAR_REGEX)) {
        return "HIGH";
    }

    return "MEDIUM";
}

function isPasswordValid(password) {
    const passwordLevel = getPasswordLevel(password);
    return passwordLevel == "HIGH";
}

function isConfirmPasswordValid(password, confirmPassword) {
    return password == confirmPassword;
}