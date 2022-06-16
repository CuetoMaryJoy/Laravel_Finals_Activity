<div class="navbar">
    <div class="navbar-inner">

        <a id="logo" href="/">MARY JOY CUETO</a>

        <ul class="nav" style="list-style: none;">

            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/cs202">CS202</a></li>
            <li><a href="/laravel">Laravel</a></li>
            <li><a href="/career">Career</a></li>
            <li><a href="/contact">Contact</a></li>
            
        </ul>
    </div>
</div>

<style>
:root{
    --main-color:#990033;
}

*{
    
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    transition: all .2s linear;
    line-height: 1.5;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
}

body{
    background: #ffe6f2;
    padding-left: 30rem;
}

section{
    padding:1rem 5%;
    min-height: 100vh;
}

.heading{
    font-size: 7rem;
    font-family: 'Passion One', cursive;
    padding-bottom: 1rem;
    color:#000000;
    text-transform: uppercase;
}

.heading span{
    color:var(--main-color);
    text-transform: uppercase;
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    padding:.8rem 3rem;
    background:var(--main-color);
    color:#fff;
    cursor: pointer;
    font-size: 1.7rem;
    font-family: 'Francois One', sans-serif;
}

.btn:hover{
    background:#4d0026;
    letter-spacing: .2rem;
}

header{
    position: fixed;
    top:0; left:0; bottom:0;
    background: #990033;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    flex-flow: column;
    padding:8rem 2rem;
    width:30rem;
    text-align: center;
}

header .navbar a{
    display: block;
    font-size: 3rem;
    font-family: 'Francois One', sans-serif;
    color:#ffffff;
    margin:2rem 0;
}

header .navbar a:hover{
    letter-spacing: .2rem;
    color:#000000;
    font-family: 'Francois One', sans-serif;

}
</style>
