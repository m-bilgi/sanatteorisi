/**
* Documents Url
* https://tr.javascript.info/cookie
*/

/**
* Set Cookie Function
* -
* ---
* @param {string} name cookie name
* @param {string} value cookie value
*/
function setCookie(name, value) {
	const DATE = new Date();
	const DAY = 1;
	DATE.setTime(DATE.getTime() + (DAY*24*60*60*1000));
	let expiresDate = 'expires=' + DATE.toUTCString();

	document.cookie = name + '=' + value + ';' + expiresDate + ';path=/;samesite=lax';
}

/**
* Get Cookie Function
* -
* ---
* @param {string} name cookie name
* @returns cookie value
*/
function getCookie(name) {
	let result = ''; 
	let myCookie = document.cookie + ';';
	let searchName = name + '=';
	let startOfCookie = myCookie.indexOf(searchName); 	
	let endOfCookie; 

	if (startOfCookie != -1) {
		startOfCookie += searchName.length; 
		endOfCookie = myCookie.indexOf(';', startOfCookie); 
		result = decodeURIComponent(myCookie.substring(startOfCookie, endOfCookie)); 
	}
	return result; 
}

/** 
* Set Multi Value Cookie Function
* -
* Person=name=dogg&age=25;
* 
* ---
* @param {string} name cookie name
* @param {string} key cookie key. Example: name=dogg
* @param {string} value cookie value
* 
*/
function setCookieSubKey(name, key, value) {
	let cookieValue = getCookie(name);
	if (cookieValue.trim() == '') {
		setCookie(name, key + '=' + value);
		return;
	}

	// check if cookie already exist
	let keyValue = getCookieSubKey(name, key);
	let newValue = cookieValue.trim();

	// cookie key never exist
	if (keyValue == '') {
		newValue += '&' + key + '=' + value;
	} else {
		// Check if at first location. no beginning with &
		if (newValue.substring(0, key.length + 1) == (key + '=')) {
			let totalKeyLength = key.length + 1 + getCookieSubKey(name, key).length + 1;
			newValue = newValue.substring(totalKeyLength);

			if (newValue.trim() == '') {
				newValue = key + '=' + value;
			} else {
				newValue += '&' + key + '=' + value;
			}
		} else {
			let fullKey = '&' + key + '=' + keyValue;

			// cookie key inside the cookie value
			if (newValue.indexOf(fullKey) != -1) {
				newValue = replaceAll(newValue, fullKey, '');
				if (newValue.trim() == '') {
					newValue = key + '=' + value;
				} else {
					newValue += '&' + key + '=' + value;
				}
			}
		}
	}
	setCookie(name, newValue);
}

/**
 * Get Cookie Sub Key Function
 * -
 * ---
 * @param {string} name cookie name
 * @param {string} key cookie key
 * 
 * @returns cookie key or blank value
 */
function getCookieSubKey(name, key) {
	let cookieValue = getCookie(name);
	if (cookieValue == '') {
		return '';
	}

	let valueSeparator = cookieValue.split('&');
	for (let i = 0; i < valueSeparator.length; i++) {
		let cookieKeyValue = valueSeparator[i].split('=');

		// it has multi valued cookie
		if (cookieKeyValue.length > 1) {
			if (cookieKeyValue[0] == key)
				return cookieKeyValue[1].toString();
		} else {
			return '';
		}
	}
	return '';
}

/**
* Delete Cookie Function
* -
* ---
* @param {string} name cookie name
*/
function deleteCookie(name) {
	setCookie(name, '', -1);
}

function replaceAll(varb, replaceThis, replaceBy) {	
	let newVarbArray = varb.split(replaceThis);
	let newVarb = newVarbArray.join(replaceBy);	
	return newVarb;
}
