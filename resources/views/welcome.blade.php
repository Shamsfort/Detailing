
<x-layout>
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
    
    <div id="main-content">
        
        <div class="hero">
            <div class="container">
                <p>Precisione e Professionalità!</p>
                <h1>SMARTWASH DETAILING</h1>
            </div>
        </div>
        
        
        {{--!Cards  --}}
        <div class="fade-margin"></div>
        <div class="card-container">
            
            <div class="card" style="background-image: url({{asset('images/SMW.webp')}});">
                <div class="card-text">
                    <h1>Titolo 1</h1>
                    <p>Testo della card 1.</p>
                </div>
            </div>
            <div class="card" style="background-image: url({{asset('images/LAMBODETAILING.jpg')}});">
                <div class="card-text">
                    <h1>Titolo 2</h1>
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
                    <i>  +39 999 999 999</i>
                </div>
                
                
            </div>
            <div class="images-content">
                <img src="{{asset('images/tes.jpg')}}" class="image-top" alt="Top Image">
                <img src="{{asset('images/testar.jpg')}}" class="image-bottom" alt="Bottom Image">
            </div>
        </div>
        {{-- !Fine SERVIZI --}}
        
        
        
    </div>
</x-layout>
