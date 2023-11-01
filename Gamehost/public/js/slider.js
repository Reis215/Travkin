const sliderline = document.getElementById('slider_line');
let slideroffset = 0;

document.getElementById('back').onclick = function (){

    slideroffset += 300;
    if(slideroffset >0){
        slideroffset = -1200
    }
    console.log(slideroffset);
    sliderline.style.left = slideroffset+'px';
}
document.getElementById('next').onclick = function (){

    slideroffset -= 300;
    if(slideroffset < -1200){
        slideroffset = 0
    }
    console.log(slideroffset);
    sliderline.style.left = slideroffset+'px';
}
