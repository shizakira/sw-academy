<?php

namespace Framework;

use Exception;
use Framework\Models\Model;

class CUser extends Model
{
    protected static string $table = "clients";
    protected array $fillable = ["name", "email"];
}
