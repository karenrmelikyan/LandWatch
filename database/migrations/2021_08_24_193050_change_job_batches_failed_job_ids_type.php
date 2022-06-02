<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeJobBatchesFailedJobIdsType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('job_batches', static function (Blueprint $table) {
            $table->longText('failed_job_ids')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('job_batches', static function (Blueprint $table) {
            $table->text('failed_job_ids')->change();
        });
    }
}
