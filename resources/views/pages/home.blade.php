@extends ('layouts.default')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel_Finals_Activity</title>

    <!-- CUSTOM CSS FILE LINK -->
    <link rel="stylesheet" href="css/style.css">

<style>
.home{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:1.5rem;
}

.home .image{
    flex:1 1 40rem;
}

.home .image img{
    width:80%;
}

.home .content{
    flex:1 1 40rem;
}

.home .content .hi{
    font-size: 4rem;
    font-family: 'Radio Canada', sans-serif;
    color:var(--main-color);
}

.home .content h3{
    font-size: 6.5rem;
    font-family: 'Anton', sans-serif;
    color:#111111;
    text-transform: uppercase;
}

.home .content h3 span{
    color:var(--main-color);
    text-transform: uppercase;
}

.home .content .job{
    font-size: 3rem;
    font-family: 'Radio Canada', sans-serif;
    color:#000000;
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
</head>

<body>
<!-- HOME  -->

<section class="home" id="home">

    <div class="content">
        <span class="hi"> Hi there... </span>
        <h3> I am <span> Mary Joy </span> </h3>
        <p class="job"> I am a Student </p>
        <a href="/about" class="btn">About Me</a>
    </div>

    <div class="image">
        <img src="images/img4.jpg" alt="">
    </div>

</section>
</body>
</html>

@stop
