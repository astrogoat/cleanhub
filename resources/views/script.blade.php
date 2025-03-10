@if (Astrogoat\Cleanhub\Settings\CleanhubSettings::isEnabled() &&
        !blank(settings(Astrogoat\Cleanhub\Settings\CleanhubSettings::class, 'client_id')))
    @push('strata:frontend:end')
        @once
            <script type="text/javascript" src="{{ settings(Astrogoat\Cleanhub\Settings\CleanhubSettings::class, 'url') }}">
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
