<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totalDePaginas;
    private $paginaAutal;
    private $aberto;
    private $leitor;
    
    public function __construct($titulo, $autor, $totalDePaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalDePaginas = $totalDePaginas;
        $this->leitor = $leitor;
        $this->paginaAutal = 0;
        $this->aberto = false;        
    }

    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotalDePaginas() {
        return $this->totalDePaginas;
    }

    public function getPaginaAutal() {
        return $this->paginaAutal;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotalDePaginas($totalDePaginas): void {
        $this->totalDePaginas = $totalDePaginas;
    }

    public function setPaginaAutal($paginaAutal): void {
        $this->paginaAutal = $paginaAutal;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }
    
    public function detalhar() {
        echo '<hr>';
        echo "Título: $this->titulo<br>";
        echo "Autor: $this->autor<br>";
        echo "Total de páginas: $this->totalDePaginas<br>";
        echo "Leito: " . $this->leitor->getNome() . "<br>";
        echo "Página: " . $this->paginaAutal ."<br>";
        printf("Aberto? %s", $this->aberto ? "Sim" : "Não");
        echo '<hr>';
    }

    #[\Override]
    public function abrir() {
        if(!$this->aberto) {
            $this->aberto = true;
        }
    }

    #[\Override]
    public function avancarPagina() {
        if($this->paginaAutal < $this->totalDePaginas && $this->aberto) {
            $this->paginaAutal++;
        }
    }

    #[\Override]
    public function fechar() {
        if($this->aberto) {
            $this->aberto = false;
        }
    }

    #[\Override]
    public function folhear($pagina) {
       if($pagina > $this->getTotalDePaginas()) {
           $this->paginaAutal = 0;
       } else {
           $this->paginaAutal = $pagina;
       }
    }

    #[\Override]
    public function voltarPagina() {
        if($this->totalDePaginas > 0 && $this->aberto) {
            $this->totalDePaginas--;
        }
    }
}
