<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    protected $table;
    protected $fields = [];
    protected $conditions = [];
    protected $limit;

    public function select(string $table, array $fields): QueryBuilderInterface
    {
        $this->table = $table;
        $this->fields = $fields;
        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): QueryBuilderInterface
    {
        $this->conditions[] = "$field $operator '$value'";
        return $this;
    }

    public function limit(int $limit): QueryBuilderInterface
    {
        $this->limit = $limit;
        return $this;
    }

    public function getSQL(): string
    {
        $sql = 'SELECT ' . implode(', ', $this->fields) . ' FROM ' . $this->table;
        if (!empty($this->conditions)) {
            $sql .= ' WHERE ' . implode(' AND ', $this->conditions);
        }
        if ($this->limit) {
            $sql .= ' LIMIT ' . $this->limit;
        }
        return $sql;
    }
}