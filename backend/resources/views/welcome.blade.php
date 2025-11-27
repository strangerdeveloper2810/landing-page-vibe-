<x-layouts.app>
    <div class="welcome-wrapper">
        <x-header />
        <x-slider />
        <x-content />

        <x-home.kebad-case />
        <x-home.bussiness />
        <x-home.ai />
        <x-home.feater />
        <x-home.contact />
        <x-footer />
    </div>

    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
    @endpush
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @endpush
</x-layouts.app>
