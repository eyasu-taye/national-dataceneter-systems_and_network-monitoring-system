<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {
            $table->id();
            $table->string('domain_name')->unique();
            $table->string('woredanet_ip_address')->null();
            $table->string('Public_ip_address')->null();
            $table->string('up_down_status')->null();
            $table->string('local_ip_ping_status')->null();
            $table->string('domain_ns_lookup_status')->null();
            $table->string('system_owner')->null();
            $table->string('owner_contact_email')->null();
            $table->string('owner_contact_Phone')->null();
            $table->string('remark')->null();
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
        Schema::dropIfExists('systems');
    }
}
