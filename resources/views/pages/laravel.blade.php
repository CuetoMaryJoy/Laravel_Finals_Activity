@extends('layouts.default')

@section('content')
<style>
.laravel .intro{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-bottom: 2rem;
}

.laravel .intro .image{
    flex:1 1 25rem;
}

.laravel .intro .image img{
    height: 100%;
    width:100%;
    object-fit: cover;
    border:1rem solid #ffffff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

.laravel .intro .content3{
    flex:1 1 50rem;
}

.laravel .intro .content3 h3{
    color:#333333;
    font-size: 3.8rem;
    font-family: 'Fjalla One', sans-serif;
}

.laravel .intro .content3 p{
    color: #666666;
    font-size: 1.8rem;
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
<!-- LARAVEL  -->

<section class="laravel" id="laravel"> <br></br>

        <h1 class="heading">introduction <span> about laravel </span> </h1> <br> <br></br>
    <div class="intro">

    <div class="image">
        <img src="images/img3.webp" alt="">
    </div>

    <div class="content3">
        <h3>What is Laravel?</h3>
        <p>Laravel aims to make development easier by simplifying typical processes shown in most online applications, such as authentication, routing, sessions, and caching. Laravel strives to make the development process enjoyable for developers while maintaining software systems. Laravel is the simplest PHP framework for web development, allowing you to construct apps with clear and simple syntax.Laravel gets developers' interest since it minimizes project implementation time and enhances end-to-end efficiency. The Laravel framework is advantageous for company because of its unique characteristics.</p>
    </div>

</section>
</body>
@stop
