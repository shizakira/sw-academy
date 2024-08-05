<?php

namespace Framework;

use Exception;
use Framework\Models\Model;

class CUser extends Model
{
    protected static string $table = "users";
    protected array $fillable = ["name", "email", "password"];
}
