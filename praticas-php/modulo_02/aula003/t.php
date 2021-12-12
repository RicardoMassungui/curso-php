<?php
    $vetor = array('nome' => 'ricardo',
                            'classe'=>'12ª', 'curso' => 'Informática');
                            if(in_array('ricardo', $vetor)){
        echo"<p>aluno encontrado!</p>";
    }else{
        echo"<p>aluno não encontrado!</p>";
    }
?>