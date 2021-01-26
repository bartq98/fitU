const form = document.querySelector('form');
const mesg = document.querySelector('.form-message');


const nameIn = document.querySelector('input[name="name"]');
const surnameIn = document.querySelector('input[name="surname"]');
const emailIn = document.querySelector('input[name="email"]');
const passIn = document.querySelector('input[name="password"]');
const passRepeatIn = document.querySelector('input[name="password-repeat"]');

const sumbitBtn = document.querySelector('button');
sumbitBtn.disabled = true;

const regName = /^[a-zA-z\d]{3,18}$/;
const regEmail = /^[a-z\d]+[\w\d.-]*@(?:[a-z\d]+[a-z\d-]+\.){1,5}[a-z]{2,6}$/i;

let passed = [false, false, false, false];

form.addEventListener("change", e => {
    if (passed.every((elem)=>{
        return elem;
    })) {
        sumbitBtn.disabled = false;
    } else {
        sumbitBtn.disabled = true;
    }
});

nameIn.addEventListener("change", e => {
    e.preventDefault();

    if (regName.test(nameIn.value)) {
        nameIn.className = "valid";
        passed[0] = true;
    } else {
        passed[0] = false;
        nameIn.className = "invalid";
    }

});

surnameIn.addEventListener("change", e => {
    e.preventDefault();

    if (regName.test(surnameIn.value)) {
        surnameIn.className = "valid";
        passed[1] = true;
    } else {
        passed[1] = false;
        surnameIn.className = "invalid";
    }

});


emailIn.addEventListener("change", e => {
    e.preventDefault();

    if (regEmail.test(emailIn.value)) {
        emailIn.className = "valid";
        passed[2] = true;
    } else {
        passed[2] = false;
        emailIn.className = "invalid";
    }
});

passRepeatIn.addEventListener("change", e => {

    e.preventDefault();

    if (passIn.value == passRepeatIn.value) {
        passIn.className = "valid";
        passRepeatIn.className = "valid";
        passed[3] = true;
    } else {
        passed[3] = false;
        passIn.className = "invalid";
        passRepeatIn.className = "invalid";
    }
});

passIn.addEventListener("change", e => {

    e.preventDefault();

    if (passIn.value == passRepeatIn.value) {
        passIn.className = "valid";
        passRepeatIn.className = "valid";
        passed[3] = true;
    } else {
        passed[3] = false;
        passIn.className = "invalid";
        passRepeatIn.className = "invalid";
    }
});

