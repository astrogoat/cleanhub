@if (Astrogoat\Cleanhub\Settings\CleanhubSettings::isEnabled() && !blank(settings(Astrogoat\Cleanhub\Settings\CleanhubSettings::class, 'client_id')))
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
@endif
