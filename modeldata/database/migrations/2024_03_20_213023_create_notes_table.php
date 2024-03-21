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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string("title", 255)->nullable();
            $table->string("description", 255);
            $table->boolean("done")->default(false);
            $table->date("deadline");
            // $table->integer("example");
            // $table->unsignedInteger("example");
            // $table->bigInteger("example");
            // $table->unsignedBigInteger("example");
            // $table->text("example");
            // $table->float("example");
            // $table->decimal("example");
            // $table->float("example");
            // $table->enum("state", ["DRAFT", "PUBLISH", "DELETED"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
