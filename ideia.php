<?php 

require_once 'trabalhandoValores.php';

class ideia{
    
    public function nomeArquivoA($nomeArquivo, $quantidade) // está função vai gerar o nome do arquivo quando precisar incrementar valor ao arquivo
    {
        /*
         *    $nomeArquivo usa um input que atribui seu valor a esta variável
         *    $nomeArquivo vai explodir a variável para identificar itens de encremento, estes são:
         *        
         *    $numerico1 sendo este 0-9
         *    $numerico2 sendo este 9-0
         *    $alfabeticoA sendo este a-z
         *    $alfabeticoB sendo este z-a
         *    Caso nenhuma destas ações seja atribuida, então será gerado um arquivo sem engrementadores.
        */
        $numeros = new trabalhandoValores();
        $delimitador = "&";
        $defaultAcionado = 0;
    
        $arrayNomeArquivo = explode($delimitador, $nomeArquivo);
    
        foreach ($arrayNomeArquivo as  $key => $value) {
            $tituloPadrao = $arrayNomeArquivo[0];
            
            switch ($value) { // recebe o tipo de operação a ser realizada, ex: crescente, decrescente, numerica ou alfabetica
                case 'numerico1':
                    $nomeArquivo = $numeros->incrementarNumerico($tituloPadrao , $quantidade);
                    break;
                case 'numerico2':
                    $nomeArquivo = $numeros->decrementoNumerico($tituloPadrao , $quantidade);
                    break;
                case 'alfabeticoA':
                    $nomeArquivo = $numeros->incrementarAlfabetico($tituloPadrao , $quantidade);
                    break;
                case 'alfabeticoB':                                  
                    $nomeArquivo = $numeros->decrementoAlfabetico($tituloPadrao , $quantidade);
                    break;
                default:                 
                    $defaultAcionado++;
                    break;
            }

        }
        return $nomeArquivo;
    
    }
    
    public function novoArquivo($tipoDeAcesso) // está função vai gerar um arquivo
    {
        $nomeArquivo = $_POST['inputNomeArquivo'];
        $quantidade = $_POST['inputMaximoPorArquivo'];
        $nomeArquivo = $this::nomeArquivoA($nomeArquivo , $quantidade);
        $fp = fopen($nomeArquivo, $tipoDeAcesso);
        fwrite($fp , 'Deu certo :D');
        fclose($fp);
        

    }
}

$mostrar = new ideia;
$mostrar->novoArquivo('a');
