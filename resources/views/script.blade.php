@if (Astrogoat\Cleanhub\Settings\CleanhubSettings::isEnabled() &&
        !blank(settings(Astrogoat\Cleanhub\Settings\CleanhubSettings::class, 'client_id')))
    @push('strata:frontend:end')
        @once
            <script type="text/javascript" src="https://cdn.cleanhub.io/embed/CleanhubBanner.js">
            </script>
        @endonce
        <script type="text/javascript">
            CleanhubBanner.mount({
                clientId: "{{ settings(Astrogoat\Cleanhub\Settings\CleanhubSettings::class, 'client_id') }}",
                elementId: "cleanhub-banner"
            })
        </script>
    @endpush
@endif
