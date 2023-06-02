const menuButton = document.querySelector(".toggle");
const navLinks = document.querySelector(".nav-links");
const contact = document.querySelector("#contact");


menuButton.addEventListener("click",()=>{
    navLinks.classList.toggle("mobile-menu")

// To control page visibility when you click on  menuButton
    if (contact.style.opacity === "0") {
        contact.style.opacity = "1";
    } else {
        contact.style.opacity = "0";
    }

})
