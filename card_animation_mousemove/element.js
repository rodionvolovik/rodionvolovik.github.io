$(document).ready(function() {
	element = $(".element-item");
	width = element.width();
	height = element.height();
	offset = element.offset();
	x_offset = offset.left;
	y_offset = offset.top;
	element.mousemove(function (e) {
		var x = e.clientX;
		var y = e.clientY;
		posX = x - x_offset;
		posY = y - y_offset;
		angleX = posX / width * 20 - 10;
		angleY = posY / height * 20 - 10;
		angleY *= -1;
		element.css('transform', 'perspective(1500px) rotateX('+angleX+'deg) rotateY('+angleY+'deg) scale3d(1,1,1)');
	});
	element.mouseleave(function (e) {
		element.css('transform', 'perspective(1500px) rotateX(0deg) rotateY(0deg)');
	});
});
