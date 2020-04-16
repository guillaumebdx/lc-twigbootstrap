<?php

namespace App\Model;

class CrookManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'sheet';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectAllBy(string $type, string $order)
    {
        return $this->pdo->query('
            SELECT * 
            FROM ' . $this->table . '  
            JOIN user u ON sheet.user_id = u.id
            ORDER BY '. $type .' ' . $order)->fetchAll();
    }
}
