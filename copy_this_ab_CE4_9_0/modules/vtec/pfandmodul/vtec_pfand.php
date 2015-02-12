<?php
class  vtec_pfand extends vtec_pfand_parent
{
    /**
     * Gibt Artikel-Pfand zurück
     */
    public function Pfand()
    {
        return $this->oxarticles__vtecpfand->value;
    }

    /**
     * Gibt formatierten Pfandwert zurück
     */
    public function getFormatPfand()
    {
        if(empty($this->oxarticles__vtecpfand->value)) {
            return;
        }
        $pfand = oxRegistry::getLang()->formatCurrency( $this->oxarticles__vtecpfand->value );
        return $pfand;
    }

}
