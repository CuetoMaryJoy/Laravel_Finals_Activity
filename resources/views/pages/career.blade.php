@extends('layouts.default')

@section('content')
<style>
.career .goals{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-bottom: 2rem;
}

.career .goals .image{
    flex:1 1 25rem;
    }

.career .goals .image img{
    height: 80%;
    width:100%;
    object-fit: cover;
    border:1rem solid #ffffff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

.career .goals .content4{
    flex:1 1 50rem;
    }

.career .goals .content4 h3{
    color:#333333;
    font-size: 3.5rem;
    font-family: 'Fjalla One', sans-serif;
}

.career .goals .content4 p{
    color: #666666;
    font-size: 2.2rem;
    font-family: 'Montserrat', sans-serif;
    text-align: justify;
    padding:.5rem 0;
}

footer{
    background: #990033;
    color: #C39BD3;
    text-align: center;
    font-size: 12px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    padding:1em;
}

.footer span{
    color:var(--main-color);    
}
</style>

<body>
<!-- CAREER -->

<section class="career" id="career"> <br><br><br></br>

        <h1 class="heading"> career &  <span> future </span> </h1> <br></br>

    <div class="goals">

    <div class="image">
        <img src="images/img5.jpeg" alt="">
    </div>

    <div class="content4">
        <h3>"Always look on the bright side of life and believe in yourself that you can do it"</h3>
        <p>6 years from now I will financially support my family as I become a PROGRAMMER/WEB DESIGNER by taking extra job training courses in programming and doing my best as much as I can also working at large or high company right after graduating my degree in BACHELOR OF SCIENCE IN COMPUTER SCIENCE.   </p>
    </div>

</section>
</body>
@stop
