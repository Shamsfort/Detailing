{{-- <x-layout> --}}
    <!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('build/assets/home.css')}}">
    <title>@yield('title')</title>
    {{-- link al css home.css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-color: #131112">
    

    
    <div id="loader">
        <div class="spinner">
            <div></div>   
            <div></div>    
            <div></div>    
            <div></div>    
            <div></div>    
            <div></div>    
            <div></div>    
            <div></div>    
            <div></div>    
            <div></div>    
        </div>
    </div>    

    <x-navbar></x-navbar>

        <div id="main-content">
            
            <div class="hero">
                <div class="container">
                    @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                </div>
                @endif
                <p>Precisione e Professionalità!</p>
                <h1>SMARTWASH DETAILING</h1>
            </div>
        </div>
        
        
        {{--!Cards  --}}
        <div class="fade-margin"></div>
        <div class="card-container tw-font-bold ">
            
            <div class="card" style="background-image: url({{asset('images/SMW.webp')}});">
                <div class="card-text">
                    <h1>Cura nanotech</h1>
                    <p>Testo della card 1.</p>
                </div>
            </div>
            <div class="card" style="background-image: url({{asset('images/LAMBODETAILING.jpg')}});">
                <div class="card-text ">
                    <h1 class="">Titolo 2</h1>
                    <p>Testo della card 2.</p>
                </div>
            </div>
            <div class="card" style="background-image: url({{asset('images/MUSTDETAILING.jpg')}})">
                <div class="card-text">
                    <h1>Titolo 3</h1>
                    <p>Testo della card 3.</p>
                </div>
            </div>
            <div class="card"  style="background-image: url({{asset('images/chris-liverani-HUJDz6CJEaM-unsplash.jpg')}});">
                <div class="card-text">
                    <h1>Titolo 4</h1>
                    <p>Testo della card 4.</p>
                </div>
            </div>
        </div>



        
        {{-- !Fine cards --}}
        
        {{--! SERVIZI --}}
        <div class="detailing-section">
            <div class="text-content">
                <h5>Di cosa ci occupiamo</h5>
                <h1>Servizio Full-Detailing</h1>
                <p>Benvenuti a <span>SmartWash!</span></p>
                <p>Professionisti nella cura delle auto nei loro minimi dettagli.</p>
                
                
                <div class="contact-info">
                    <style>
                        
                        .button {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            width: 60px;
                            height: 60px;
                            border-radius: 100%;
                            border: none;
                            background-color: #30C04F;
                        }
                        
                        .button:hover {
                            background-color: #2bac47;
                        }
                        </style>
                    <button class="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" viewBox="0 0 32 32" height="32" fill="none" class="svg-icon"><path stroke-width="2" stroke-linecap="round" stroke="#fff" fill-rule="evenodd" d="m24.8868 19.1288c-1.0274-.1308-2.036-.3815-3.0052-.7467-.7878-.29-1.6724-.1034-2.276.48-.797.8075-2.0493.9936-2.9664.3258-1.4484-1.055-2.7233-2.3295-3.7783-3.7776-.6681-.9168-.4819-2.1691.3255-2.9659.5728-.6019.7584-1.4748.4802-2.2577-.3987-.98875-.6792-2.02109-.8358-3.07557-.2043-1.03534-1.1138-1.7807-2.1694-1.77778h-3.18289c-.60654-.00074-1.18614.25037-1.60035.69334-.40152.44503-.59539 1.03943-.53345 1.63555.344 3.31056 1.47164 6.49166 3.28961 9.27986 1.64878 2.5904 3.84608 4.7872 6.43688 6.4356 2.7927 1.797 5.9636 2.9227 9.2644 3.289h.1778c.5409.0036 1.0626-.2 1.4581-.569.444-.406.6957-.9806.6935-1.5822v-3.1821c.0429-1.0763-.7171-2.0185-1.7782-2.2046z" clip-rule="evenodd"></path></svg>
                    </button>
                    <i class="conntainer-fluid d-flex row">  +39 999999999</i>
                </div>
                
                
            </div>
            <div class="images-content">
                <img src="{{asset('images/tes.jpg')}}" class="image-top" alt="Top Image">
                <img src="{{asset('images/testar.jpg')}}" class="image-bottom" alt="Bottom Image">
            </div>
        </div>
        {{-- !Fine SERVIZI --}}
        <style>
            {{--?STYLE CARDS SERVIZI  --}}
            .card-containers {
                margin-top: 90px;
                display: flex;
                flex-direction: row;
                justify-content: center;
                flex-wrap: wrap;
                gap: 50px;
                padding: 90px;
            }
            
            .flip-card {
                background-color: transparent;
                width: 250px; /* Increased width */
                height: 300px; /* Increased height for proportional adjustment */
                perspective: 1000px;
                font-family: 'Cabin';
            }
            
            .title {
                font-size: 1.5em;
                font-weight: 900;
                text-align: center;
                margin: 0;
            }
            
            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.8s;
                transform-style: preserve-3d;
            }
            
            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }
            
            .flip-card-front, .flip-card-back {
                box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
                position: absolute;
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border: 1px solid rgb(255, 0, 0);
                border-radius: 1rem;
            }
            
            .flip-card-front {
                background: linear-gradient(120deg, #131112 60%, rgba(168, 168, 168, 0.425) 88%, rgb(255, 255, 255) 40%, rgb(255, 255, 255) 48%);
                color: rgb(255, 255, 255);
            }
            
            .flip-card-back {
                background: linear-gradient(120deg, #131112 30%, rgba(168, 168, 168, 0.425) 88%, rgb(255, 255, 255) 40%, rgb(255, 255, 255) 78%);
                color: rgb(255, 255, 255);
                font-weight: 700;
                transform: rotateY(180deg);
            }
            
            
            .flip-card-back p:hover{
                color:rgb(221, 221, 221);
                transition: 0.5s;
            }
        </style>
        <div class="container">
            <div class="row text-center tw-font-bold">
                <h3 style="color: red;" class="col-12 tw-text-8xl tw-text-mono">Servizi</h3>
                <p class="tw-text-red-600 tw-text-4xl">scopri le carte</p>
            </div>
        </div>
        {{--!Sezione CARDS SERVIZI  --}}

        <div class="card-containers ">
            <div class="flip-card">
                <div class="flip-card-inner">
                    
                    <div class="flip-card-front">
                        
                        <p class="title">Nanotecnologie</p>
                        <p></p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Trattamento protettivo nanotecnologico</p>
                        {{-- <p></p> --}}
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Lucidatura</p>
                        {{-- <p>Hover Me</p> --}}
                    </div>
                    <div class="flip-card-back">
                        
                        <p class="title">
                            Trattamento lucidatura professionale</p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Cielo</p>
                        {{-- <p>Hover Me</p> --}}
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Trattamento Professionale Cielo</p>
                        {{-- <p></p> --}}
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Sanificazione abitacolo</p>
                        {{-- <p>Hover Me</p> --}}
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Trattamento di sanificazione abitacolo automobile</p>
                        {{-- <p></p> --}}
                    </div>
                </div>
            </div>
        </div>
        {{--!Sezione CARDS SERVIZI  --}}
        {{--!Sezione Preventivo  --}}
        <div class="fade-margin"></div>
        {{-- Testo per la sezione preventivo --}}
        
        
        
    
    </div>
</body>
{{-- </x-layout> --}}
