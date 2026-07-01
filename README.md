# info_php_26

Básico:
- open folder -> /var/www/html -> login github -> link rep "info_php_26" -> VScode -> git clone (https://github.com/Enzo-Stefano/info_php_26);
- "localhost/" == "/var/www/html/" 

DIA 17/03/26:
- m php, fechar a tag (?>) só se tiver outro tipo de código junto;
- "==" compara o "valor" (ignora o tipo), "===" leva em com-paração o título;
- operadores:
    $resultado = 0;
    $valor1 = 50;
    $valor2 = 200;

    $resultado = $resultado + $valor1; // 50;
    $resultado += $valor1; // 50;
    
    $a = $a + 1;
    $a +=1;
    $a++;
- operadores lógicos:
    && // (and) também funciona
    || // (or) também funciona
    !  (1 != 2)
    ==  (2==2)
    <
    >
    <=
    >=
- Tipos de dados Primitivos
    $numero = 10; // int || integer
    $numero = 10.50; // float, long || Double (Numeric) Decimal
    $numero = "10"; // String
    $numero = '1';// char || character

    // Tipos de dados de estrutura
    // Array || vetor
    $array = [];
    $array = array();
    $objeto = new stdClass(); // objeto ou classe
    $objUsuario = new Usuario();

git flow
- criação da branch dev

linux:
    sudo service mariadb start
    sudo mysql -uroot -p

#mariadb

CREATE database info_php_26;

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

flush privileges;

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB, to%20a%20local%20MySQL%20server.


set session sql_mode = 'No_engine_substitution';

-- Retornar se o filtro for atendido select u.* from usuario as u inner join pessoa_fisica as pf ON u.id = pf.usuario_alteracao;

-- Retornar tudo(usuario + Pessoa_fisica) se encontrar -- senao retorna os dados de usuario select u.* from usuario as u left join pessoa_fisica as pf ON u.id = pf.usuario_alteracao;

-- Retornar tudo(Pessoa_fisica + usuario) se encontrar -- senao retorna os dados da Pessoa_fisica select u.* from usuario as u right join pessoa_fisica as pf ON u.id = pf.usuario_alteracao;

-- Deixa a data e hora automatica no insert e update
Adição de campo de controle
    ALTER TABLE info_php_26.estados MODIFY COLUMN criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
    ALTER TABLE info_php_26.estados MODIFY COLUMN atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

    ALTER TABLE info_php_26.cidades MODIFY COLUMN criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
    ALTER TABLE info_php_26.cidades MODIFY COLUMN atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

    ALTER TABLE info_php_26.endereco MODIFY COLUMN criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
    ALTER TABLE info_php_26.endereco MODIFY COLUMN atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

    ALTER TABLE info_php_26.funcionario MODIFY COLUMN criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
    ALTER TABLE info_php_26.funcionario MODIFY COLUMN atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

    ALTER TABLE info_php_26.pessoa MODIFY COLUMN criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
    ALTER TABLE info_php_26.pessoa MODIFY COLUMN atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

MVC:
    Model = banco de dados;
    View = interface do usuário;
    Controller = validar dados, regras de negócio, criar OU atualizar;

DDD (segue as regra da empresa):
    Domain
    Driven
    Development

Comm Navegador X back:
    $_GET // (oq o navegador faz)(sempre busca)id, nome ...
    $_POST // (Javascript)(Busca mas foco em envio) nome, sobrenome
    $_REQUEST // (requisições) *