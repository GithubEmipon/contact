<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('first_name', 225);
            $table->string('last_name',225);
            $table->integer('gender')->comment('性別:1=男性, 2=女性 , 3=その他');
            $table->string('email', 225);
            $table->string('tel',225);
            $table->string('address1',225);
            $table->string('address2',225);
            $table->text('content');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('contacts');
    }
}
