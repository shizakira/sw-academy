<?php

namespace Framework;

use Exception;
use Framework\Enums\Role;
use Framework\Models\Model;

class CUser extends Model
{
    protected static string $table = "users";
    protected array $fillable = ["name", "email", "password", "role"];

    public function setRole(int $id, Role $role): bool
    {
        return self::update($id, ['role' => $role->value]);
    }

    public function getRole(int $id): Role
    {
        $user = self::getById($id);

        if (!empty($user) && isset($user->data['role'])) {
            return Role::from($user->data['role']);
        }

        throw new Exception("Role not found for user with id: $id");
    }
}
