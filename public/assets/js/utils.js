window.addEventListener("DOMContentLoaded", () => {
	loadDarkLightMode();
	toggleExpandCollapse();
	togglePassword();
});

/**
* Switch Dark/Light Mode Function
* -
* Save as localStorage
*/
function toggleDarkLightMode() {
	let element = document.body;
	element.classList.toggle('dark');

	if (element.classList.contains('dark')) {
		element.classList.remove('light');
		localStorage.setItem('darkMode', 'true');
	} else {
		element.classList.add('light');
		localStorage.setItem('darkMode', 'false');
	}
}

/**
* Load Dark/Light Mode Function
* -
* Check and apply dark/light mode.
*/
function loadDarkLightMode() {
	const isDarkMode = localStorage.getItem('darkMode');
	if (isDarkMode === 'true') {
		document.body.classList.add('dark');
	}

	document.getElementById('dark-light-mode').onclick = () => {
		toggleDarkLightMode();
	};
}

/**
* Expand/Collapse Function
* -
* Save as localStorage
*/
function toggleExpandCollapse() {
	const storageKey = 'detailsState';
	const savedState = JSON.parse(localStorage.getItem(storageKey) || '{}');

	// 1. Get localStorage object
	Object.entries(savedState).forEach(([id, state]) => {
		const elementId = document.getElementById(id);
		if (elementId) {
			if (state === 'open') {
				elementId.setAttribute('open', '');
			} else {
				elementId.removeAttribute('open');
			}
		}
	});

	// 2. Toggle action & update localStorage
	document.querySelectorAll('[data-name="open-close"]').forEach(detail => {
		detail.addEventListener('toggle', function() {
			const detailId = this.id;
			const isOpen = this.hasAttribute('open');

			savedState[detailId] = isOpen ? 'open' : 'close';
			localStorage.setItem(storageKey, JSON.stringify(savedState));
		});
	});
}

/**
* Toggle Password Function
* -
* Ability to 'show/hide' password in form fields.
*/
function togglePassword() {
	document.addEventListener('click', function(event) {
		const toggleElement = event.target.closest('[data-name="toogle-password"]');

		if (toggleElement) {
			const inputId = toggleElement.dataset.id;
			const passwordInput = document.getElementById(inputId);
			const eyeOpenIcon = toggleElement.querySelector('#eye-open');
			const eyeCloseIcon = toggleElement.querySelector('#eye-close');

			if (passwordInput && eyeOpenIcon && eyeCloseIcon) {
				if (passwordInput.type === 'password') {
					passwordInput.type = 'text';
					eyeOpenIcon.classList.add('hidden');
					eyeCloseIcon.classList.remove('hidden');
				} else {
					passwordInput.type = 'password';
					eyeOpenIcon.classList.remove('hidden');
					eyeCloseIcon.classList.add('hidden');
				}
			}
		}
	});
}
