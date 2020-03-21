<?php

/**
 * Description of ContaBanco
 *   
 * Regras: 
  1) Tipo de Conta aceita Poupança PP, ou Conta Corrente CC.
  2) Abrir conta deve mudar o Status para verdadeiro e definir o tipo, se Conta Corrente inserir + 50,00 reais, se Poupança + 150,00.
  3) Ao fechar a conta a mesma não deve estar negativa ou possuir dinheiro.
  4) Para que haja depósito na conta a mesma deve estar com status Verdadeiro.
  5) Para que haja saque a conta deve possuir dinheiro disponível para saque.
  6) O método pagarMensalidade ao acionado deve verificar se a conta solicitada está aberta, e se possui valor na mesma, depois de efetuada a verificação subtrair CC -15,00, PP -20,00
  7) O Construtor deve iniciar a conta com Status Falso (Conta Fechada), e saldo negativo.
 *
 * @author mikael
 */
class ContaBanco {

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

//    Construtor
    public function __construct($numConta, $dono) {
        $this->setSaldo(0);
        $this->setNumConta($numConta);
        $this->setDono($dono);
        $this->setStatus(false);
    }

//    Getters and Setters
    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

//    Métodos
    public function abrirConta($tipo) {
        $this->status = true;
        $this->setTipo($tipo);

        if ($tipo == "CC") {
            
            $this->setSaldo(50);
            echo "<p><h3>Parábens, a conta {$this->getTipo()} de {$this->getDono()}, foi aberta com sucesso! <br> Bônus ganho no valor de R$ {$this->getSaldo()} reais. </h3></p>";
            
        } else if ($tipo == "PP") {
            
            $this->setSaldo(150);
            echo "<p><h3>Parábens, a conta {$this->getTipo()} de {$this->getDono()}, foi aberta com sucesso! <br> Bônus ganho no valor de R$ {$this->getSaldo()} reais. </h3></p>";
            
        } else {
            $this->status = false;
            $this->setTipo("Parâmentro Inválido!");
            echo "<p><h3> Parâmetro Inválido! Insira CC para Conta Corrente ou PP para Poupança! </h3></p>";
        }
    }

    public function fecharConta() {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() > 0) {
                echo "<p><h3>Está conta possui o valor de R$ {$this->getSaldo()} reais, <br> saque o valor para que a mesma possa ser fechada! </h3></p>";
            } else {
                if ($this->getSaldo() < 0) {
                    echo "<p><h3>Conta Negativa! Insira o valor de R$ {$this->getSaldo()} reais, para poder fechá-la! </h3></p>";
                } else {
                    $this->setStatus(false);
                    echo "<p><h3> Conta fechada com Sucesso! </h3></p>";
                }
            }
        } else {
            echo "<p><h3> Esta conta já se encontra fechada! </h3></p>";
        }
    }

    public function depositar($deposito) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $deposito);
            echo "<p><h3>O valor de R$ {$deposito} reais, foi inserido na conta de {$this->getDono()}. <br> Saldo atual R$: {$this->getSaldo()} reais. </h3></p>";
        } else {
            echo "<p><h3> Esta conta é inválida e portanto não pode receber depósito! </h3></p>";
        }
    }

    public function sacar($saque) {
        if ($this->getStatus()) {
            if ($this->getSaldo() < $saque) {
                echo "<p><h3> Está conta não possui saldo disponível para saque! <br> Saldo R$ {$this->getSaldo()} reais </h3></p>";
            } else {
                $this->setSaldo($this->getSaldo() - $saque);
                echo "<p><h3> Saque efetuado no valor R$ de {$saque} reais, restante: R$ {$this->getSaldo()} reais </h3></p>";
            }
        } else {
            echo "<p><h3> Está conta encontra-se fechada e portanto não pode realizar saque! </h3></p>";
        }
    }

    public function pagarMensalidade() {
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } else if ($this->getTipo() == "PP") {
            $valor = 20;
        }

        if ($this->getStatus()) {
            if ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p><h3>Mensalidade para {$this->getDono()} paga com Sucesso! Saldo: R$ {$this->getSaldo()} reais </h3></p>";
            } else {
                echo "<p><h3>Saldo insuficiente para pagamento de tarifa! \nSaldo R$ {$this->getSaldo()} </h3></p>";
            }
        } else {
            echo "<p><h3>Está conta encontra-se fechada e portanto não pode realizar pagamento de mensalidade! </h3></p>";
        }
    }

}
