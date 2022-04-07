<?php

class Cliente{
    private $mysqli;

    public function __construct(mysqli $mysqli){
        $this->mysqli = $mysqli;
    }

    //READ ALL CLIENTES
    public function readClientes():array{
        $query = 'SELECT * FROM cliente';

        //usado para execultar a query no banco de dados
        $result = $this->mysqli->query($query);

        /*A função mysqli_fetch_assoc() é usada para retornar
        uma matriz associativa representando a próxima
        linha no conjunto de resultados representado pelo parâmetro
        result, aonde cada chave representa o nome de uma coluna do 
        conjunto de resultados.*/
        $clientes = $result->fetch_all(MYSQLI_ASSOC);

        return $clientes;
    }

    //buscar um cliente por id
    public function findById(string $id):array{
        //tratando sql injetion
        $query = 'SELECT * FROM artigos WHERE = ?';

        //preparando query para receber as circustancias
        $result = $this->mysql->prepare($query);

        //substituindo o ? da query pela variavel enviada
        //Passa variáveis para um preparado comando como parâmetros
        $result->bind_param('s', $id);

        //execulta a query
        $result->execute();

        //armazenando o resultado em uma variavel
        /*fetch_assoc = Retorna uma matriz associativa que corresponde a linha obtida, 
        ou null se não houverem mais linhas.*/
        $cliente = $result->get_result()->fetch_assoc();
        return $cliente;
    }

    //buscar um cliente por email
    public function findByEmail(string $email):array{
        //tratando sql injetion
        $query = 'SELECT * FROM artigos WHERE = ?';

        //preparando query para receber as circustancias
        $result = $this->mysql->prepare($query);

        //substituindo o ? da query pela variavel enviada
        //Passa variáveis para um preparado comando como parâmetros
        $result->bind_param('s', $email);

        //execulta a query
        $result->execute();

        //armazenando o resultado em uma variavel
        /*fetch_assoc = Retorna uma matriz associativa que corresponde a linha obtida, 
        ou null se não houverem mais linhas.*/
        $cliente = $result->get_result()->fetch_assoc();
        return $cliente;
    }
}