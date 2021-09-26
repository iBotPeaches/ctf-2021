window.console.log = function() {
    console.error('nah, try alert');
    window.console.log = function() {
        return false;
    }
}
window.alert = function() {
    console.warn(atob('VE9BRHtYU1NfSVNfRlVOfQ=='));
}
// https://obfuscator.io/