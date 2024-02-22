<?php
class Client{
    private string $cpf;
    private string $fullname;
    private string $phone;
    private bool $status;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute,$value)
    {
        $this->$attribute = $value;
    }

    public function __toString():string
    {
        $clientStatus = ($this->status) ? 'Ativo' : 'Inativo';
        return 'Nome: '.$this->fullname. "\nCPF: ".$this->cpf."\nPhone: ".$this->phone."\nStatus: ".$clientStatus;
    }
}