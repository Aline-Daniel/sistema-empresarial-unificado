<?php
// Credenciais não devem fazer parte do repositório Git.
class Banco
{
    private static $cont = null;

    public function __construct()
    {
        throw new LogicException('Utilize Banco::conectar().');
    }

    public static function conectar()
    {
        if (self::$cont === null) {
            $host = getenv('DB_HOST');
            $nome = getenv('DB_NAME');
            $usuario = getenv('DB_USER');
            $senha = getenv('DB_PASSWORD');
            $porta = getenv('DB_PORT') ?: '3306';
            if (!$host || !$nome || !$usuario || $senha === false || $senha === '' ||
                !ctype_digit((string) $porta)) {
                http_response_code(503);
                exit('Configuração do banco de dados indisponível.');
            }
            try {
                self::$cont = new PDO(
                    "mysql:host={$host};port={$porta};dbname={$nome};charset=utf8mb4",
                    $usuario,
                    $senha,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false,
                    ]
                );
            } catch (PDOException $erro) {
                error_log('Falha na conexão MySQL no sistema empresarial.');
                http_response_code(503);
                exit('Não foi possível conectar ao banco de dados.');
            }
        }
        return self::$cont;
    }

    public static function desconectar()
    {
        self::$cont = null;
    }
}
