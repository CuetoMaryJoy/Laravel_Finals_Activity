@extends('layouts.default')

@section('content')
<style>
 .about .info{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-bottom: 2rem;
}

.about .info .image{
    flex:1 1 25rem;
}

.about .info .image img{
    height: 100%;
    width:100%;
    object-fit: cover;
    border:1rem solid #ffffff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

.about .info .content1{
    flex:1 1 50rem;
}

.about .info .content1 h3{
    color:#333333;
    font-size: 3.5rem;
    font-family: 'Fjalla One', sans-serif;
    }

.about .info .content1 p{
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
<!-- ABOUT  -->

<section class="about" id="about"> <br><br><br></br>

        <h1 class="heading"> about <span> me </span> </h1> <br></br>

    <div class="info">

    <div class="image">
        <img src="images/img1.jpg" alt="">
    </div>

    <div class="content1">
        <h3> My name is Mary Joy Cueto & I am a third year college student </h3>
        <p>Hello! I am Mary Joy P. Cueto  you can call me JOY/MAJOY grew up as an only child. Born on June 21, 2000 and turning 22. Her parents are Mary Beth P.  Cueto and Miguelito B. Cueto. And she lived at live at 139 90RR Street Soldiers Village Sta.  Lucia Pasig City. She graduated her señior high school at Eusebio High School taking STEM(Science Technology Engineering and Mathematics) strand. And she is currently a third year college student taking Bachelor of Science in Computer Science at Pamantasan ng Lungsod ng Pasig.</p>
    </div>

</section>
</body>
@stop
