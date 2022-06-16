@extends('layouts.default')

@section('content')
<style>
 .cs202 .favorite{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-bottom: 2rem;
}

.cs202 .favorite .image{
    flex:1 1 25rem;
}

.cs202 .favorite .image img{
    height: 100%;
    width:100%;
    object-fit: cover;
    border:1rem solid #ffffff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

.cs202 .favorite .content2{
    flex:1 1 50rem;
    }

.cs202 .favorite .content2 h3{
    color:#333333;
    font-size: 4rem;
    font-family: 'Fjalla One', sans-serif;
}

.cs202 .favorite .content2 p{
    color: #666666;
    font-size: 1.5rem;
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
<!-- CS202 -->

<section class="cs202" id="cs202"> <br><br></br>

        <h1 class="heading"> my <span> favorite </span> </h1><br></br>

    <div class="favorite">

    <div class="image">
        <img src="images/img2.png" alt="">
    </div>

    <div class="content2">
        <h3>Git and GitHub</h3>
        <p>Git and Github are one of my favorite topic or lecture in CS 202, Git is defined as a version control system that you download onto your computer. It is essential that you use Git if you want to collaborate with other developers on a coding project or work on your own project. While Github  is a web-based interface that uses Git, the open source version control software that lets multiple people make separate changes to web pages at the same time. The both two terms are not really familliar to me in the first place but I realize that is very useful in terms of collaborating and encouraging the teams to work together to build and edit the site content.  The two platforms help me and my other classmates in making their own repository for our final activity and project and are extremely important tools for developing a codes easily and efficiently. Git and Github is relavant in the IT industry that would help them in working as team and develope an innovative project that will help the needs of individual or users. </p>
    </div>

</section>
</body>
@stop
