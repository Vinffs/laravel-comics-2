<section id="features">
    <div class="d-flex justify-content-between container" id="sectionContainer">
        @foreach (config('sections.sections') as $section)
            <div class="d-flex align-content-center align-items-center">
                <img src="{{ Vite::asset($section['sectionImage']) }}" alt="{{ $section['sectionImage'] }}" />
                <div class="sectionText">{{ $section['sectionName'] }}</div>
            </div>
        @endforeach
    </div>
</section>
