/*-----------------------------------------------------------------------------------*/
/*  Variables
/*-----------------------------------------------------------------------------------*/
document.readyState !== 'loading' ? internal() : document.addEventListener('DOMContentLoaded', () => internal());
let current_page = '';
let postsDiv = '';

function internal() {
	console.log('intern 1');

	//CHECK IF WE ARE IN services

	if (document.querySelector('#add_property')) {
		console.log('add_property 1');
		//Get menu
		const button = document.getElementById('fetchButton');
		const result = document.getElementById('result');

		button.addEventListener('click', () => startFetchbyDate(button));
	}
}

// function startFetchbyDate(button) {
// 	console.log('check the last date I got');
// 	//disable button for 30secs
// 	button.disabled = true;
// 	setTimeout(() => ((button.disabled = false), console.log('done')), 30000);
// }

function startFetchbyDate(button) {
	button.disabled = true; // Disable the button while fetching

	fetch(ajaxurl + '?action=my_custom_fetch')
		.then(response => response.json())
		.then(data => {
			if (data.success) {
				result.innerHTML = `<pre>${data.data}</pre>`;
			} else {
				result.innerHTML = 'An error occurred: ' + data.data;
			}
			button.disabled = false; // Re-enable the button after fetching
		})
		.catch(error => {
			console.error('Error:', error);
			result.innerHTML = 'An error occurred while fetching data.';
			button.disabled = false; // Re-enable the button in case of error
		});
}
