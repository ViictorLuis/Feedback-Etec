window.addEventListener("load", function(){
    const popup = this.document.getElementById("popup");
    popup.style.display = "flex";
});

document.getElementById("closePopup").addEventListener("click", function() {
    document.getElementById("popup").style.display = "none";
});