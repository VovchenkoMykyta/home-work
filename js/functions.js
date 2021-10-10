function showPageCardDescription(val, isIn) {
	if (isIn) {
		$(val)
			.children('h3')
			.fadeOut(200)
			.promise()
			.done(function () {
				$(val).children('p').fadeIn(200);
			});
	}
	else {
		$(val)
			.children('p')
			.fadeOut(200)
			.promise()
			.done(function () {
				$(val).children('h3').fadeIn(200);
			});
	}
}

function copyToClipboard(val) {
	let tag = val;
	navigator.clipboard.writeText(val.dataset.cmd)
		.then(function () {
			$(tag).next().fadeIn(200);
			setTimeout(() => {
				$(tag).next().fadeOut(200);
			}, 1000);
		});
}