// calculate total on load
function calculateTotalOnLoad() {
    var totalWOTax = 0;
    var tax = 0;
    var total = 0;
    if (document.getElementsByName("productq[]").length != 0) {
        var product = document.getElementsByName("productq[]");
        var price = document.getElementsByName("price[]");
        for (var i = 0; i < product.length; i++) {
            totalWOTax += product[i].value * price[i].value;
        }
        tax = totalWOTax * 0.05;
        total = tax + totalWOTax;
        document.getElementById("totalwotax").innerHTML = "$" + totalWOTax.toFixed(2);
        document.getElementById("gst").innerHTML = "$" + tax.toFixed(2);
        document.getElementById("total").innerHTML = "$" + total.toFixed(2);
        document.getElementById("totalinput").value = total.toFixed(2);
        document.getElementById("btn-save-changes").style.display = "block";
        document.getElementById("overviewprice-box").style.display = "block";
    } else {
        document.getElementById("totalwotax").innerHTML = "$0.00";
        document.getElementById("gst").innerHTML = "$0.00";
        document.getElementById("total").innerHTML = "$0.00";
        document.getElementById("totalinput").value = 0;
        document.getElementById("sc-empty-text").style.display = "block";
    }
}

// function loadText() {
//   if (document.getElementsByName("productq[]") == null) {
//   }
// }

// calculate total when changing quantities
function calculateTotal() {
    document.getElementById("total").innerHTML = "textcalc";
    var totalWOTax = 0;
    var tax = 0;
    var total = 0;
    var productq = document.getElementsByName("productq[]");
    var price = document.getElementsByName("price[]");
    for (var i = 0; i < productq.length; i++) {
        totalWOTax = parseFloat(totalWOTax) + parseFloat(productq[i].value) * parseFloat(price[i].value);
    }
    tax = totalWOTax * 0.05;
    total = tax + totalWOTax;
    document.getElementById("totalwotax").innerHTML = "$" + totalWOTax.toFixed(2);
    document.getElementById("gst").innerHTML = "$" + tax.toFixed(2);
    document.getElementById("total").innerHTML = "$" + total.toFixed(2);
    // saveChanges();
}

// saving changes in submit form then reload page
function saveChanges() {
    var x = document.getElementById("scform").submit();
    return null;
}

// var changeNumber = 1;
// function checkChanges(){
//   if (changeNumber == 0){
//     return null;
//   }
//   else{
//     saveChanges();
//     return "asdasdsd";
//   }
// }
// function checkDelete (pid) {
//   document.getElementById(pid).value = 1;
// }

// make event handlers for quantity changes to calculate total
var qButtons = document.getElementsByName("productq[]");
for (var i = 0; i < qButtons.length; i++) {
    qButtons[i].onchange = calculateTotal;
}

// load total on load
window.addEventListener("load", calculateTotalOnLoad);
// document.addEventListener("load", loadText);
// payment button
// document.getElementById("payment").addEventListener("click", checkUser);
// save changes button
document.getElementById("btn-save-changes").addEventListener("click", saveChanges);