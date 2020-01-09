var acc = document.getElementsByClassName("accordion");
var i;

for (i =0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /*Toggle between adding and removing the "avtive" class, to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hinding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}