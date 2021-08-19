
// document.getElementById("quantity").onchange = subtotalCalc;
document.getElementById("plus").addEventListener("click", plus);
document.getElementById("plus").addEventListener("click", subtotalCalc);
document.getElementById("minus").addEventListener("click", minus);
document.getElementById("minus").addEventListener("click", subtotalCalc);
window.addEventListener("load", loadQuantity);
// window.addEventListener("load",load);
window.addEventListener("load", subtotalCalc);