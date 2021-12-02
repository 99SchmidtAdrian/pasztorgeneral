//form validation

const overlay =  document.querySelector('.overlay');

document.querySelector('.form').addEventListener('submit', (e) => {
    document.querySelector('.overlay').style.transition = "all .4s ease-in-out";
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

if(window.location.search === "?email-sent"){
    const emailResponse = document.querySelector('.email-response');
    document.querySelector(".email-response__content").innerText = "Köszönjük, hogy felkeresett minket! Üzenetét megkaptuk, hamarosan válaszolni fogunk!"
    emailResponse.style.transition = "all .6s ease-in-out";
    emailResponse.style.color = "#e2b476";
    emailResponse.classList.add('email-response-visible');
    setTimeout(() => {
        emailResponse.classList.remove('email-response-visible');
    }, 3000)
}else if(window.location.search === "?email-send-failed"){
    const emailResponse = document.querySelector('.email-response');
    document.querySelector(".email-response__content").innerText = "Valami hiba történt, kérjük próbálja meg újra. Ha a hiba továbbra is fennállna, kérjük a következő emailen keressen minket: \nezegy@email.com"
    emailResponse.style.transition = "all .6s ease-in-out";
    emailResponse.style.backgroundColor = " #f87171";
    emailResponse.classList.add('email-response-visible');
    setTimeout(() => {
        emailResponse.classList.remove('email-response-visible');
    }, 8000)
}
