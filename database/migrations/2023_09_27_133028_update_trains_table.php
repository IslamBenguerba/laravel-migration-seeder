<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //
            $table->string('azienda',150);
            $table->string('stazione_di_servizio',100);
            $table->time('oraio_di_partenza');
            $table->time('oraio_di_arrivo');
            $table->char('codice_treno');
            $table->boolean('In_orario');
            $table->boolean('cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //
            $table->dropColumn('azienda');
            $table->dropColumn('stazione_di_servizio');
            $table->dropColumn('oraio_di_partenza');
        });
    }
};
