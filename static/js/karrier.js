//form validation

const overlay = document.querySelector(".overlay");
const cvFile = document.querySelector(".cv-input");
const coverLetterFile = document.querySelector(".coverletter-input"); 


document.querySelector(".form").addEventListener("submit", (e) => {
  document.querySelector(".overlay").style.transition = "all .4s ease-in-out";
  const name = document.querySelector("#name");
  const email = document.querySelector("#email");
  const overlayMsg = document.querySelector(".overlay__msg");
  const allowedExtensions = ["pdf", "doc", "docx", "jpg", "jpeg", "png", "txt"];
  const regex = new RegExp(
    "([a-zA-Z0-9s_\\.-:])+(" + allowedExtensions.join("|") + ")$"
  );
  let errorMsg = "";
  if (name.value.length < 3) {
    e.preventDefault();
    errorMsg = "A névnek legalább 3 karakter hosszúnak kell lennie.";
    overlayMsg.innerText = errorMsg;
    overlay.classList.add("overlay-visible");
    return;
  }
  if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) {
    e.preventDefault();
    errorMsg = "Az email helytelen.";
    overlayMsg.innerText = errorMsg;
    overlay.classList.add("overlay-visible");
    return;
  }
  if (!regex.test(cvFile.value.toLowerCase()) && cvFile.value !== "") {
    e.preventDefault();
    errorMsg =
      "Az önéletrajz csatolmány kiterjesztése nem megfelelő.\nEngedélyezett kiterjesztések:\npdf, doc, docx, jpg, jpeg, png, txt";
    overlayMsg.innerText = errorMsg;
    overlay.classList.add("overlay-visible");
    return;
  }
  if (!regex.test(coverLetterFile.value.toLowerCase()) && coverLetterFile.value !== "") {
    e.preventDefault();
    errorMsg =
      "A motivációs levél kiterjesztése nem megfelelő.\nEngedélyezett kiterjesztések:\npdf, doc, docx, jpg, jpeg, png, txt";
    overlayMsg.innerText = errorMsg;
    overlay.classList.add("overlay-visible");
    return;
  }
});

//overlay close

document.querySelector(".overlay__button").addEventListener("click", () => {
  overlay.classList.remove("overlay-visible");
});

//email sent alert

if (window.location.search === "?email-sent") {
  const emailResponse = document.querySelector(".email-response");
  document.querySelector(".email-response__content").innerText =
    "Köszönjük, hogy felkeresett minket! Jelentkezését megkaptuk, hamarosan keresni fogjuk!";
  emailResponse.style.transition = "all .6s ease-in-out";
  emailResponse.style.color = "#e2b476";
  emailResponse.classList.add("email-response-visible");
  setTimeout(() => {
    emailResponse.classList.remove("email-response-visible");
  }, 8000);
} else if (window.location.search === "?email-send-failed") {
  const emailResponse = document.querySelector(".email-response");
  document.querySelector(".email-response__content").innerHTML =
    "Valami hiba történt, kérjük próbálja meg újra. Ha a hiba továbbra is fennállna, kérjük a következő emailre küldje el a jelentkezését: \n<a href='mailto: pasztorgeneraltaki@gmail.com'>pasztorgeneraltaki@gmail.com</a>";
  emailResponse.style.transition = "all .6s ease-in-out";
  emailResponse.style.backgroundColor = " #f87171";
  emailResponse.classList.add("email-response-visible");
  setTimeout(() => {
    emailResponse.classList.remove("email-response-visible");
  }, 8000);
}

//file name change
cvFile.addEventListener('change', ()=>{
  let filepath = cvFile.value;
  if (filepath === "") {
    document.querySelector(".cv-filename").innerText = "Nincs fájl kiválasztva";

  }else{
    let m = filepath.match(/([^\/\\]+)$/);
    let filename = m[1];
    document.querySelector(".cv-filename").innerText = filename;  
  }
})

coverLetterFile.addEventListener('change', ()=>{
  let filepath = coverLetterFile.value;
  if (filepath === "") {
    document.querySelector(".coverletter-filename").innerText = "Nincs fájl kiválasztva";

  }else{
    let m = filepath.match(/([^\/\\]+)$/);
    let filename = m[1];
    document.querySelector(".coverletter-filename").innerText = filename;  
  }
})