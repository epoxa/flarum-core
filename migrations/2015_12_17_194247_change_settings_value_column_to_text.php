<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

return [
    'up' => function (Builder $schema) {
        $schema->table('settings', function (Blueprint $table) {
            $table->text('value')->change();
        });
    },

    'down' => function (Builder $schema) {
        $schema->table('settings', function (Blueprint $table) {
            $table->binary('value')->change();
        });
    }
];
