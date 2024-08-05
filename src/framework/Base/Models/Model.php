<?php

namespace Framework\Models;

use Framework\CDatabase;

abstract class Model
{
    protected static string $table = '';
    protected array $fillable = [];
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public static function getById(int $id): ?self
    {
        $query = "SELECT * FROM " . static::$table . " WHERE id = :id";
        $data = CDatabase::getInstanse()->fetchQuery($query, ['id' => $id]);

        if ($data) {
            return new static($data);
        }

        return null;
    }

    public static function getBy(array $criteria): ?self
    {
        $conditions = [];
        $params = [];

        foreach ($criteria as $key => $value) {
            $conditions[] = "{$key} = :{$key}";
            $params[$key] = $value;
        }

        $whereExp = implode(' AND ', $conditions);
        $query = "SELECT * FROM " . static::$table . " WHERE {$whereExp}";

        $data = CDatabase::getInstanse()->fetchQuery($query, $params);

        if ($data) {
            return new static($data);
        }

        return null;
    }

    public static function create(array $data): ?self
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_map(fn ($key) => ":{$key}", array_keys($data)));
        $query = "INSERT INTO " . static::$table . " ({$columns}) VALUES ({$placeholders})";
        $res = CDatabase::getInstanse()->executeQuery($query, $data);

        if (!$res) {
            return null;
        }

        return new static($data);
    }

    public static function update(int $id, array $data): bool
    {
        $setExp = implode(', ', array_map(fn ($key) => "{$key} = :{$key}", array_keys($data)));
        $query = "UPDATE " . static::$table . " SET {$setExp} WHERE id = $id";

        return CDatabase::getInstanse()->executeQuery($query, $data);
    }

    public function save()
    {
        $id = $this->getId();

        if ($id) {
            return self::update($this->getId(), $this->data);
        }

        return self::create($this->data);
    }

    public function delete(): bool
    {
        return static::deleteExec($this->getID());
    }

    public static function deleteIternal(int $id): bool
    {
        return static::deleteExec($id);
    }

    protected static function deleteExec(int $id): bool
    {
        $query = "DELETE FROM " . static::$table . " WHERE id = :id";

        return CDatabase::getInstanse()->executeQuery($query, ['id' => $id]);
    }

    public function __call(string $name, array $args)
    {
        if (strpos($name, 'get') !== 0) {
            return null;
        }

        $fieldName = strtolower(substr($name, 3));

        return $this->data[$fieldName] ?? null;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        if (!in_array($name, $this->fillable)) {
            return;
        }

        $this->data[$name] = $value;
    }
}
