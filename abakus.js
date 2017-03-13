window.onload = function() {
    var elements = document.querySelectorAll("div.bead");
    for(var i = 0; i < elements.length; i++){
        elements[i].onclick = function() {
            //Niisama cssFloat küsimine ei tööta sest on eraldi failis määratud css
            var kus = window.getComputedStyle(this).cssFloat;
            if (kus == "right") {
                this.style.cssFloat = "left";
            }
            else if (kus == "left") {
                this.style.cssFloat = "right";
            }
        }
    }
}