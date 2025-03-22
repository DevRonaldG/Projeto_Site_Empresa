window.onload = function() {
    var popup = document.getElementById("popup");

    popup.style.display = "none";

    setTimeout(function() {
        popup.style.display = "block";
        popup.style.opacity = 0;
        setTimeout(function() {
            popup.style.transition = "opacity 2s  ";
            popup.style.opacity = 1;
        }, 10);
    }, 1000);

    var closeBtn = document.getElementById("closeBtn");
    closeBtn.onclick = function() {
        popup.style.opacity = 0;
        setTimeout(function() {
            popup.style.display = "none";
        }, 700);
    };

    window.onclick = function(event) {
        if (event.target == popup) {
            closeBtn.onclick();
        }
    };
};