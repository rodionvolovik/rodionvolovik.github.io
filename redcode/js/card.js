// $(document).ready(function() {
//     $(".element-item").mousemove(function (e) {
//         width = $(this).width();
//         height = $(this).height();
//         x_offset = e.offset().left;
//         y_offset = e.offset().top;
//         x = e.clientX;
//         y = e.clientY;
//         posX = x - x_offset;
//         posY = y - y_offset;
//         console.log(x_offset);
//         console.log(y_offset);
//         angleX = posX / width * 20 - 10;
//         angleY = posY / height * 20 - 10;
// 		angleY *= -1;
// 		$(this).css('transform', 'perspective(1500px) rotateX('+angleX+'deg) rotateY('+angleY+'deg) scale3d(1,1,1)');
// 	});
// 	$(".element-item").mouseleave(function (e) {
// 		$(this).css('transform', 'perspective(1500px) rotateX(0deg) rotateY(0deg)');
// 	});
// });

elements = document.querySelectorAll('.works__item-preview__transform');

elements.forEach(function(e) {
    e.addEventListener('mousemove', moveElement);
});


function moveElement(e) {
    e.preventDefault();
    console.log(e);
    offsetX = e.offsetX;
    offsetY = e.offsetY;
    height = this.offsetWidth;
    width = this.offsetHeight;
    angleX = offsetX / width * 20 - 10;
    angleY = offsetY / width * 20 - 10;
    this.style.transform = 'perspective(1500px) rotateX('+angleX+'deg) rotateY('+angleY+'deg) scale3d(1,1,1)';
}

elements = document.querySelectorAll('.works__item-preview__transform');

elements.forEach(function(e) {
    e.addEventListener('mouseleave', moveOut);
});

function moveOut(e) {
    this.style.transform = 'perspective(1500px) rotateX(0deg) rotateY(0deg)';
}