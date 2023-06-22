<?php

use App\Models\Division;
use App\Models\Section;
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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->String('emp_id')->unique();
            $table->text('name');
            $table->double('phone_no');
            $table->double('mobile_no');
            $table->string('email');
            $table->string('designation');
            $table->foreignIdFor(Division::class);
            $table->foreignIdFor(Section::class);
            $table->date('date_of_birth');
            $table->date('date_of_joining');
            $table->date('date_of_retirement');
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
