<style>
    
    
    
    .navbar-brand{
        pointer-events:none;
        font-family: cabin, sans-serif,;
        font-weight: 700;
        font-size: 40px;
    }
    .btnsliderwhite{
        color: white;
        
    }
    
    
    
    
    
    
</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top mt-4">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{route('home')}}">SmartWash</a>
        <button class="navbar-toggler btnsliderwhite" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            {{--* Logo dropdown --}}
            <i class="fa-solid fa-sliders"></i>
        </button>
        
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item text-white"><a class="nav-link text-white" href="#">Richiedi un Preventivo             </a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Su di noi                        </a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Vieni a trovarci                        </a></li>
            </ul>
            
        </div>
    </div>
    
    
    
</nav>


{{-- <style> 
    {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    
    } 
    
    li, a, button{
    font-family: 'cabin', sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: #edf0f1;
    text-decoration: none;
    
    }
    
    header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 10%;
    }
</style>

<body>
    
    <header>
        <img class="logo" src="" alt="">
        <nav>
            <ul class="nav__links">
                <li><a href="#">Servizi</a></li>
                <li><a href="#">Su di noi</a></li>
                <li><a href="#">Vieni a trovarci</a></li>
            </ul>
        </nav>
        <div class="cta" href="#"><button>Contact</button>
        </header>
    </body>
    
    --}}