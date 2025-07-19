window.addEventListener("DOMContentLoaded", () => {
	loadModal();
});

/**
* Load Modal Function
* -
* All modal operations.
* - Close when press Esc
* - Close when clicking outside
* - Close when clicked X button
*/
function loadModal() {
	const modalLinks = document.querySelectorAll('[data-name="modal"]');
	const closeModalLink = document.querySelector('[data-name="close-modal"]');

	modalLinks.forEach(link => {
		link.addEventListener('click', function(event) {
			event.preventDefault();

			const modalId = this.id.concat('-', 'modal');
			const modalElement = document.getElementById(modalId);
			const modalContent = modalElement.querySelector('[data-name="modal-content"]');

			// Open/Close Modal
			toggleModal(modalId);

			// ESC handler save reference
			const escHandler = function(event) {
				if (event.key === 'Escape') {
					toggleModal(modalId);
					cleanup();
				}
			};

			// Outside click handler
			const clickOutsideHandler = function(e) {
				const isInside = modalContent.contains(e.target);
				const isModalTrigger = link.contains(e.target); // do not close on the first click

				if (!isInside && !isModalTrigger) {
					toggleModal(modalId);
					cleanup();
				}
			};

			// Function to clear modal closures
			function cleanup() {
				document.removeEventListener('keydown', escHandler);
				document.removeEventListener('click', clickOutsideHandler);
			}

			// Listeners for ESC and outside clicks
			document.addEventListener('keydown', escHandler);
			document.addEventListener('click', clickOutsideHandler);

			// Cleanup when X button is clicked
			if (closeModalLink) {
				closeModalLink.onclick = () => {
					toggleModal(modalId);
					cleanup();
				};
			}
		});
	});
}

/**
* Toggle Modal Function
* -
* Show & hide modal
*
* ---
* @param {string} id modal element id.
*/
function toggleModal(id) {
	document.body.classList.toggle('overflow-hidden');
	document.getElementById('header').classList.toggle('hidden');
	document.getElementById(id).classList.toggle('invisible');
}
