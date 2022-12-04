//create back to top button and make it go to top of page
function createBackToTopButton() {
    var backToTopButton = document.createElement("button");
    backToTopButton.id = "backToTopButton";
    backToTopButton.innerHTML = "Back to Top";
    $(backToTopButton).css("display", "none");
    backToTopButton.onclick = function () {
        window.scrollTo(0, 0);
    };
    document.body.appendChild(backToTopButton);
}

createBackToTopButton();
//appear back to top button when user scrolls down
window.onscroll = function () {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("backToTopButton").style.display = "block";
    } else {
        document.getElementById("backToTopButton").style.display = "none";
    }
}