const form = document.getElementById('form');
const lname = document.getElementById('lname');
const sname = document.getElementById('sname');
const fname = document.getElementById('fname');
const email = document.getElementById('email');
const grade = document.getElementById('grade');
const age = document.getElementById('age');
const mname = document.getElementById('mname');
const mfname = document.getElementById('mfname');
const nation = document.getElementById('nationality');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const pname = document.getElementById('pname');
const pfname = document.getElementById('pfname');
const pphone = document.getElementById('pphone');
const popup = document.getElementById("popup");
const image = document.getElementById('img');
const atach = document.getElementById('atach');
const studid=document.getElementById('studid');
const oldpassword=document.getElementById('oldpassword');
const reserve=document.getElementById('reserve');
const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const snameValue = sname.value.trim();
    const emailValue = email.value.trim();
    const gradevalue = grade.value.trim();
    const agevalue = age.value.trim();
    const nationvalue = nation.value.trim();
    const phonevalue = phone.value.trim();
    const mfnameValue = mfname.value.trim();
    const pnameValue = pname.value.trim();
    const pfnameValue = pfname.value.trim();
    const pphonevalue = pphone.value.trim();
    const mnameValue = mname.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
   if(fnameValue === ''||lnameValue === ''||snameValue === ''||emailValue === ''||passwordValue === ''||
   !isValidEmail(emailValue)||passwordValue.length < 8||password2Value === ''||password2Value !== passwordValue||
   pnameValue === ''||pfnameValue === ''||pphonevalue === ''||atach.value === ''||image.value === ''){
    if(fnameValue === '') {
        setError(fname, 'name is required');
    } else {
        setSuccess(fname);
    }
    if(lnameValue === '') {
        setError(lname, 'father name is required');
    } else {
        setSuccess(lname);
    }
    if(snameValue === '') {
        setError(sname, 'G.f name is required');
    } else {
        setSuccess(sname);
    }
    if(gradevalue <9||gradevalue>12) {
        setError(grade, 'please enter a valid grade');
    } else {
        setSuccess(grade);
    }
    if(agevalue === '') {
        setError(age, 'please enter your age');
    }
    else if(agevalue <15) {
        setError(age, 'your age is to low');
    } else {
        setSuccess(age);
    }
    if(mnameValue === '') {
        setError(mname, 'mother name is required');
    } else {
        setSuccess(mname);
    }
    if(mfnameValue === '') {
        setError(mfname, 'M.father name is required');
    } else {
        setSuccess(mfname);
    }
    if(nationvalue === '') {
        setError(nation, 'natinality is required');
    } else {
        setSuccess(nation);
    }
    if(phonevalue === '') {
        setError(phone, 'Phone number is required');
    } else {
        setSuccess(phone);
    }
    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }
    if(image.value === '') {
        setError(image, 'image is required');
    } else {
        setSuccess(image);
    }
    if(pnameValue === '') {
        setError(pname, 'contact name is mandatory');
    } else {
        setSuccess(pname);
    }
    if(pfnameValue === '') {
        setError(pfname, 'contact name is mandatory');
    } else {
        setSuccess(pfname);
    }
    if(pphonevalue === '') {
        setError(pphone, 'Phone number is required');
    } else {
        setSuccess(pphone);
    }
    if(atach.value === '') {
        setError(atach, 'please atach your document');
    } else {
        setSuccess(atach);
    }
    return false;
   }
};
function closepopup(){
    popup.classList.remove("open-popup");
    window.open('login.php','_self')
}
function openpopup(){
    popup.classList.add("open-popup");
}
const validateInputs2 = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
   if(emailValue === ''||!isValidEmail(emailValue)||passwordValue === ''||passwordValue.length < 8){
    
    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

	return false;
   }
};

