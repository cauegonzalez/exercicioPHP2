# exercicioPHP2

1 - Criar uma classe que tenha 4 atributos privados, para manter os seguintes dados.
  * quantidadeDezenas (podendo conter somente um dos seguintes numeros: 6, 7, 8 ,9 ou 10)
  * resultado
  * totalJogos
  * jogos
  
2 - Criar , nessa classe, métodos públicos, para pegar e para setar os valores dos atributos.

3 - Criar um método de construção, onde já recebe 2 parâmetros (quantidade de dezenas e total de jogos), e atribua os valores nos seus respectivos atributos

4 - Criar um método privado, que retorne um array com tamanho 'quantidade de dezenas' que tem no atributo homônimo, aleatórias entre 1 e 60 , atentando que os números nunca se repitam e que estejam na ordem crescente.

5 - Criar um método publico para criar a quantidade de jogos que está setado no atributo “total jogos”. Criando assim um array multidimensional, cada posição desse array vai conter outro array com um jogo, usar o método criado no passo 4 para criar cada jogo. Salvar esses jogos no atributo “jogos”

6 - Criar um método publico para fazer o sorteio de 6 dezenas aleatórias entre 1 e 60 , atentando que os números nunca se repitam e que estejam na ordem crescente. Atribuindo o resultado no atributo “resultado”

7 - criar um método que confere todos os jogos e retorna uma tabela HMTL contento os jogos e quantas dezenas foram acertadas em cada jogo.

------------------

## O que foi feito:

* Criada a classe Jogo com os métodos necessários para realizar as operações solicitadas
* Criado o arquivo index.php para instanciar a classe com os parâmetros solicitados e exibir na tela o resultado dos métodos contidos na classe criada.
* Não foi validada a questão do atributo quantidadeDezenas aceitar somente números de 6 a 10.
