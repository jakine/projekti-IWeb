const slideDiv = document.querySelector('.slide-div');
const sliderImages = document.querySelectorAll('.slide-div img');

//buttons
const prevBtn = document.querySelector('#prev-btn');
const nextBtn = document.querySelector('#next-btn');

//counter
let counter = 1;
const size = sliderImages[0].clientWidth;

slideDiv.style.transform = 'translateX(' +(-size * counter) +'px)';

setInterval(()=>{
    if(counter >= 5) return;
    slideDiv.style.transition = 'transform 0.75s ease-in-out';
    counter++;
    slideDiv.style.transform = 'translateX(' +(-size * counter) +'px)';
}, 3000)

//btn listeners
nextBtn.addEventListener('click', ()=>{
    if(counter >= 5) return;
    slideDiv.style.transition = 'transform 0.4s ease-in-out';
    counter++;
    slideDiv.style.transform = 'translateX(' +(-size * counter) +'px)';
});


prevBtn.addEventListener('click', ()=>{
    if(counter <= 0) return;
    slideDiv.style.transition = 'transform 0.4s ease-in-out';
    counter--;
    slideDiv.style.transform = 'translateX(' +(-size * counter) +'px)';
});


slideDiv.addEventListener('transitionend', ()=>{
    if(sliderImages[counter].id === 'lastClone'){
        slideDiv.style.transition = "none";
        counter = sliderImages.length - 2; 
        slideDiv.style.transform = 'translateX(' +(-size * counter) +'px)';
    }
})

slideDiv.addEventListener('transitionend', ()=>{
    if(sliderImages[counter].id === 'firstClone'){
        slideDiv.style.transition = "none";
        counter = sliderImages.length - counter; 
        slideDiv.style.transform = 'translateX(' +(-size * counter) +'px)';
    }
})