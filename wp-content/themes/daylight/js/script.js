function filterArticles() {
	var query;
	var input = document.getElementById('filter');
	var filter = input.value.toUpperCase();
	var section = document.querySelector('.list');
	var posts = section.getElementsByClassName('post');
	var count = 0;

	for (i = 0; i < posts.length; i++) {
		query = posts[i].getElementsByClassName('post-title')[0];
		if (query.innerHTML.toUpperCase().indexOf(filter) > -1) {
			posts[i].style.display = '';
		} else {
			posts[i].style.display = 'none';
		}
	}

	for (i = 0; i < posts.length; i++) {
		if (posts[i].style.display === 'none') {
			count++;
		} else {
			count = 0;
		}
	}

	if (count === posts.length) {
		document.getElementById('none-found').style.display = 'block'
		var h3 = document.querySelectorAll('.list h3');
		for (var i = 0; i < h3.length; i++) {
			h3[i].style.display = 'none'
		}
	} else {
		document.getElementById('none-found').style.display = 'none'
		var h3 = document.querySelectorAll('.list h3');
		for (var i = 0; i < h3.length; i++) {
			h3[i].style.display = 'block'
		}
	}
}

if (document.getElementById('filter')) {
	document.getElementById('filter').addEventListener('keyup', filterArticles)
}