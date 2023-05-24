import "./bootstrap";
import "tw-elements";
const btn = document.getElementById("menu-btn");
const nav = document.getElementById("menu");
btn.addEventListener("click", () => {
    btn.classList.toggle("open");
    nav.classList.toggle("flex");
    nav.classList.toggle("hidden");
});

/*********************/
/*   Back To Top     */
/*********************/

var mybutton = document.getElementById("back-to-top");
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (mybutton != null) {
        if (
            document.body.scrollTop > 500 ||
            document.documentElement.scrollTop > 500
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
}

function topFunction() {
    var currentScroll =
        document.documentElement.scrollTop || document.body.scrollTop;
    if (currentScroll > 0) {
        window.requestAnimationFrame(topFunction);
        window.scrollTo(0, currentScroll - currentScroll / 8);
    }
}
