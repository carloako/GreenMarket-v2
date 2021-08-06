let modal = document.getElementById('delete-order-modal');
let btnClose = document.getElementById('close-modal');
let btnCancel = document.getElementById('cancel-button');
let btnConfirm = document.getElementById('confirm-button');

btnClose.addEventListener('click', (e) => {
	modal.style.display = "none";
	modal.className = "modal fade";
});

btnCancel.addEventListener('click', (e) => {
	modal.style.display = "none";
	modal.className = "modal fade";
});

// for now confirm just closes the modal like the other buttons
// will be made functional in assignment 3
btnConfirm.addEventListener('click', (e) => {
	modal.style.display = "none";
	modal.className = "modal fade";
});

function toggleConfirmation() {
	modal.style.display = "block";
	modal.style.paddingRight = "17px";
	modal.className = "modal fade show";

}