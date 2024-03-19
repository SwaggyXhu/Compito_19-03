<?php



final class Articolo_venduto extends Articolo implements JsonSerializable 
{
    

    protected $prezzo_di_vendita;
    protected $quanita_acquistata;

    public function __construct($id) {

        parent::__construct($id)
        $this->prezzo_di_vendita = $prezzo_di_vendita;
        $this->quantita_acquistata = $quanita_acquistata;
     
     }



     public function jsonSerialize(){
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'descrizione' => $this->descrizione,
            'prezzo_di_listino' => $this->prezzo_di_listino,
            'prezzo di vendita' => $this->prezzo_di_vendita,
            'quantita acquistata' => $this->quantita_acquistata,  
        ];
      }







}







