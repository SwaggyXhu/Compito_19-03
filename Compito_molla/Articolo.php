<?php



final class Articolo implements JsonSerializable 
{
    

 protected $id;
 protected $nome;
 protected $descrizionie;
 protected $prezzo_di_listino;

  public function __construct($id,$nome,$descrizionie,$prezzo_di_listino) {

   
    $this->id = $id;
    $this->nome=$nome
    $this->descrizione = $descrizionie;
    $this->prezzo_di_listino=$prezzo_di_listino;
    
 }





 public function jsonSerialize(){
  return [
      'id' => $this->id,
      'nome' => $this->nome,
      'descrizione' => $this->descrizione,
      'prezzo_di_listino' => $this->prezzo_di_listino,
  ];
}




}









?>