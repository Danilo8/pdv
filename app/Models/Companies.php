<?php

namespace app\Models;

use database\connection\Connection;

class Companies
{
    private $db;
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection;
        $this->db = $this->connection->getConnection();
    }
}
