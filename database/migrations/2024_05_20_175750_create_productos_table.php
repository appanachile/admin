<?php

use App\Models\Producto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('precio');
            $table->string('descripcion')->nullable();
            $table->enum('status',[Producto::BORRADOR,Producto::REVISION,Producto::PUBLICADO])->default(Producto::BORRADOR);

            $table->text('sku')->nullable();
            $table->text('stock')->nullable();
            $table->text('slug')->nullable();
            $table->string('personalizable')->nullable();

            $table->foreignId('categoria_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
