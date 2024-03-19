

<?php


inal class OrdineFisico extends Ordine implements JsonSerializable 
{
    

    protected $mod_pagamento;
    protected $quanita_acquistata;

    public function __construct() {

        parent::__construct()
        $this->mod_pagamento = $mod_pagamento;
   
     
     }


     public function jsonSerialize(){
        return [
            'numero_ordine' => $this->numero_ordine,
            'data' => $this->data,
            'importo_totale' => $this->importo_totale,
            'prezzo_di_listino' => $this->articoli_venduti,
            'prezzo' => $this->articoli_venduti,
            'mod pagamento ' =>$this->mod_pagamento,
            'quantita acquistata  ' =>$this->quantita_acquistata,

        ];
      }

     




}



     





?>