<?php
    namespace DAL;

use PDO;

class Conexao
{
    private static $dbNome = 'pedidos';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';

    private static $cont = null;

    private function __construct()
    {
        die("A função init não é permitida");
    }

    public static function conectar()
    {
        if (self::$cont == null) {
            try {
                self::$cont = new \PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbNome, self::$dbUsuario, self::$dbSenha);
                self::$cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $exception) {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }

    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
