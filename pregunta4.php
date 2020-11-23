<?php

class Libro
{                          
    public $nomLibro;       
    public $nomAutorEditor;
    public $Libroinfo;      
    public $numeroisbn;     

    public function __construct(string $nombreLibro, string $nombreAutorEditor, string $libroinfo, string $numeroisbn)
    {
        $this->nombreLibro = $nombreLibro;
        $this->nombreAutorEditor = $nombreAutorEditor;
        $this->libroinfo = $libroinfo;
        $this->numeroisbn =$numeroisbn;
    }
    public function getLibroinfo()
    {
        return $this->libroinfo;
    }

    public function cambiarLibroinfo(): void
    {
        echo "Informacion del libro";
    }
}

?>