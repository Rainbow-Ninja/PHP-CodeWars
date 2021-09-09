// replace A->T, T->A, C->G, G->C

<?php
    function DNA_strand($dna) {
        $dna_1 = array('A'=>'T','T'=>'A', 'C'=>'G', 'G'=>'C');
        return strtr($dna, $dna_1);
    }

    echo DNA_strand('ATTA');
?>
