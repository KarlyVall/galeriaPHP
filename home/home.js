const slideshow = document.getElementById('slideshow');
const slides = slideshow.getElementsByClassName('noneslides');
// console.log(slides);
// console.log(slides.length);
slides[0].classList.add('slidesin');
// console.log(slides);

let slideInterval = setInterval(slideIntervalStart,3000);

function slideIntervalStart(){
    for (let i = 0; i < slides.length; i++) {
        if (slides[i].classList.contains('slidesin')){
            slides[i].classList.remove('slidesin');
            slides[i].classList.add('slidesout');
            setTimeout(()=>{
                slides[i].classList.remove('slidesout');
                if (i!=(slides.length-1)) slides[i+1].classList.add('slidesin');
                else slides[0].classList.add('slidesin')}
                ,900)
            break;
        }   
    }
    }

// window.addEventListener('focus', () => {slideIntervalStart();slideInterval = setInterval(slideIntervalStart,3000)})
// window.addEventListener('blur',() => {clearInterval(slideInterval)}) 