<?php



final class Negozio extends AnotherClass implements JsonSerializable 
{
    

 protected $nome;
 protected $telefono;
 protected $url;
 protected $p_iva;

 protected $ordiniFisici = array();
 protected $ordiniOnline = array();

  public function __construct($nome,$telefono,$url,$p_iva) {
    $this->nome = $nome;
    $this->telefono=$telefono;
    $this->url=$url
    $this->p_iva=$p_iva
 }


 public function addOrdineFisico($OrdineFisico){
    array_push($this-> oridniFisici, $OrdineFisico);
}
public function addOrdineOnline($OrdineOnline){
    array_push($this->ordiniOnline $OrdineOnline);
}

public function getOrdini(){
    return $this ->oridniOnline && $this -> oridiniFisici;
}

public function getDispositiviPressione(){
    $dispositivi = array();
    foreach ($this -> rilevatore as $disp){
        if($disp instanceof RilevatoreDiPressione){
            $dispositivi[] = $disp;
        }

    }
    return $dispositivi;
}

public function getDispositiviUmidita(){
    $dispositivi = array();
    foreach ($this -> rilevatore as $disp){
        if($disp instanceof RilevatoreDiUmidita){
            $dispositivi[] = $disp;
        }

    }
    return $dispositivi;
}

public function getAllarme($id){
    foreach($this -> dispositivoDiAllarme as $all){
        if($all ->getId() == $id){
            return $all;
        }
    }
}
public function getpressione($id){
    $dispositivi = $this -> getDispositiviPressione();
    foreach($dispositivi as $disp){
        if($disp ->getId() == $id){
            return $disp;
        }
    }
}

public function getUmidita($id){
    $dispositivi = $this -> getDispositiviUmidita();

    foreach($dispositivi as $disp){
        if($disp ->getId() == $id){
            return $disp;
        }
    }
}

   
    
    public function jsonSerialize(){
        return [
            'nome' => $this->nome,
            'telefono' => $this->telefono,
            'url' => $this->url,
            'p.iva' => $this->p_iva,
        ];
    }






}









?>