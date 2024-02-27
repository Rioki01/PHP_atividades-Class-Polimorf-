<?php
echo "Atividade 03 - 20/02/2024 - Polimorfismo parte.2<br>";
?>
1)
<?php
echo "<br>";
// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.
Class Veiculo{
    public $ano;
    public $marca;
    public $cor;
    function Informacoes($ano, $marca, $cor) {
        echo "<br>O veiculo é do Ano:" . $ano." da marca: ". $marca. "e da cor: ". $cor."<br>";
    }
    function Buzinar(){
        echo "<br>Buzinando";
    }
    function Freiar(){
        echo "<br>Buzinando";
    }
}

class Moto extends Veiculo {
    function Buzinar(){
        echo "<br>Buzina de moto!";
    }
}
class Carro extends Veiculo {
    function Buzinar(){
        echo "<br>Buzina de carro!";
    }
}

    $carro1 = new Carro();
    $carro1->ano 		= "2014 / 2015";
	$carro1->marca 	= "Corcel 2";
	$carro1->cor		= "Amarelo";

    $moto1 = new Moto();
    $moto1->ano 		= "2019";
	$moto1->marca 	= "Yamaha";
	$moto1->cor		= "Vermelha";

    echo $carro1->Buzinar();
    echo $moto1->Buzinar();
    echo $carro1->Informacoes($carro1->ano, $carro1->marca, $carro1->cor);
?>

2)
<?php
echo "<br>";
// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.
class Mensagens{
    function enviarMensagem($mensagem){
        return $mensagem;
    }
}
class EmailSender extends Mensagens{
    function enviarMensagem($mensagem){
        echo "<br>Voce enviou um Email: ". $mensagem;;
    }
}
class SMSSender extends Mensagens{
    function enviarMensagem($mensagem){
        echo "<br>Voce enviou um SMS: ". $mensagem;
    }
}

$email = new EmailSender();
$sms = new SMSSender();

$email->enviarMensagem("email Enviado<br>");
$sms->enviarMensagem("sms Enviado<br>");

?>
<br>
3)
// Tentei mas não funcionou <br> <br>
4)
<?php
echo "<br>";
// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.
Class Animal{
    function emitirSom(){
        echo "<br>Som!";
    }
}

class Cachorro extends Animal{
    function emitirSom(){
        echo "<br>Latido!<br>";
    }
}
class Gato extends Animal{
    function emitirSom(){
        echo "<br>Miado!<br>";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

$cachorro->emitirSom();
$gato->emitirSom();

?>

5)
<?php
echo "<br>";
// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.
trait LogErro{
    function registrarLog(){
        echo "<br>Erro Log";
    }
}

trait LogInfo{
    function registrarLog(){
        echo "<br>Log Info";
    }
}


class Registro{
    use LogErro, LogInfo{
        LogInfo::registrarLog insteadof LogErro;
    }
}

$erro = new Registro();
$erro->registrarLog();
$erro->registrarLog();


?>