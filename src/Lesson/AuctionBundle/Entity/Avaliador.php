<?php

namespace Lesson\AuctionBundle\Entity;


class Avaliador 
{
    private $lances;
    
    public function setLance(Lance $lance)
    {
        $this->lances[] = $lance;
        return $this;
    }
    
    public function count()
    {
        return count($this->lances);
    }
    
    public function ganhador()
    {
        $maior = -INF;
        $lanceGanhador = null;
        foreach($this->lances as $lance){
            if ($lance->getValor() >= $maior){
                $maior = $lance->getValor();
                $lanceGanhador = $lance;
            }
        }
        return $lanceGanhador;
    }
    
    public function perdedor()
    {
       $menor = INF;
        $lancePerdedor = null;
        foreach($this->lances as $lance){
            if ($lance->getValor() <= $menor){
                $menor = $lance->getValor();
                $lancePerdedor = $lance;
            }
        }
        return $lancePerdedor;
    }
    
    public function avaliacao()
    {
        return (object) [
            'total' => $this->count(),
            'ganhador' => $this->ganhador(),
            'perdedor' => $this->perdedor(),
        ];
    }
            
}
