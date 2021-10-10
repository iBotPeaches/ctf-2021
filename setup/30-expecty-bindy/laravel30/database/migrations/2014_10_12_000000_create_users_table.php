<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        $password = Hash::make('password');

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin')->default(0);
            $table->rememberToken();
        });

        User::query()->insert(['name' => 'Admin', 'email' => 'admin@s0urc3704dc7f.com', 'password' => $password, 'is_admin' => 1, 'remember_token' => 'TOAD{cV3-hUnt1N9-15-L4R4FUN}']);
        User::query()->insert(['name' => 'User A', 'email' => 'usera@s0urc3704dc7f.com', 'password' => $password]);
        User::query()->insert(['name' => 'User B', 'email' => 'userb@s0urc3704dc7f.com', 'password' => $password]);
        User::query()->insert(['name' => 'User C', 'email' => 'userc@s0urc3704dc7f.com', 'password' => $password]);
        User::query()->insert(['name' => 'User D', 'email' => 'userd@s0urc3704dc7f.com', 'password' => $password]);
        User::query()->insert(['name' => 'User E', 'email' => 'usere@s0urc3704dc7f.com', 'password' => $password]);
        User::query()->insert(['name' => 'User F', 'email' => 'userf@s0urc3704dc7f.com', 'password' => $password]);
        User::query()->insert(['name' => 'User G', 'email' => 'userg@s0urc3704dc7f.com', 'password' => $password]);
        User::query()->insert(['name' => 'User H', 'email' => 'userh@s0urc3704dc7f.com', 'password' => $password]);
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
