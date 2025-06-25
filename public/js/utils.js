/**
* Switch Dark/Light Mode Function
* -
*/
function toggleDarkLightMode(){
	let element = document.body;
	element.classList.toggle('dark');

	// Cookie set
	if (element.classList.contains('dark')) {
        element.classList.remove('light');
		//setCookieSubKey(ST_UniqueID + "User", "DarkMode", true);
	} else {
        element.classList.add('light');
		//setCookieSubKey(ST_UniqueID + "User", "DarkMode", false);
	}
}
