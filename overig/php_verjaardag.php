<?php

function createStamp() {
    stamp('\media\PinClipart.com_food-box-clip-art_1467064.png', 120).rotate(RIGHT,i*10);
}

repeat(createStamp(),18);

function loop() {
    find('\media\PinClipart.com_food-box-clip-art_1467064.png');//forEach(spin);
}
function spin() {
    ball.move(UP,20);
    ball.wrap();
}
box(0,900,768,1024,'bluegreen')
?>
<h1>I love you, Dad!</h1>