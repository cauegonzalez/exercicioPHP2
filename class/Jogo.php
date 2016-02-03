<?php
class Jogo

{
    private $quantidadeDezenas;
    private $resultado;
    private $totalJogos;
    private $jogos;

    public function getQuantidadeDezenas()
    {
        return $this->quantidadeDezenas;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function getTotalJogos()
    {
        return $this->totalJogos;
    }

    public function getJogos()
    {
        return $this->jogos;
    }

    public function setQuantidadeDezenas($quantidadeDezenas)
    {
        $this->quantidadeDezenas = $quantidadeDezenas;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    public function setTotalJogos($totalJogos)
    {
        $this->totalJogos = $totalJogos;
    }

    public function setJogos($jogos)
    {
        $this->jogos = $jogos;
    }


    public function __construct($quantidadeDezenas, $totalJogos)
    {
        $this->setQuantidadeDezenas($quantidadeDezenas);

        $this->setTotalJogos($totalJogos);
    }

    private function montaJogo()
    {
        $tamanhoArray = $this->getQuantidadeDezenas();

        $arrayJogo = $this->sorteio($tamanhoArray);

        return $arrayJogo;
    }

    public function criaJogos()
    {
        $totalJogos = $this->getTotalJogos();

        for ($i = 0; $i < $totalJogos; $i++)
        {
            $a = $this->montaJogo();

            $arrayJogos[] = $a;
        }

        $this->setJogos($arrayJogos);
    }

    private function sorteio($tamanhoArray = 6)

    {
        $arrayJogo = [];

        for ($i = 0; $i < $tamanhoArray; $i++)
        {

            while (true)
            {

                $valorGerado = rand(1, 60);

                if (!in_array($valorGerado, $arrayJogo))
                {
                    break;
                }
            }

            $arrayJogo[] = $valorGerado;
        }

        sort($arrayJogo);

        return $arrayJogo;
    }

    public function realizaSorteio()
    {
        $this->setResultado($this->sorteio());
    }

    public function confere()
    {
        $arrayJogos = $this->jogos;

        $resultado = $this->resultado;

        $tabela = "";

        $tabela .= "<table border='1' width='500'>";

        foreach ($arrayJogos as $key => $arrayJogo)
        {

            $acertos = 0;

            $posicao = $key + 1;

            $tabela .= "<tr>";

            $tabela .= "<td>Jogo " . $posicao . ": </td>";

            foreach ($arrayJogo as $value)
            {

                if (in_array($value, $resultado))
                {
                    $acertos++;

                    $tabela .= "<td style=\"color:red;\">" . $value . "</td>";
                }
                else
                {
                    $tabela .= "<td>" . $value . "</td>";
                }
            }

            $tabela .= "<td>Acertou " . $acertos . "</td>";

            $tabela .= "</tr>";
        }

        $tabela .= "<table>";

        echo $tabela;
    }

    public function imprimeResultado()
    {
        echo "O resultado do sorteio foi:";

        echo "<table><thead><tr>";

        $arrayResultado = $this->resultado;

        foreach ($arrayResultado as $value)
        {
            echo "<th>" . $value . "</th>";
        }

        echo "</tr></thead></table>";
    }
}