/**
* Switch Dark/Light Mode Function
* -
*/
function toggleDarkLightMode() {
	let element = document.body;
	element.classList.toggle('dark');

	if (element.classList.contains('dark')) {
		element.classList.remove('light');
		setCookieSubKey('STv7ComTheme', 'darkMode', true);
	} else {
		element.classList.add('light');
		setCookieSubKey('STv7ComTheme', 'darkMode', false);
	}
}

/**
* Save 'Expand/Collapse' status as cookie.
* -
* ---
* @param {string} key cookie key
*/
function toggleExpandCollapse(key) {
	const ELEMENT = document.getElementById(key);

	if (ELEMENT.open) {
		setCookieSubKey('STv6ComHide', key, 1);
	} else {
		setCookieSubKey('STv6ComHide', key, 0);
	}
}