const registerTeacher = () => {
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const snameValue = sname.value.trim();
    const emailValue = email.value.trim();
    const gradevalue = grade.value.trim();
    const agevalue = age.value.trim();
    const nationvalue = nation.value.trim();
    const phonevalue = phone.value.trim();
    const passwordValue = password.value.trim();
   if(fnameValue === ''||lnameValue === ''||snameValue === ''||emailValue === ''||passwordValue === ''||
   !isValidEmail(emailValue)||passwordValue.length < 8||atach.value === ''){
    if(fnameValue === '') {
        setError(fname, 'name is required');
    } else {
        setSuccess(fname);
    }
    if(lnameValue === '') {
        setError(lname, 'father name is required');
    } else {
        setSuccess(lname);
    }
    if(snameValue === '') {
        setError(sname, 'G.f name is required');
    } else {
        setSuccess(sname);
    }
    if(gradevalue <9||gradevalue>12) {
        setError(grade, 'please enter a valid grade');
    } else {
        setSuccess(grade);
    }
    if(agevalue === '') {
        setError(age, 'please enter your age');
    }
    else if(agevalue <28) {
        setError(age, 'your age is to low');
    } else {
        setSuccess(age);
    }
    if(nationvalue === '') {
        setError(nation, 'natinality is required');
    } else {
        setSuccess(nation);
    }
    if(phonevalue === '') {
        setError(phone, 'Phone number is required');
    } else {
        setSuccess(phone);
    }
    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }
    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }
    if(atach.value === '') {
        setError(atach, 'please enter the subject');
    } else {
        setSuccess(atach);
    }
    return false;
   }
};
function techerRegPop(){
    popup.classList.remove("open-popup");
    window.open('teacher.php','_self')
}
const registerParent = () => {
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const snameValue = sname.value.trim();
    const emailValue = email.value.trim();
    const studname = studid.value.trim();
    const agevalue = age.value.trim();
    const phonevalue = phone.value.trim();
    const passwordValue = password.value.trim();
   if(fnameValue === ''||lnameValue === ''||snameValue === ''||emailValue === ''|| studname === ''||passwordValue === ''||
   !isValidEmail(emailValue)||passwordValue.length < 8){
    if(fnameValue === '') {
        setError(fname, 'name is required');
    } else {
        setSuccess(fname);
    }
    if(lnameValue === '') {
        setError(lname, 'father name is required');
    } else {
        setSuccess(lname);
    }
    if(snameValue === '') {
        setError(sname, 'G.f name is required');
    } else {
        setSuccess(sname);
    }
    if(agevalue === '') {
        setError(age, 'please enter your age');
    }
    else if(agevalue <28) {
        setError(age, 'your age is to low');
    } else {
        setSuccess(age);
    }
    if(phonevalue === '') {
        setError(phone, 'Phone number is required');
    } else {
        setSuccess(phone);
    }
    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }
    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }
    return false;
   }
};
function parentRegPop(){
    popup.classList.add("open-popup");
}

const registerTeacher1 = () => {
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const snameValue = sname.value.trim();
    const emailValue = email.value.trim();
    const gradevalue = grade.value.trim();
    const phonevalue = phone.value.trim();
    const passwordValue = password.value.trim();
   if(fnameValue === ''||lnameValue === ''||snameValue === ''||emailValue === ''||passwordValue === ''||
   !isValidEmail(emailValue)||passwordValue.length < 8||atach.value === ''){
    if(fnameValue === '') {
        setError(fname, 'name is required');
    } else {
        setSuccess(fname);
    }
    if(lnameValue === '') {
        setError(lname, 'father name is required');
    } else {
        setSuccess(lname);
    }
    if(snameValue === '') {
        setError(sname, 'G.f name is required');
    } else {
        setSuccess(sname);
    }
    if(gradevalue <9||gradevalue>12) {
        setError(grade, 'please enter a valid grade');
    } else {
        setSuccess(grade);
    }
    if(phonevalue === '') {
        setError(phone, 'Phone number is required');
    } else {
        setSuccess(phone);
    }
    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }
    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }
    return false;
   }
};
function closepopup1(){
    popup.classList.remove("open-popup");
}
const validatechange = () => {
    const oldpassvalue = oldpassword.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    const reservevalue = reserve.value.trim();
   if(oldpassvalue === ''||passwordValue === ''||passwordValue.length < 8||password2Value === ''||password2Value != passwordValue||
   reservevalue != oldpassvalue||passwordValue ===  oldpassvalue){
    
    if(oldpassvalue === '') {
        setError(oldpassword, 'old password is required');
    }
    else if(reservevalue != oldpassvalue) {
        setError(oldpassword, 'incorect password');
    }
    else {
        setSuccess(oldpassword);
    }
    if(passwordValue === '') {
        setError(password, 'New Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else if (passwordValue ===  oldpassvalue) {
        setError(password, 'Please choose anew password.')
    } else {
        setSuccess(password);
    }
    if(password2Value === '') {
        setError(password2, 'Password coniformation is required');
    } else if (password2Value != passwordValue) {
        setError(password2, 'password dosent match')
    } else if (password2Value ===  oldpassvalue) {
        setError(password2, 'Please choose anew password.')
    }  else {
        setSuccess(password);
    }
	return false;
   }
};