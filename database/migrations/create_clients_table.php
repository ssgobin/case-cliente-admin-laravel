<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->string('cpf', 11)->unique();
            $table->date('data_nascimento');
            $table->date('data_cadastro');
            $table->decimal('renda_familiar', 10, 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
