$(document).ready( () => {
    $("#sidebar").fadeIn(1000);
    $(".main-page").fadeIn(1000);
})

const check= ( selector, regex, errorMessage) => {
    const Input= $(`${selector}`).val();

    const isCorrect=regex.test(Input);

    if(!isCorrect) {
        $(`${selector}-error`).html(errorMessage);
        $(`${selector}`).addClass(`is-invalid`);
        return;
    }

    $(`${selector}`).removeClass(`is-invalid`);
    $(`${selector}-error`).html("");
}

const checkEmail2 = () => {
    check("#email", /(^.+@.+\..+$)|(^$)/g, "This is not an email");
}
    
const checkPhone2 = () => {
    check("#phone", /^[0-9]*$/g, "This is not a phone number");
}
