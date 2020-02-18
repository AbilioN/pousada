<style>
  *{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
  }
  .index-main{
    border: 2px solid red;
    height: auto;
    top: 100px;
    padding: 100px;

  }
  .carousel-container{
    width: 60%;
    margin: auto;
    /* overflow: hidden; */
    border: 5px solid black;
  }
  .carousel-slide{
    display: flex;
    width: 100%;
    height:  500px;
  }
</style>
<script>
  // console.log('gisele');
  
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


@extends('layout.app')
@section('body')
   
<body class="index-body">
  <div class="index-main">
    <div class="carousel-container">
          <div class="carousel-slide">
            <img src="{{asset('img/pedalada4.jpg')}}" id="lastClone" alt="">
            <img src="{{asset('img/pousadamain.jpg')}}" alt="">
            <img src="{{asset('img/pousadamain2.jpg')}}" alt="">
            <img src="{{asset('img/pedalada3.jpg')}}" alt="">
            <img src="{{asset('img/pedalada4.jpg')}}" alt="">
            <img src="{{asset('img/pousadamain.jpg')}}" id="firstClone" alt="">
          </div>
    </div>
    <button id="prev">Prev</button>
    <button id="next">Next</button>
    <h1>uauhsausa</h1>


  </div>
</body>

@endsection

<script>

  $(function(){
    console.log('fabiorabin');
    const carouselSlide = document.querySelector('.carousel-slide');
    const carouselImages = document.querySelectorAll('.carousel-slide img');

    const prevBtn  = document.getElementById('prev');
    const nextBtn  = document.getElementById('next');

    let counter = 1;
    console.log(carouselImages);
    const size = carouselImages[0].clientWidth;

    console.log(size);

    nextBtn.addEventListener('click', ()=>{
        console.log('click Next');
        carouselSlide.style.transition = "transform 0.4 ease-in-out"; 
        // console.log(counter);
        counter++;  
        carouselSlide.style.transform = 'translateX('+(-size * counter)+'px)';

        console.log(counter);

    });
    prevBtn.addEventListener('click' , ()=>{
      console.log('click prev');
      carouselSlide.style.transition = "transform 0.4 ease-in-out"; 
      counter--;
      console.log(counter);

      
    });


  });

  

  // console.log(counter);
</script>