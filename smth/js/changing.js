var words = ['приложения', 'какой-то хуйни', 'вебсайта'];
function animateDisappear() {
    var block = $(".changing");
    width = block.width();
    block.animate({'opacity': '0'}, '109000', 'linear', function() {
        nextDissappear();
    }).delay("600");
}

function nextDissappear() {
        var block = $(".changing");
        nextWord = words.shift();
        words.push(nextWord);
        console.log("");
        block.text(nextWord);
        width = parseInt(block.width());
        $(".changing-ease").animate({'left': width + 5 + "px"}, '100', 'linear').delay("200");
        block.animate({'opacity': '1'}, '109000', 'linear', function() {
            animateDisappear();
        }).delay("3000");
    }

$(
    function () {
        animateDisappear();
    }
);