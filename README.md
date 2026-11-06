# Sistema Empresarial Unificado — PHP e MySQL

Aplicação didática para gerenciar funcionários e funções/cargos, demonstrando operações CRUD, relacionamento entre tabelas e SQL relacional.

## Tecnologias
- PHP (PDO), MySQL/MariaDB
- HTML, CSS, Bootstrap e JavaScript
- Estrutura do banco documentada em projeto.sql

## Funcionalidades
- Listagem, cadastro, edição e exclusão de funcionários.
- Cadastro e gerenciamento de cargos/funções.
- Relacionamento entre as tabelas funcionario e funcao por id_funcao (chave estrangeira).

## Como executar localmente
1. Instale PHP 8.1+ com extensão pdo_mysql e MySQL/MariaDB.
2. Crie um banco VAZIO separado para testes.
3. Leia o arquivo projeto.sql antes de importar; ele define tabelas e inclui dados de exemplo. Jamais importe sem backup em um banco real.
4. Configure DB_HOST, DB_PORT (padrão 3306), DB_NAME, DB_USER e DB_PASSWORD no ambiente de execução do PHP. O modelo .env.example não é carregado automaticamente.
5. Inicie: php -S 127.0.0.1:8000
6. Abra: http://127.0.0.1:8000/index.php

Exemplo de configuração (valores fictícios):
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_NAME=empresa_teste
    DB_USER=usuario_teste
    DB_PASSWORD=defina_uma_senha_localmente

## Estrutura dos dados
Funcao: identificador, setor, salário e descrição.
Funcionario: identificador, nome, sobrenome, endereço, nascimento, telefone, CPF, e-mail e id_funcao.
Os registros de funcionário são associados à tabela de funções. O script SQL é material demonstrativo e não deve ser aplicado sobre dados de produção.

## Segurança
- A conexão PDO agora lê credenciais de variáveis de ambiente e utiliza utf8mb4 com prepared statements nativos.
- Atenção: esta é apenas a configuração da conexão; os formulários e endpoints originais ainda precisam de auditoria completa, validação, proteção CSRF e autenticação antes de exposição pública.
- O sistema não possui login de administrador: use apenas ambiente local ou isolado. Não cadastre CPF, endereço ou outros dados pessoais reais.
- Se alguma credencial já tiver sido incluída no histórico Git, troque-a no MySQL; limpar o código atual não remove o histórico antigo.

## Validação
O GitHub Actions valida a sintaxe dos arquivos PHP com PHP 8.2. Testes reais com MySQL e análise funcional completa ainda são necessários.

Origem: cópia pública de AlineDaniel/sistema-empresarial-unificado. Preserve a autoria dos trabalhos recuperados.
