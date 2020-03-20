<style>
  *{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
  }
  .galleryContainer {
    width: 100%;
    height: 500px;
    max-width: 1000px;
    user-select: none;
    box-shadow: 0px 0px 5px 1px #000078;
    padding: 10px;
    box-sizing: border-box;
    margin: 0 auto;
}
.galleryContainer .slideShowContainer{
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: gainsboro;
    position: relative;

}

.galleryContainer .slideShowContainer .imageHolder {
    width: 100%;
    height: 100%;
    position: absolute;
    opacity: 0;

}

.galleryContainer .slideShowContainer .imageHolder img{
    width: 100%;
    height: 100%;    
}

.galleryContainer .slideShowContainer .imageHolder p{
    display: none;
    
}

.galleryContainer .slideShowContainer .leftArrow,.galleryContainer .slideShowContainer .rightArrow{
    width: 8%;
    background-color: #00000036;
    position: absolute;
    left: 0;
    z-index: 1;
    transition: background 0.5;
    height: 72px;
    top: 50%;
    transform: translateY(-50%);
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

.galleryContainer .slideShowContainer .rightArrow{
    left: auto;
    right: 0;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}

.galleryContainer .slideShowContainer .leftArrow:hover ,.galleryContainer .slideShowContainer .rightArrow:hover{
    background: #000000a8;
    cursor: pointer;
    
}

.galleryContainer .slideShowContainer .arrow {
    display: inline-block;
    border: 3px solid white;
    height: 10px;
    width: 10px;
    border-left: none;
    border-bottom: none;
    margin: auto;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}

.galleryContainer .slideShowContainer .arrowLeft {
    transform: rotateZ(-135deg);
}
.galleryContainer .slideShowContainer .arrowRight {
    transform: rotateZ(45deg);
}

.galleryContainer .slideShowContainer .captionHolder {
    position: absolute;
    bottom: 0;
    z-index: 1;
    color: white;
    font-family: sans-serif;
    text-align: center;
    height: 80px;
    width: 100%;
    background: #00000047;
    line-height: 80px;
    overflow: hidden;
}
.galleryContainer .slideShowContainer .captionHolder .captionText {
    margin: 0;

}

.galleryContainer .slideShowContainer #playPauseBtn{
    width: 32px;
    height: 32px;
    position: absolute;
    z-index: 5;
    margin: 5px;
    cursor: pointer;
    background-image: url(images/playPause.png);
    background-repeat: no-repeat;
    background-size: cover;
}

.galleryContainer #dotsContainer {
    width: 100%;
    height: 10%;
    text-align: center;
    padding-top: 20px;
    box-sizing: border-box;
}
.galleryContainer #dotsContainer .dots {
    display: inline-block;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    margin-left: 10px;
    background-color: #bbb;
    cursor: pointer;
    transition: background-color 0.5s;

}

.galleryContainer #dotsContainer .dots:hover , .galleryContainer #dotsContainer .dots.active{
    background-color: #717171;
}

.galleryContainer #dotsContainer .dots:first-child{
    margin-left: 0;
}

.galleryContainer .moveLeftCurrentSlide{
    animation-name: moveLeftCurrent;
    animation-duration: 0.5s;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
}

.galleryContainer .moveLeftNextSlide{
    animation-name: moveLeftNext;
    animation-duration: 0.5s;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
}
@keyframes moveLeftCurrent{
    from {
        margin-left: 0;
        opacity: 1;

    }to{
        margin-left: -100%;
        opacity: 1;
    }
}
@keyframes moveLeftNext{
    from {
        margin-left: 100%;
        opacity: 1;

    }to{
        margin-left: 0;
        opacity: 1;
    }
}
     

.galleryContainer .moveRightCurrentSlide{
    animation-name: moveRightCurrent;
    animation-duration: 0.5s;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
}

@keyframes moveRightCurrent{
    from {
        margin-left: 0;
        opacity: 1;

    }to{
        margin-left: 100%;
        opacity: 1;
    }
}

.galleryContainer .moveRightNextSlide{
    animation-name: moveRightNext;
    animation-duration: 0.5s;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
}

@keyframes moveRightNext{
    from {
        margin-left: -100%;
        opacity: 1;

    }to{
        margin-left: 0;
        opacity: 1;
    }
}

