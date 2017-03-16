<?php

if (! function_exists('qb')) {
    /**
     * @return \MvcBox\SqlQuery\MysqlQuery
     */
    function qb()
    {
        /* ************ Database config ************ */
        $username = 'root';
        $password = '';
        $dbname   = 'test';
        $host     = 'localhost';
        /* ***************************************** */

        require_once __DIR__ . '/autoloader.php';
        static $pdo;
        if (null === $pdo) {
            try {
                $pdo = new \PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
            } catch (\Exception $e) {
                exit('Fatal error: ' . $e->getMessage() . ' (' . $e->getFile() . ':' . $e->getLine() . ')');
            }
        }
        return new \MvcBox\SqlQuery\MysqlQuery($pdo);
    }
}
