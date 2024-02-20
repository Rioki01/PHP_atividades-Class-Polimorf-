<?php

echo "Atividade 02 - 20/02/2024 - Classes e Hierarquias";

/////////////////////////////////////////////////////////////////
// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.
echo "<br>1)";

class Livro{
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
}

$livro1 = new Livro("House of Leaves", "Mark Z. Danielewski");

echo "Nome do livro:" . $livro1->getTitulo() ."<br>";
echo "Nome do autor:". $livro1->getAutor() ."<br>";
?>


<?php

/////////////////////////////////////////////////////////////////
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)'
// que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.
echo "<br>2)";
class Livro2{
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor){
        $this->titulo = $titulo;

        $this->autor = $autor;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }

    public function setTitulo($novoTitulo){
        $this->titulo = $novoTitulo;
    }
    public function setAutor($novoAutor){
        $this->autor = $novoAutor;
    }
}

$livro2 = new Livro2("House of Leaves", "Mark Z. Danielewski");
$livro2->setTitulo("House of Leaves Modificado");
$livro2->setAutor("Mark Z. Danielewski V.2");
echo "Nome do livro:" . $livro2->getTitulo() ."<br>";
echo "Nome do autor:". $livro2->getAutor() ."<br>";

?>
<?php
/////////////////////////////////////////////////////////////////
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' 
// e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.
echo "<br>3)";

?>

<?php
/////////////////////////////////////////////////////////////////
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade'
// protegidas e utilize métodos getters e setters para acessá-las e modificá-las.
echo "<br>4)";

?>


<?php
/////////////////////////////////////////////////////////////////
// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' 
// que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.
echo "<br>5)";


?>