.slideTextFromBottom {
    animation-name: slideTextFromBottom;
    animation-duration: 1.2s;
    animation-timing-function: ease-in-out;

}

@keyframes slideTextFromBottom {
    from{
        opacity: 0;
        margin-top: 100px;
    }
    to{
        opacity: 1;
        margin-top: 0;
    }
}
.slideTextFromTop {
    animation-name: slideTextFromTop;
    animation-duration: 1.2s;
    animation-timing-function: ease-in-out;

}

@keyframes slideTextFromTop{
    from{
        opacity: 0;
        margin-top: -100px;
    }
    to{
        opacity: 1;
        margin-top: 0;
    }
}


</style>
<script>
  // console.log('gisele');
  
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


@extends('layout.app')
@section('body')
   
<body class="index-body">

<div class="galleryContainer">
        <div class="slideShowContainer"> 
            <div id="playPauseBtn"></div>
            <div class="leftArrow" onclick="plusSlide(-1)"><span class="arrow arrowLeft"></span></div>
            <div class="rightArrow" onclick="plusSlide(1)"><span class="arrow arrowRight"></span></div>
            <div class="captionHolder"  ><p class="captionText" >CaptionText</p></div>
            <div  class="imageHolder">
                <img src="{{asset('img/pedalada4.jpg')}}" alt="">
                <p class="captionText">Caption Text0411</p>
            </div>
            <div id="imageHolder"  class="imageHolder">
                <img src="{{asset('img/pousadamain.jpg')}}" alt="">
                <p class="captionText">Caption Text02</p>
            </div>
            <div id="imageHolder"  class="imageHolder">
                <img src="{{asset('img/pousadamain2.jpg')}}" alt="">
                <p class="captionText">Caption Text03</p>
            </div>
            <div id="imageHolder"  class="imageHolder">
                <img src="{{asset('img/pedalada4.jpg')}}" alt="">
                <p class="captionText">Caption Text04</p>
            </div>
        </div>
        <div id="dotsContainer"></div>

    </div>
</body>


<script>
var slideIndex, slides, dots, captionText, slide2;

function initGallery(){ 
    slideIndex = 0;
    slides = document.getElementsByClassName("imageHolder");
    slides[slideIndex].style.opacity = 1;
    captionText = document.querySelector(".captionText");
    captionText.innerText = slides[slideIndex].querySelector(".captionText").innerText; 
    console.log(captionText);
    dots = [];
    var dotsContainer = document.getElementById("dotsContainer");

    for(var i = 0; i < slides.length ; i++){
        var dot = document.createElement('span');
        dot.classList.add('dots');
        dot.setAttribute('onClick' , "moveSlide("+i+")" );
        dotsContainer.append(dot);
        dots.push(dot);
    }

    dots[slideIndex].classList.add('active');

}

initGallery();

function plusSlide(n){
    moveSlide(slideIndex + n);   
}

function moveSlide(n){
    var i, current , next;
    var moveSlideAnimClass = {
        forCurrent : "",
        forNext : "",
    }
    var slideTextAnimClass;
    if(n>slideIndex){

        if(n >= slides.length){
            n = 0;
        }
        moveSlideAnimClass.forCurrent = "moveLeftCurrentSlide";
        moveSlideAnimClass.forNext = "moveLeftNextSlide";
        slideTextAnimClass = "slideTextFromTop";
    }else if(n <slideIndex){
        if(n < 0){
            n = slides.length - 1; 
        }
        moveSlideAnimClass.forCurrent = "moveRightCurrentSlide";
        moveSlideAnimClass.forNext = "moveRightNextSlide";
        slideTextAnimClass = "slideTextFromBottom";
    }

    if (n!=slideIndex){
        next = slides[n];
        current = slides[slideIndex];
        for(i = 0 ; i <slides.length; i++){
            slides[i].className = "imageHolder";
            slides[i].style.opacity = 0;
            dots[i].classList.remove("active");
        }
        // console.log(moveSlideAnimClass.forCurrent);
        current.classList.add(moveSlideAnimClass.forCurrent);
        next.classList.add(moveSlideAnimClass.forNext);
        dots[n].classList.add("active");
        slideIndex = n;
    }
    captionText.style.display = "none";
    captionText.className = "captionText " + slideTextAnimClass;
    captionText.innerText = slides[n].querySelector(".captionText").innerText;
    captionText.style.display = "block";
}

</script>

@endsection
