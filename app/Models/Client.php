<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    /* $table->string('client_name');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('city')->unique();
            $table->string('state')->unique();
            $table->float('credit');
            $table->date('birthday');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
     
     */
    protected $fillable = ['client_name', 'email', 'cpf', 'city', 'state','credit','birthday'];

}
