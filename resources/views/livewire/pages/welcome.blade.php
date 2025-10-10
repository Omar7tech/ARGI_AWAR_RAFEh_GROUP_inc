<div class="">
    <x-hero.main />


    <x-sections.secure-foundation />
    <x-sections.solutions-services :$ourWorks :$services />
    <x-sections.parallax1 />
    @if ($industries->isNotEmpty())
        <x-sections.industries-we-serve :$industries />
    @endif
    <x-sections.awar-group-advantage />
    <x-sections.values-drive-us />

</div>
