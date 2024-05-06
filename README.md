# CRUD em PHP e MySQL

Desenvolvimento de um Sistema Empresarial utilizando o acesso a banco de dados, com funções de cadastrar, modificar, visualizar e remover os dados.



## 📌 Tecnologias

- PHP
- MySQL | PhpMyAdmin
- JavaScript
- HTML
- CSS
- BOOTSTRAP

## 📌 Conexão com Banco de Dados:

```
$dbNome = 'dbNome'
$dbHost = 'nomeDoDominioOuIP:Porta'
$dbUsuario = 'usuarioDoMysql'
$dbSenha 'senhaDoUsuario'

```
## 📌 Instruções para Importar o Banco de Dados

Para utilizar o projeto, siga estas etapas:

1. Faça o download do arquivo `projeto.sql` no repositório.
2. Abra seu sistema de gerenciamento de banco de dados (por exemplo, MySQL Workbench).
3. Crie um novo banco de dados ou selecione um banco de dados existente onde deseja importar os dados.
4. Importe o arquivo `projeto.sql` no banco de dados:
   - No MySQL Workbench, vá para "Server" > "Data Import" > "Import from Self-Contained File" e selecione o arquivo `projeto.sql`.
5. Siga as instruções do seu sistema de gerenciamento de banco de dados para concluir o processo de importação.

Agora você está pronto para usar o projeto com o banco de dados importado.

## 📌 Lógica de Negócio

Este documento descreve a lógica de negócio das tabelas `funcao` e `funcionario` de um sistema de gerenciamento de funcionários. As tabelas foram definidas com as seguintes colunas:

#### Tabela `funcao`

- `setor` (varchar(15)): Representa o setor em que a função está associada.

- `salario` (float): Representa o salário associado à função.

- `descricao` (varchar(20)): Descreve a função em poucas palavras.

- `id` (int(11)): É a chave primária da tabela, identificando exclusivamente cada função.

#### Tabela `funcionario`

- `endereco` (varchar(55)): Representa o endereço do funcionário.

- `email` (varchar(20)): Armazena o endereço de e-mail do funcionário.

- `data_nasc` (date): Contém a data de nascimento do funcionário.

- `telefone` (int(11)): Armazena o número de telefone do funcionário.

- `id` (int(11)): É a chave primária da tabela, identificando exclusivamente cada funcionário.

- `cpf` (int(11)): Contém o número de CPF do funcionário.

- `id_funcao` (int(11)): É uma chave estrangeira que se relaciona com a tabela `funcao` por meio do campo `id`. Indica a função associada ao funcionário.

- `nome` (varchar(50)): Armazena o nome do funcionário.

- `sobrenome` (varchar(50)): Contém o sobrenome do funcionário.

### :black_medium_small_square: **Índices**

As tabelas têm índices definidos da seguinte maneira:

#### Tabela `funcao`

- Chave primária: O campo `id` é a chave primária da tabela `funcao`.

#### Tabela `funcionario`

- Chave primária: O campo `id` é a chave primária da tabela `funcionario`.

- Índice `id_funcao`: O campo `id_funcao` possui um índice que se relaciona com o campo `id` da tabela `funcao`.

### :black_medium_small_square:  **Relacionamento**

Existe um relacionamento entre as tabelas `funcionario` e `funcao` por meio do campo `id_funcao` na tabela `funcionario`. Isso permite associar cada funcionário a uma função específica.

### :black_medium_small_square:  AUTO_INCREMENT

Os campos `id` nas tabelas `funcao` e `funcionario` são configurados como AUTO_INCREMENT para garantir que cada registro tenha um ID único automaticamente atribuído pelo sistema.

### :black_medium_small_square:  **Restrições de Integridade**

Foi definida uma restrição de integridade referencial (FOREIGN KEY) no campo `id_funcao` da tabela `funcionario`, referenciando o campo `id` da tabela `funcao`. Isso garante que cada valor de `id_funcao` em `funcionario` esteja relacionado a uma função existente em `funcao`.

Isso conclui a descrição da lógica de negócio das tabelas `funcao` e `funcionario`. Essas tabelas são fundamentais para o gerenciamento de funcionários e suas respectivas funções.


:tada: Agradecemos por visitar e explorar o nosso projeto! Se tiver alguma dúvida ou feedback, não hesite em entrar em contato:

- Email: **alinedaniel18@gmail.com**

