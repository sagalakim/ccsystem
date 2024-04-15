<?php

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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
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
        Schema::dropIfExists('personal_access_tokens');
    }
};
/* Mis Or places SQL query
CREATE TABLE locations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    location VARCHAR(255) NOT NULL,
    zip_code VARCHAR(10) NOT NULL,
    phone_area_code VARCHAR(10) NOT NULL
);

INSERT INTO locations (location, zip_code, phone_area_code) VALUES
('Alubijid', '9018', '88'),
('Balingasag', '9005', '88'),
('Balinguan', '9011', '88'),
('Binuangan', '9008', '88'),
('Cagayan de Oro City', '9000', '88'),
('Claveria', '9004', '88'),
('El Salvador', '9017', '88'),
('Gingoog City', '9014', '88'),
('Gitaum', '9020', '88'),
('Initao', '9022', '88'),
('Jasaan', '9003', '88'),
('Kinogitan', '9010', '88'),
('Lagonglong', '9006', '88'),
('Laguidingan', '9019', '88'),
('Libertad', '9021', '88'),
('Lugait', '9025', '88'),
('Magsaysay', '9015', '88'),
('Manticao', '9024', '88'),
('Medina', '9013', '88'),
('Naawan', '9023', '88'),
('Opol', '9016', '88'),
('Salay', '9007', '88'),
('Sugbongcogon', '9009', '88'),
('Tagoloan', '9001', '88'),
('Talisayan', '9012', '88'),
('Villanueva', '9002', '88');
*/