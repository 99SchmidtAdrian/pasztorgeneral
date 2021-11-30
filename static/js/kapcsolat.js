//form validation

const overlay =  document.querySelector('.overlay');

document.querySelector('.form').addEventListener('submit', (e) => {
    const name = document.querySelector("#name");
    const email = document.querySelector("#email");
    const msg = document.querySelector(".msg");
    const overlayMsg = document.querySelector(".overlay__msg");
    let errorMsg = "";
    if(name.value.length < 3){
        e.preventDefault()
        errorMsg = "A névnek legalább 3 karakter hosszúnak kell lennie.";
        overlayMsg.innerText = errorMsg
        overlay.classList.add('overlay-visible');
        return;
    }
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
        e.preventDefault()
        errorMsg = "Az email helytelen.";
        overlayMsg.innerText = errorMsg
        overlay.classList.add('overlay-visible');
        return;
    }
    if (msg.value.length < 100) {
        e.preventDefault()
        errorMsg = "Az üzenetnek legalább 100 karakter hosszúnak kell lennie.";
        overlayMsg.innerText = errorMsg;
        overlay.classList.add('overlay-visible');
        return;    
    }
})

//overlay close

document.querySelector(".overlay__button").addEventListener("click", () => {
    overlay.classList.remove("overlay-visible")
})

//email sent alert

console.log(window.location.search)
if(window.location.search === "?email-sent"){
    const emailSent = document.querySelector('.email-sent');
    emailSent.style.transition = "all .6s ease-in-out";
    emailSent.classList.add('email-sent-visible');
    setTimeout(() => {
        emailSent.classList.remove('email-sent-visible');
    }, 3000)
}
