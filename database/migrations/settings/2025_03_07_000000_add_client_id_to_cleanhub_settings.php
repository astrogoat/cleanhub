<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('cleanhub.url', '');
        $this->migrator->add('cleanhub.client_id', '');
    }

    public function down()
    {
        $this->migrator->delete('cleanhub.url');
        $this->migrator->delete('cleanhub.client_id');
    }
};
