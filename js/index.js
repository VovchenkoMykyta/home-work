let pageCards = document.querySelectorAll('#welcome .category .category-content .case');
$(pageCards).on('mouseenter', function (ev) {
	showPageCardDescription(this, true);
});
$(pageCards).on('mouseleave', function (ev) {
	showPageCardDescription(this, false);
});

let copy = document.querySelectorAll('#page #pageContent .code .copy');
$(copy).click(function (e) {
	copyToClipboard(this);
});