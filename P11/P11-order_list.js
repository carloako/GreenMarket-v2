let modal = document.getElementById('delete-order-modal');
let btnClose = document.getElementById('close-modal');
let btnCancel = document.getElementById('cancel-button');
let btnConfirm = document.getElementById('confirm-button');
let successAlert = document.getElementById('success-alert');

btnClose.addEventListener('click', (e) => {
	modal.style.display = "none";
	modal.className = "modal fade";
});

btnCancel.addEventListener('click', (e) => {
	modal.style.display = "none";
	modal.className = "modal fade";
});

btnConfirm.addEventListener('click', (e) => {
	modal.style.display = "none";
	modal.className = "modal fade";
	successAlert.style.display = "block";
	window.setTimeout(() => {
		successAlert.style.display = "none";
	}, 4000)
});

function toggleConfirmation() {
	modal.style.display = "block";
	modal.style.paddingRight = "17px";
	modal.className = "modal fade show";
}