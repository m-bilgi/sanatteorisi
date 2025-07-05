window.addEventListener("DOMContentLoaded", () => {
	loadDarkLightMode();

	const STORAGE_KEY = getExpandCollapseLocalStorage('detailsState');
	document.addEventListener('click', function(event) {
		toggleExpandCollapse(event, 'detailsState', STORAGE_KEY);
	});
});

/**
* Switch Dark/Light Mode Function
* -
* ---
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
* ---
* Check and apply dark/light mode.
*/
function loadDarkLightMode() {
	const IS_DARK_MODE = localStorage.getItem('darkMode');
	if (IS_DARK_MODE === 'true') {
		document.body.classList.add('dark');
	}

	document.getElementById("dark-light-mode").onclick = function() {
		toggleDarkLightMode();
		return false;
	};
}

/**
* getExpandCollapseLocalStorage Function
* -
* ---
* Read localStorage data and return it as a json object.
*
* ---
* @param {string} storageKey localStorage 'Key'
* @return {object} localStorage obj
*/
function getExpandCollapseLocalStorage(storageKey) {
	const SAVED_STATE = JSON.parse(localStorage.getItem(storageKey) || '{}');

	Object.entries(SAVED_STATE).forEach(([id, state]) => {
        const detailElement = document.getElementById(id);
        if (detailElement) {
            if (state === 'open') {
                detailElement.setAttribute('open', '');
            } else {
                detailElement.removeAttribute('open');
            }
        }
    });
	return SAVED_STATE;
}

/**
* Expand/Collapse Function
* -
* ---
* @param {string} event EventListener 'click'
* @param {string} storageKey localStorage 'Key'
* @param {object} savedState localStorage obj
*/
function toggleExpandCollapse(event, storageKey, savedState) {
	if (event.target.tagName === 'SUMMARY') {
		const parentDetails = event.target.closest('details');

		if (parentDetails && parentDetails.id) {
			const detailId = parentDetails.id;
			const isOpen = parentDetails.hasAttribute('open');

			// Reverse the situation and save
			savedState[detailId] = isOpen ? 'close' : 'open';
			localStorage.setItem(storageKey, JSON.stringify(savedState));
		}
	}
}

/**
* Modal Function
* -
* ---
* @param {string} id modal element id.
*/
function getModal(id) {
	document.body.classList.toggle('overflow-hidden');
	document.getElementById(id).classList.toggle('invisible');
}
