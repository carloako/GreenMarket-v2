function plus() {
    if (document.getElementById("quantity").value === "") {
        document.getElementById("quantity").value = 0;
    }
    document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) + 1;
    save();
}
function minus() {
    if (document.getElementById("quantity").value === "") {
        document.getElementById("quantity").value = 0;
    }
    if (document.getElementById("quantity").value != 0) {
        document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) - 1;
    }
    save();
}
function readMore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("readmore");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        moreText.style.display = "none";
        btnText.innerHTML = "More Description";
    }
    else {
        dots.style.display = "none";
        moreText.style.display = "inline";
        btnText.innerHTML = "Less Description";
    }
}
function goToAddToCart() {
    document.getElementById("checkAdd").value = "1";
}
// function load(){
//   load = localStorage.getItem("quantity");
//   document.getElementById("quantity").value = load;
// }
// function save(){
//   save = document.getElementById("quantity").value;
//   localStorage.setItem("quantity", save);
// }