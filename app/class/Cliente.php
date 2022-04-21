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
        $query = 'SELECT * FROM cliente WHERE id = ?';

        //preparando query para receber as circustancias
        $result = $this->mysqli->prepare($query);

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
    public function findByEmail(string $email): ?array
    {
        //tratando sql injetion
        $query = 'SELECT * FROM cliente WHERE email = ?';

        //preparando query para receber as circustancias
        $result = $this->mysqli->prepare($query);

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

    //Criar um novo cliente
    public function createCliente(
        string $name,
        string $email,
        string $cep,
        string $stret,
        int $num,
        string $district,
        string $city,
        string $state,
        string $password):void{
            //hasheando a senha que muda a todo momento.
            $hash = password_hash($password,PASSWORD_DEFAULT);

        $query = 'INSERT INTO 
        cliente (name,email,cep,street,num,district,city,state,password) 
        VALUES(?,?,?,?,?,?,?,?,?)';
        
        $createCliente = $this->mysqli->prepare($query);
        $createCliente->bind_param('ssssissss',$name,$email,$cep,$stret,$num,$district,$city,$state,$hash);
        $createCliente->execute();
    }

    //Alterar as infomações
    public function updateCliente(
        string $id,
        string $name,
        string $email,
        string $cep,
        string $stret,
        int $num,
        string $district,
        string $city,
        string $state,
        string $password):void{

        $query = "UPDATE cliente SET 
        name = ?,
        email = ?,
        cep = ?,
        street = ?,
        num = ?,
        district = ?,
        city = ?,
        state = ?,
        password = ? WHERE id = ?";
        $updateCliente = $this->mysqli->prepare($query);

        $updateCliente->bind_param('ssssisssss',
        $name,
        $email,
        $cep,
        $stret,
        $num,
        $district,
        $city,
        $state,
        $password,
        $id);
        
        $updateCliente->execute();
    }

    //Deletar um cliente
    public function deleteCliente(string $id):void{
        $query = "DELETE FROM cliente WHERE id = ?";
        $deleteCliente = $this->mysqli->prepare($query);
        $deleteCliente->bind_param('s',$id);
        $deleteCliente->execute();
    }
}