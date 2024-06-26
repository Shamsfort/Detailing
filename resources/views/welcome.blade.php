<x-layout>
    <div class="hero ">
        <div class="container">
            <p>Precisione e Professionalità!</p>
            <h1>SMARTWASH DETAILING</h1>
        </div>
    </div>
    <div class="fade-margin"></div>
    {{-- Card --}}
    
    <div class="card-container">
        <div class="card">
            <div class="card-text">
                <h1>Titolo 1</h1>
                <p>Testo della card 1.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-text">
                <h1>Titolo 2</h1>
                <p>Testo della card 2.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-text">
                <h1>Titolo 3</h1>
                <p>Testo della card 3.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-text">
                <h1>Titolo 4</h1>
                <p>Testo della card 4.</p>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.hero .container').classList.add('loaded');
        });
    </script>
</x-layout>
