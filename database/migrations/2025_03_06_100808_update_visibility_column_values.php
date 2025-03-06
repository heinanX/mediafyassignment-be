<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('products')->where('visibility', 'true')->update(['visibility' => 1]);
        DB::table('products')->where('visibility', 'false')->update(['visibility' => 0]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('products')->where('visibility', 1)->update(['visibility' => 'true']);
        DB::table('products')->where('visibility', 0)->update(['visibility' => 'false']);
    }
};
