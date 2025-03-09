<?php

namespace Astrogoat\Cleanhub\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class CleanhubSettings extends AppSettings
{
    public string $client_id;

    public function rules(): array
    {
        return [
           'client_id' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Interact with Cleanhub.';
    }

    public static function group(): string
    {
        return 'cleanhub';
    }
}
