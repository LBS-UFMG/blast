<?php 

namespace App\Controllers;

class Blast extends BaseController
{
    public function blastp(){

        $seq1 = $this->request->getPost('seq1');
        $seq2 = $this->request->getPost('seq2');

        // executando blast
        shell_exec("echo '$seq1' > tmp1.fasta && echo '$seq2' > tmp2.fasta");

        $resultado = shell_exec("/usr/local/ncbi/blast/bin/blastp -query tmp1.fasta -subject tmp2.fasta");

        $resultado = explode("Database:", $resultado);


        $dados = [];
        $dados['seq1'] = $seq1;
        $dados['seq2'] = $seq2;
        $dados['resultado'] = $resultado[1];
 
        return view('alinhamento', $dados);
    }
}
