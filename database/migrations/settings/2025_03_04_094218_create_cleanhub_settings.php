<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('cleanhub.enabled', false);
    }

    public function down()
    {
        $this->migrator->delete('cleanhub.enabled');
    }
};
