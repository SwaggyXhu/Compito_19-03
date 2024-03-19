

<?php



final class OrdineOnline extends Ordine implements JsonSerializable 
{
    

    protected $ip_acquirente;
    protected $codice_di_autorizzazione.;

    public function __construct() {

        parent::__construct()
        $this->ip_acquirente = $ip_acquirente;
        $this->codice_di_autorizzazione = $ip_acquirente;
   
     
     }




     public function jsonSerialize(){
        return [
            'numero_ordine' => $this->numero_ordine,
            'data' => $this->data,
            'importo_totale' => $this->importo_totale,
            'prezzo_di_listino' => $this->articoli_venduti,
            'ip acquirente ' =>$this->ip_acquirente,
            'codice di autorizzazione ' =>$this->codice_di_autorizzazione,

        ];
      }
     
     




}
?>