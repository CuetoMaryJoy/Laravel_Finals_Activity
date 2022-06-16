@extends('layouts.default')

@section('content')
  <style>
.contact .reach .content5{
    flex:1 1 30rem;
    padding:4rem;
    padding-bottom: 0rem;
    
}

.contact .reach .content5 .title{
    text-transform: uppercase;
    color:#333333;
    font-size: 3.5rem;
    font-family: 'Fjalla One', sans-serif;
    padding-bottom: 2rem;
}

.contactme{
    color:#000000;
    font-family: 'Montserrat', sans-serif;
    font-size: 18px;
    letter-spacing: 1px;
    font-weight: bold;
    text-align: left;

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
<!-- CONTACT  -->

<section class="contact" id="contact"> <br><br><br><br></br>

        <h1 class="heading"> contact <span> me </span> </h1><br></br>

    <div class="reach">
    
    <div class="content5">
        <h3 class="title">contact info</h3>
        <h4 class = "contactme"> 
             Email Address: cueto_maryjoy@plpasig.edu.ph <br><br>
             Mobile/Telephone#: +639826352421 - 02-3632424234<br><br>
             Facebook/Messenger: Maryjoy Cueto<br><br>
             Location: Sta. Lucia, Pasig City
            </br>
        </h4>
    </div>
</div>

</section>
</body>
@stop
