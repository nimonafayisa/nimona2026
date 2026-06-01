const menuBtn = document.getElementById("menuBtn");
const navLinks = document.getElementById("navLinks");

// open/close menu
menuBtn.onclick = () => {
    navLinks.classList.toggle("active");
};

// when we click links close navlinks
document.querySelectorAll("#navLinks a").forEach(link => {
    link.onclick = () => {
        navLinks.classList.remove("active");
    };
});

