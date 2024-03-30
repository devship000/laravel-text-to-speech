<section class="tts-section" style="background-image: url({{ asset('https://bitbits.cc/assets/img/front/top-asset.svg') }});">
            <div class="auto-container">
                <div class="inner-container">
                    <form class="content-box centred" method="POST" action="{{ route('text-to-speech') }}">
                        @csrf
                        <h2>Text To Speech Demo</h2>
                        <p> Please feel free to use this.</p>
                        
                        <textarea class="text" name="text" rows="5" cols="50" placeholder="Enter your text here"></textarea>
                        <br>
                        <button type="submit">Convert to Speech</button>
                    </form>

                    @if (session('audio'))
                        <audio controls>
                            <source src="{{ session('audio') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    @endif



</section>
<!-- banner-section end -->
