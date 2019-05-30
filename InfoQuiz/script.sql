-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2019 às 00:24
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoquiz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL,
  `disciplina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `disciplina`) VALUES
(1, 'Algoritmo'),
(2, 'Conceitos básicos de programação'),
(3, 'Estrutura de Dados'),
(4, 'Engenharia de Software'),
(5, 'Programação Orientada a Objetos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE `questao` (
  `id` int(11) NOT NULL,
  `pergunta` text,
  `alternativa_a` varchar(128) DEFAULT NULL,
  `alternativa_b` varchar(128) DEFAULT NULL,
  `alternativa_c` varchar(128) DEFAULT NULL,
  `alternativa_d` varchar(128) DEFAULT NULL,
  `alternativa_correta` char(1) DEFAULT NULL,
  `disciplina` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questao`
--

INSERT INTO `questao` (`id`, `pergunta`, `alternativa_a`, `alternativa_b`, `alternativa_c`, `alternativa_d`, `alternativa_correta`, `disciplina`) VALUES
(2, 'Assinale a opção que apresenta o algoritmo de ordenaÃ§Ã£o com o pior desempenho, considerando-se um vetor de 100 elementos, com valores inteiros ordenados em ordem inversa ao do algoritmo de ordenaÃ§Ã£o.', 'shell sort', 'quicksort', 'heapsort', 'bubble sort', 'd', 'Algoritmo'),
(3, 'Considerando A = 10, B = 7 e C = 6, assinale a opÃ§Ã£o correta relacionada Ã  lÃ³gica de programaÃ§Ã£o.', '((B * 4) >= (A + A * 2) AND (5 + 5) >= (A))', '(A + 3) > (B + C)', '((B + A) > (C + C) AND (A ! C) < (B ! A))', '((A + C) < (B * 2) OR (C + B * 3) < (A * 3))', 'd', 'Algoritmo'),
(4, 'Assinale a alternativa que apresenta o melhor algoritmo de ordenaÃ§Ã£o para um arquivo â€œquaseâ€ ordenado.', 'Algoritmo de ordenaÃ§Ã£o por inserÃ§Ã£o.', 'Algoritmo de ordenaÃ§Ã£o por seleÃ§Ã£o.', 'Algoritmo de ordenaÃ§Ã£o pelo mÃ©todo da bolha.', 'Shellsort.', 'a', 'Algoritmo'),
(5, 'Na resoluÃ§Ã£o de problemas relacionados com a construÃ§Ã£o de algoritmos, sÃ£o usadas diversas estratÃ©gias. Uma delas consiste em dividir o problema em problemas menores atÃ© que cada parte seja pequena o bastante para que a soluÃ§Ã£o seja encontrada. Tal estratÃ©gia denomina-se:', 'ComutÃ§Ã£o', 'DecomposiÃ§Ã£o', 'DiversificaÃ§Ã£o', 'QualificaÃ§Ã£o', 'b', 'Algoritmo'),
(6, 'Considere: zero Ã© um nÃºmero natural. O sucessor de um nÃºmero natural Ã© um nÃºmero natural. Assim, em termos de algoritmo, o enunciado trata da possibilidade de aplicaÃ§Ã£o de uma tÃ©cnica denominada:', 'MatriciaÃ§Ã£o', 'IntegraÃ§Ã£o', 'AgregaÃ§Ã£o', 'RecursÃ£o', 'd', 'Algoritmo'),
(7, 'As estratÃ©gias de divisÃ£o e de conquista sÃ£o utilizadas pelos algoritmos de ordenaÃ§Ã£o:', 'Selection sort e Insertion sort.', 'Selection sort e Bubble sort.', 'Quick sort e Merge sort', 'Bubble sort e Bucket sort.', 'c', 'Algoritmo'),
(9, 'Objeto que se constistui parcialmente ou Ã© definido em termos de si prÃ³prio. Nesse contexto, um tipo especial de procedimento (algoritmo) serÃ¡ utilizado, algumas vezes, para a soluÃ§Ã£o de alguns problemas. Esse procedimento Ã© denominado:', 'RepetiÃ§Ã£o', 'InterligaÃ§Ã£o', 'Condicionalidade', 'RE', 'd', 'Algoritmo'),
(10, 'Relacionado Ã  programaÃ§Ã£o de computadores, um algoritmo, seja qual for a sua complexidade e a linguagem de programaÃ§Ã£o na qual serÃ¡ codificado, pode ser descrito por meio da:', 'Reografia', 'Criptografia', 'Linguagem de marcaÃ§Ã£o', 'Pseudolinguagem', 'd', 'Algoritmo'),
(11, 'Com respeito aos algoritmos de escalonamento de CPU, uma classe importante dos mÃ©todos de avaliaÃ§Ã£o Ã© a avaliaÃ§Ã£o analÃ­tica. O tipo de avaliaÃ§Ã£o que, a partir de uma carga de trabalho especÃ­fica e predeterminada, define o desempenho de cada algoritmo para essa carga Ã© a:', 'avaliaÃ§Ã£o funcional.', 'avaliaÃ§Ã£o de enfileiramento.', 'modelagem determinÃ­stica.', 'modelagem funcional.', 'c', 'Algoritmo'),
(12, 'FormalizaÃ§Ã£o de algoritmo proposto em 1936, universalmente conhecido e aceito. Trata-se de um mecanismo simples, que formaliza a ideia de uma pessoa que realiza cÃ¡lculos, denominado:', 'Recursividade de Bird.', 'MÃ¡quina de ReduÃ§Ã£o.', 'MÃ¡quina de Turing.', 'Sistema de Post.', 'c', 'Algoritmo'),
(13, 'O Ãºltimo dado armazenado Ã© o primeiro a ser recuperado caracteriza a estrutura de dados do tipo:', 'Boolean.', 'pilha.', 'String.', 'Fila.', 'b', 'Algoritmo'),
(14, 'SÃ£o algoritmos ou mÃ©todos de busca em cadeias:', 'Boyer-Moore e Knuth-Morris-Pratt.', 'linear e binÃ¡ria.', 'em tabelas e Knuth-Morris-Pratt.', 'binÃ¡ria e Boyer-Moore.', 'a', 'Algoritmo'),
(15, 'Ã‰ a descriÃ§Ã£o de um padrÃ£o de comportamento, expressado em termos de um repertÃ³rio bem definido e finito de aÃ§Ãµes &quot; primitivas&quot;, das quais damos por certo que elas podem ser executadas. A descriÃ§Ã£o refere-se a:', 'Sequenciamento.', 'Algoritmo.', 'Compilador.', 'ModularizaÃ§Ã£o.', 'b', 'Algoritmo'),
(16, 'O tipo de algoritmo cuja legibilidade depende muito de sua forma, incluindo aspectos de sua disposiÃ§Ã£o em parÃ¡grafos (recuos), Ã© conhecido como:', 'grÃ¡fico de estruturas.', 'diagrama hierÃ¡rquico de fluxo.', 'Ã¡rvore de decisÃ£o.', 'Portugol.', 'd', 'Algoritmo'),
(17, 'Uma estrutura de dados array pode ser do tipo:', 'lista, vetor ou Ã¡rvore.', 'lista, vetor ou matriz.', 'Ã¡rvore, grafo ou matriz.', 'Ã¡rvore, vetor ou matriz.', 'b', 'Algoritmo'),
(18, 'Sobre os algoritmos de busca pode-se armar que o mÃ©todo:', 'sequencial necessita que os dados estejam ordenados para realizaÃ§Ã£o da pesquisa.', 'linear Ã© adequado para ordenar grande quantidade de dados.', 'binÃ¡rio Ã© o mais adequado para pesquisar grande quantidade de dados.', 'seleÃ§Ã£o direta Ã© adequado para ordenar pequena quantidade de dados.', 'c', 'Algoritmo'),
(19, 'O produto da aÃ§Ã£o de algoritmos que fazem o mapeamento de uma sequÃªncia de bits de tamanho arbitrÃ¡rio para uma sequÃªncia de bits de tamanho fixo menor, com resistÃªncia Ã  colisÃ£o e cujo processo reverso tambÃ©m nÃ£o seja realizÃ¡vel, denomina-se:', 'cadeia de certificaÃ§Ã£o.', 'cifra de bloco.', 'resultado hash.', 'mensagem de nÃ£o repÃºdio.', 'c', 'Algoritmo'),
(20, 'SÃ£o, respectivamente, um mÃ©todo de busca e um mÃ©todo de ordenaÃ§Ã£o:', 'linear e por seleÃ§Ã£o direta.', 'por permutaÃ§Ã£o e linear.', 'por seleÃ§Ã£o direta e por permutaÃ§Ã£o.', 'por permutaÃ§Ã£o e binÃ¡ria.', 'a', 'Algoritmo'),
(21, 'A necessidade de rearranjo de um certo conjunto de elementos, de acordo com um critÃ©rio especÃ­fico, indica:', 'a possibilidade de uso de qualquer algoritmo de ordenaÃ§Ã£o.', 'o uso estrito de algoritmo de ordenaÃ§Ã£o por inserÃ§Ã£o direta.', 'o uso estrito de algoritmo de ordenaÃ§Ã£o por seleÃ§Ã£o direta.', 'o uso estrito de algoritmo de ordenaÃ§Ã£o por permutaÃ§Ã£o.', 'a', 'Algoritmo'),
(22, 'Dentre os mÃ©todos para construÃ§Ã£o de algoritmos, o Cartesiano Ã© aquele que segue o princÃ­pio de:', 'dividir para conquistar.', 'primeiro que entra, primeiro que sai.', 'planejamento reverso.', 'pseudo-linguagem.', 'a', 'Algoritmo'),
(23, 'A estrutura de dados formada por conjuntos de pontos (nÃ³s ou vÃ©rtices) em um conjunto de linhas (arestas e arcos) que conectam vÃ¡rios pontos Ã© denominada:', 'lista encadeada.', 'fila circular.', 'grafo.', 'Ã¡rvore.', 'c', 'Estrutura de dados'),
(24, 'A estrutura de dados que consiste no armazenamento de cada elemento em um endereÃ§o calculado a partir da aplicaÃ§Ã£o de uma funÃ§Ã£o sobre a chave de busca denomina-se:', 'lista.', 'tabela hashing.', 'deque.', 'fila.', 'b', 'Estrutura de dados'),
(25, 'Acerca de estruturas de dados, assinale a opÃ§Ã£o correta.', 'Uma tabela hash pode ser definida como um conjunto de nÃ³s â€” nodos.', 'Registros referem-se a uma estrutura de dados que agrupa dados de tipos distintos, ou do mesmo tipo, e podem ser compostos por v', 'No que se refere Ã s caracterÃ­sticas das estruturas de dados, vetores sÃ£o estruturas estÃ¡ticas e matrizes sÃ£o estruturas din', 'Vetores sÃ£o estruturas de dados que agrupam dados de tipos distintos, ou do mesmo tipo, e podem ser compostos por vÃ¡rios campo', 'b', 'Estrutura de dados'),
(26, 'Um programa de computador contendo uma sucessÃ£o de instruÃ§Ãµes sequenciais Ã© um exemplo da estrutura de dados em:', 'pilha.', 'fila.', 'Ã¡rvore.', 'vetores.', 'b', 'Estrutura de dados'),
(27, 'Acerca de estruturas de informaÃ§Ã£o, assinale a opÃ§Ã£o correta.', 'Em uma Ã¡rvore de expressÃ£o, os nodos terminais armazenam operadores aritmÃ©ticos e os nodos nÃ£o- terminais armazenam valores.', 'Uma splay tree Ã© uma estrutura de pesquisa balanceada que usa regras explÃ­citas para forÃ§ar seu balanceamento. A operaÃ§Ã£o d', 'Em Ã¡rvores parcialmente ordenadas, as chaves dos nÃ³s de nÃ­vel N+1 sÃ£o necessariamente maiores que as chaves de nÃ­vel N.', 'Um nÃ³ com grau maior que zero indica que o nÃ³ possui, pelo menos, um filho.', 'd', 'Estrutura de dados'),
(28, 'No que se refere a estruturas de dados Ã© INCORRETO armar:', 'Numa fila dupla, os elementos podem ser inseridos e removidos de qualquer um dos extremos da fila.', 'Em qualquer situaÃ§Ã£o Ã© possÃ­vel usar uma Ãºnica fila dupla para representar duas filas simples.', 'A implementaÃ§Ã£o de uma fila dupla normalmente Ã© mais eficiente com uma lista duplamente encadeada que com uma encadeada simpl', 'Pela definiÃ§Ã£o de fila, se os elementos sÃ£o inseridos por um extremo da lista linear, eles sÃ³ podem ser removidos pelo outro', 'b', 'Estrutura de dados'),
(29, 'Ã‰ um tipo de estrutura de dados em que a funÃ§Ã£o de dispersÃ£o Ã© a responsÃ¡vel por gerar um Ã­ndice a partir de determinada chave; por causa das colisÃµes, muitas tabelas de dispersÃ£o sÃ£o aliadas com alguma outra estrutura de dados:', 'vetores.', 'matrizes.', 'listas encadeadas.', 'tabela hash.', 'd', 'Estrutura de dados'),
(30, 'Uma estrutura de dados onde cada nÃ³ mantÃ©m uma informaÃ§Ã£o adicional, chamada fator de balanceamento, que indica a diferenÃ§a de altura entre as subÃ¡rvores esquerda e direita, Ã© conhecida por Ã¡rvore:', 'hiberbÃ³lica.', 'de busca binÃ¡ria.', 'ordenada.', 'AVL.', 'd', 'Estrutura de dados'),
(31, 'Quando as inserÃ§Ãµes e as remoÃ§Ãµes ocorrem sempre no mesmo lado da lista, trata-se de uma estrutura de dados denominada:', 'Fila.', 'Pilha.', 'Vetor.', 'Lista encadeada.', 'b', 'Estrutura de dados'),
(32, 'Uma fila duplamente terminada, isto Ã©, uma estrutura linear que permite inserir e remover de ambos os extremos Ã© chamada:', 'Ãrvore.', 'Shift-and.', 'AutÃ´mato.', 'Deque', 'd', 'Estrutura de dados'),
(33, 'Ã‰ uma estrutura de dados dividida em linhas e colunas. Desta forma, pode-se armazenar diversos valores dentro dela. Para obter um valor Ã© necessÃ¡rio identificÃ¡-lo por meio do nÃºmero da linha e da coluna onde estÃ¡ armazenado. Trata-se de:', 'Ã¡rvore.', 'matriz.', 'pilha.', 'fita.', 'b', 'Estrutura de dados'),
(34, 'No contexto de estrutura de dados, uma pilha Ã©:', 'uma lista do tipo LILO.', 'uma lista do tipo FIFO.', 'um tipo de lista linear em que as operaÃ§Ãµes de inserÃ§Ã£o e remoÃ§Ã£o sÃ£o realizadas na extremidade denominada topo.', 'um tipo de lista linear em que as operaÃ§Ãµes de inserÃ§Ã£o e remoÃ§Ã£o sÃ£o realizadas aleatoriamente.', 'c', 'Estrutura de dados'),
(35, 'Considerando as definiÃ§Ãµes de estruturas de dados e a declaraÃ§Ã£o tipo nÃ³ :: reg (dado: inteiro; prÃ³ximo: ref nÃ³), na qual reg Ã© um registro contendo os campos: dado, que guarda valores inteiros, e prÃ³ximo, que guarda endereÃ§o de outro nÃ³, assinale a opÃ§Ã£o correta.', 'O tipo nÃ³ Ã© inadequado para implementar estruturas de dados do tipo pilha.', 'As listas, pilhas, filas e Ã¡rvores sÃ£o estruturas de dados que tÃªm como principal caracterÃ­stica a sequencialidade dos seus ', 'Uma lista duplamente encadeada Ã© uma lista em que o seu Ãºltimo elemento referÃªncia o primeiro.', 'O algoritmo para inclusÃ£o de elementos em uma pilha Ã© usado sem nenhuma alteraÃ§Ã£o para incluir elementos em uma lista.', 'd', 'Estrutura de dados'),
(36, 'A estrutura de dados linear que obedece o seguinte critÃ©rio: o Ãºltimo elemento inserido serÃ¡ o primeiro elemento a ser retirado (last in rst out ? LIFO) Ã©:', 'pilha.', 'fila.', 'Ã¡rvore binÃ¡ria.', 'Ã¡rvore AVL.', 'a', 'Estrutura de dados'),
(37, 'Em relaÃ§Ã£o Ã s estruturas de dados, Ã© correto armar:', 'LIFO refere-se Ã  estrutura de dados do tipo pilha, que nada mais Ã© do que uma lista linear, sem disciplina de acesso, onde o p', 'Guardar endereÃ§o de memÃ³ria em &quot;nÃ³s&quot;, normalmente identificados por previous ou next, Ã© uma caracterÃ­stica presen', 'Nos sistemas operacionais, a execuÃ§Ã£o dos processos concorrentes ocorre segundo os princÃ­pios da estrutura FILO.', 'Um grafo com um Ãºnico vÃ©rtice e sem arestas Ã© conhecido como dÃ­grafo.', 'b', 'Estrutura de dados'),
(38, 'A estrutura de dados composta por nÃ³s que apontam para o prÃ³ximo elemento da lista, com exceÃ§Ã£o do Ãºltimo, que nÃ£o aponta para ninguÃ©m, Ã© denominada:', 'fila.', 'pilha.', 'Ã¡rvore.', 'lista.', 'd', 'Estrutura de dados'),
(39, 'No contexto das estruturas de dados avanÃ§adas como listas, pilhas, filas e Ã¡rvores Ã© comum se encontrar referÃªncia Ã  notaÃ§Ã£o polonesa reversa. Nesse sentido, a expressÃ£o X*(Y+W)/(X-Y) Ã© representada nessa notaÃ§Ã£o, como:', 'XYW+*XY/-', 'XYW+*XY-/', 'XYW+*/XY', 'XYW*+XY-/', 'b', 'Estrutura de dados'),
(40, 'A estrutura de dados do tipo pilha (stack) Ã© um tipo abstrato de dado baseada no princÃ­pio:', 'da indiferenÃ§a.', 'da localidade de referÃªncia.', 'First In First Out (FIFO).', 'Last In First Out (LIFO).', 'd', 'Estrutura de dados'),
(41, 'NÃƒO estÃ¡ associada a uma estrutura de dados especial, que associa chave de pesquisa a valor, a tabela:', 'de escrutÃ­nio.', 'de espalhamento.', 'hash.', 'relacional.', 'd', 'Estrutura de dados'),
(42, 'Uma estrutura de dados em lista duplamente encadeada permite na cadeia movimentos para:', 'frente, apenas.', 'frente e para trÃ¡s, apenas.', 'cima e para baixo ou para frente e para trÃ¡s.', 'cima e para baixo, apenas.', 'b', 'Estrutura de dados'),
(43, 'A escolha de um modelo Ã© fortemente dependente das caracterÃ­sticas do projeto. Os principais modelos de ciclo de vida podem ser agrupados em trÃªs categorias principais:', 'sequenciais, cascata e evolutivos.', 'sequenciais, incrementais e Ã¡geis.', 'sequenciais, incrementais e evolutivos.', 'sequenciais, Ã¡geis e cascata.', 'c', 'Engenharia de software'),
(44, 'Em relaÃ§Ã£o aos ciclos de vida do software, o desenvolvimento de sistemas por meio de ciclo de vida iterativos garante ao sistema:', 'atualizaÃ§Ã£o contÃ­nua.', 'legalidade.', 'seguranÃ§a.', 'legibilidade.', 'a', 'Engenharia de software'),
(45, 'Identifique dentre as opÃ§Ãµes o processo de engenharia de requisitos composto por quatro atividades de alto nÃ­vel:', 'PreparaÃ§Ã£o, especificaÃ§Ã£o e documentaÃ§Ã£o, afirmaÃ§Ã£o e implantaÃ§Ã£o;', 'IdentificaÃ§Ã£o, anÃ¡lise e negociaÃ§Ã£o, especificaÃ§Ã£o e documentaÃ§Ã£o, validaÃ§Ã£o;', 'Levantamento e preparaÃ§Ã£o, investigaÃ§Ã£o, viabilidade, confirmaÃ§Ã£o;', 'IdentificaÃ§Ã£o, planejamento, atribuiÃ§Ã£o, validaÃ§Ã£o.', 'b', 'Engenharia de software'),
(46, 'De acordo com â€œSommervilleâ€, sÃ£o atividades do processo de elicitaÃ§Ã£o de requisitos, pela ordem:', 'etnografia; casos de uso; anÃ¡lise; validaÃ§Ã£o; arquitetura.', 'entrevista; etnografia; documentaÃ§Ã£o; registro.', 'cenÃ¡rios; classificaÃ§Ã£o; organizaÃ§Ã£o; priorizaÃ§Ã£o; documentaÃ§Ã£o.', 'obtenÃ§Ã£o; classificaÃ§Ã£o e organizaÃ§Ã£o; priorizaÃ§Ã£o e negociaÃ§Ã£o; documentaÃ§Ã£o.', 'd', 'Engenharia de software'),
(47, 'A tÃ©cnica que busca o consenso entre um grupo de especialistas atravÃ©s de rodadas de respostas anÃ´nimas a questionÃ¡rios e que ajuda a reduzir a parcialidade nos dados e evita que alguÃ©m possa indevidamente influenciar o resultado Ã© chamada de:', 'Brainstorming.', 'Delphi.', 'mapa mental.', 'diagrama de afinidade.', 'b', 'Engenharia de software'),
(48, 'Considere um sistema cujos requisitos de interface sÃ£o definidos apenas quando o cliente realiza um test-drive na aplicaÃ§Ã£o e aprova essa interface. Assinale a alternativa que apresenta o modelo mais adequado para o desenvolvimento da interface desse sistema.', 'Ãgil.', 'Cascata.', 'Iterativo incremental.', 'PrototipaÃ§Ã£o.', 'd', 'Engenharia de software'),
(49, 'Requisitos nÃ£o-funcionais estÃ£o diretamente relacionados com a satisfaÃ§Ã£o dos usuÃ¡rios. Assinale a alternativa que nÃ£o indique um requisito nÃ£o-funcional:', 'O sistema de arquivos deve ser protegido, para acesso, apenas, de usuÃ¡rios autorizados.', 'O software deve ser implementado usando os conceitos de orientaÃ§Ã£o a objetos.', 'O tempo de desenvolvimento do software nÃ£o deve ultrapassar seis meses.', 'O software deve emitir relatÃ³rios de vendas a cada quinze dias.', 'd', 'Engenharia de software'),
(50, 'No Ã¢mbito da Engenharia de Requisitos, uma revisÃ£o tÃ©cnica formal Ã©:', 'um teste de desempenho.', 'uma tÃ©cnica de elicitaÃ§Ã£o.', 'um instrumento de rastreamento.', 'um mecanismo de validaÃ§Ã£o.', 'd', 'Engenharia de software'),
(51, 'No processo de engenharia de requisitos, Ã© uma tÃ©cnica de observaÃ§Ã£o que pode ser usada para compreender os requisitos sociais e organizacionais. Trata-se de:', 'Workshop.', 'Brainstorming.', 'AnÃ¡lise de ponto de vista.', 'Etnografia.', 'd', 'Engenharia de software'),
(52, 'O usuÃ¡rio final estÃ¡ efetuando alguns testes no software recÃ©m-entregue pela equipe de desenvolvimento. Um dos testes que ele estÃ¡ executando Ã© a consistÃªncia do CPF e do CEP. Esse tipo de teste Ã© conhecido como teste de:', 'caixa preta.', 'caixa branca.', 'unidade.', 'estresse.', 'a', 'Engenharia de software'),
(53, 'No diagrama de classes da UML uma superclasse, com uma ou mais subclasses, representa um relacionamento do tipo:', 'composiÃ§Ã£o.', 'agregaÃ§Ã£o.', 'generalizaÃ§Ã£o.', 'associaÃ§Ã£o.', 'c', 'Engenharia de software'),
(54, 'Dos diferentes modelos para o ciclo de vida de desenvolvimento de um software Ã© correto afirmar que:', 'o modelo em espiral Ã© o mais simples e o mais antigo.', 'o modelo em cascata Ã© o menos flexÃ­vel e mais simples.', 'a fase de especificaÃ§Ã£o de requisitos pode estar ausente do modelo.', 'a fase de implementaÃ§Ã£o Ã© sempre a Ãºltima do modelo.', 'b', 'Engenharia de software'),
(55, 'O modelo de ciclo de vida de processo de software cujos principais subprocessos sÃ£o executados em estrita sequÃªncia, o que permite demarcÃ¡-los como pontos de controle bem definidos, Ã© denominado:', 'Espiral.', 'Cascata.', 'Prototipagem evolutiva.', 'Dirigidos por prazo.', 'b', 'Engenharia de software'),
(56, 'O processo de engenharia de software denominado ciclo de vida clÃ¡ssico refere-se ao modelo:', 'em cascata.', 'incremental.', 'evolucionÃ¡rio.', 'prototipagem.', 'a', 'Engenharia de software'),
(57, 'A avaliaÃ§Ã£o do impacto de mudanÃ§a de um requisito, muitas vezes, faz com que seja necessÃ¡rio retornar Ã  sua fonte. Na validaÃ§Ã£o dos requisitos, a equipe deve estar atenta, portanto, Ã :', 'rastreabilidade.', 'adaptabilidade.', 'qualidade.', 'facilidade de compreensÃ£o.', 'a', 'Engenharia de software'),
(58, 'A tÃ©cnica utilizada na compreensÃ£o de requisitos sociais e organizacionais por observaÃ§Ã£o das rotinas dos envolvidos Ã© a:', 'prototipaÃ§Ã£o.', 'por cenÃ¡rio.', 'entrevista.', 'etnografia.', 'd', 'Engenharia de software'),
(59, 'NÃƒO Ã‰ uma tÃ©cnica tÃ­pica de teste de caixa preta:', 'teste de tabela de decisÃ£o.', 'teste de todos os pares.', 'teste de integraÃ§Ã£o.', 'teste de caso de uso.', 'c', 'Engenharia de software'),
(60, 'Tipo de teste que focaliza cada componente de um software de forma individual, garantindo que o componente funciona adequadamente:', 'Teste de IntegraÃ§Ã£o.', 'Teste de Unidade.', 'Teste de RegressÃ£o.', 'Teste de ValidaÃ§Ã£o.', 'b', 'Engenharia de software'),
(61, 'O ponto de partida para o planejamento do projeto Ã© o:', 'Plano de trabalho.', 'Descritivo das funcionalidades.', 'Escopo', 'Documento de autorizaÃ§Ã£o do projeto.', 'c', 'Engenharia de software'),
(62, 'O erro que ocorre quando tentamos armazenar mais bits do que uma capacidade estabelecida para uma variÃ¡vel Ã© conhecido como:', 'ExceÃ§Ã£o', 'Overflow', 'Warning', 'Bug', 'b', 'Conceitos Básicos de Programação'),
(63, 'Em uma linguagem de programaÃ§Ã£o, considere um tipo de dado inteiro que utiliza 2 bytes de memÃ³ria para seu armazenamento. Quantos valores Ãºnicos diferentes Ã© possÃ­vel colocar nesse espaÃ§o no decorrer da execuÃ§Ã£o de um programa?', '256.', '32768.', '65536.', '16777216.', 'c', 'Conceitos Básicos de Programação'),
(64, 'As etapas realizadas durante a programaÃ§Ã£o em uma linguagem de alto nÃ­vel, para se gerar um cÃ³digo executÃ¡vel, sÃ£o:', 'Programa fonte, compilaÃ§Ã£o, interpretaÃ§Ã£o, ligaÃ§Ã£o, cÃ³digo executÃ¡vel.', 'Programa fonte, compilaÃ§Ã£o, cÃ³digo-objeto, ligaÃ§Ã£o, cÃ³digo executÃ¡vel.', 'Programa fonte, interpretaÃ§Ã£o, cÃ³digo-objeto, ligaÃ§Ã£o, cÃ³digo executÃ¡vel.', 'Programa fonte, montagem, compilaÃ§Ã£o, cÃ³digo-objeto, cÃ³digo executÃ¡vel.', 'b', 'Conceitos Básicos de Programação'),
(65, 'Objeto que se constitui parcialmente ou Ã© definido em termos de si prÃ³prio. Nesse contexto, um tipo especial de procedimento (algoritmo) serÃ¡ utilizado, algumas vezes, para a soluÃ§Ã£o de alguns problemas. Esse procedimento Ã© denominado:', 'Recursividade.', 'Rotatividade.', 'RepetiÃ§Ã£o.', 'InterligaÃ§Ã£o.', 'a', 'Conceitos Básicos de Programação'),
(66, 'SÃ£o exemplos tÃ­picos de linguagem de computador interpretada:', 'SourceSafe, Swing e Xcode.', 'CCFinderX, Pearl e Xcode.', 'Python, SourceSafe e Javadoc.', 'Pearl, Python e Ruby.', 'd', 'Conceitos Básicos de Programação'),
(67, 'Permitem escrever trechos de cÃ³digo da linguagem usada na pÃ¡gina:', 'FunÃ§Ãµes.', 'Scriptlets.', 'LaÃ§os.', 'ComentÃ¡rios.', 'b', 'Conceitos Básicos de Programação'),
(68, 'A programaÃ§Ã£o de computadores, desde a sua criaÃ§Ã£o, evoluiu das linguagens em cÃ³digo binÃ¡rio atÃ© as atuais linguagens de alto nÃ­vel, orientadas a objetos. Assinale a alternativa que possui, nessa ordem, uma linguagem binÃ¡ria, uma linguagem estruturada e uma linguagem orientada a objetos.', 'Linguagem C, Cobol, Fortran.', 'Basic, Cobol, Linguagem C.', 'Pascal, Cobol, Fortran.', 'Assembly, Pascal, Java.', 'd', 'Conceitos Básicos de Programação'),
(71, 'Programar o computador significa &quot;dar ordens a ele,&quot; as quais sÃ£o executadas sequencialmente. Em tal paradigma, &quot;representar&quot; a soluÃ§Ã£o de um problema para ser resolvido pelo computador envolve escrever uma sÃ©rie de aÃ§Ãµes que, se executadas sequencialmente, levam Ã  soluÃ§Ã£o. Trata-se do paradigma:', 'ProgramaÃ§Ã£o em LÃ³gica.', 'Funcional.', 'Orientado a Objetos.', 'Procedural.', 'd', 'Conceitos Básicos de Programação'),
(72, 'AlÃ©m do diagrama de blocos hÃ¡ uma outra forma de notaÃ§Ã£o grÃ¡fica utilizada para representar algoritmos, que Ã© conhecida por vÃ¡rios nomes. Abaixo sÃ£o apresentados alguns destes nomes, a tÃ©cnica de algoritmizaÃ§Ã£o em que estÃ¡ baseada Ã¡ uma alternativa que NÃƒO se refere nem Ã  tÃ©cnica nem a um dos referidos nomes, assinale-a:', 'PortuguÃªs estruturado.', 'Pseudo-cÃ³digo.', 'Portugol.', 'DFD-Diagrama de Fluxo de Dados.', 'd', 'Conceitos Básicos de Programação'),
(73, 'Muitos programadores de computador costumam preparar um programa iniciando-o a partir de um diagrama de blocos. Para tal, pode-se utilizar as seguintes tÃ©cnicas de lÃ³gica, EXCETO:', 'Linear.', 'Estruturada.', 'Modular.', 'Diagrama de Carter.', 'd', 'Conceitos Básicos de Programação'),
(74, 'Em relaÃ§Ã£o Ã s linguagens compiladas, sabe-se que muitos erros sÃ£o eliminados durante o processo de compilaÃ§Ã£o. SÃ£o tipos de erros sintÃ¡ticos eliminados na compilaÃ§Ã£o os abaixo relacionados, EXCETO:', 'caracteres invÃ¡lidos;', 'nomes de variÃ¡veis invÃ¡lidas;', 'mÃ©todos invÃ¡lidos;', 'atribuiÃ§Ã£o de um valor alfanumÃ©rico para uma variÃ¡vel interna.', 'd', 'Conceitos Básicos de Programação'),
(71, 'Programar o computador significa &quot;dar ordens a ele,&quot; as quais sÃ£o executadas sequencialmente. Em tal paradigma, &quot;representar&quot; a soluÃ§Ã£o de um problema para ser resolvido pelo computador envolve escrever uma sÃ©rie de aÃ§Ãµes que, se executadas sequencialmente, levam Ã  soluÃ§Ã£o. Trata-se do paradigma:', 'ProgramaÃ§Ã£o em LÃ³gica.', 'Funcional.', 'Orientado a Objetos.', 'Procedural.', 'd', 'Conceitos Básicos de Programação'),
(72, 'AlÃ©m do diagrama de blocos hÃ¡ uma outra forma de notaÃ§Ã£o grÃ¡fica utilizada para representar algoritmos, que Ã© conhecida por vÃ¡rios nomes. Abaixo sÃ£o apresentados alguns destes nomes, a tÃ©cnica de algoritmizaÃ§Ã£o em que estÃ¡ baseada Ã¡ uma alternativa que NÃƒO se refere nem Ã  tÃ©cnica nem a um dos referidos nomes, assinale-a:', 'PortuguÃªs estruturado.', 'Pseudo-cÃ³digo.', 'Portugol.', 'DFD-Diagrama de Fluxo de Dados.', 'd', 'Conceitos Básicos de Programação'),
(73, 'Muitos programadores de computador costumam preparar um programa iniciando-o a partir de um diagrama de blocos. Para tal, pode-se utilizar as seguintes tÃ©cnicas de lÃ³gica, EXCETO:', 'Linear.', 'Estruturada.', 'Modular.', 'Diagrama de Carter.', 'd', 'Conceitos Básicos de Programação'),
(74, 'Em relaÃ§Ã£o Ã s linguagens compiladas, sabe-se que muitos erros sÃ£o eliminados durante o processo de compilaÃ§Ã£o. SÃ£o tipos de erros sintÃ¡ticos eliminados na compilaÃ§Ã£o os abaixo relacionados, EXCETO:', 'caracteres invÃ¡lidos;', 'nomes de variÃ¡veis invÃ¡lidas;', 'mÃ©todos invÃ¡lidos;', 'atribuiÃ§Ã£o de um valor alfanumÃ©rico para uma variÃ¡vel interna.', 'd', 'Conceitos Básicos de Programação'),
(75, 'O utilitÃ¡rio responsÃ¡vel por gerar, a partir de um ou mais mÃ³dulos-objeto, um Ãºnico programa executÃ¡vel Ã© conhecido como:', 'tradutor.', 'montador.', 'compilador.', 'linker.', 'd', 'Conceitos Básicos de Programação'),
(76, 'Quando num programa que utiliza linguagem orientada a objetos aparece um objeto que realiza aÃ§Ãµes diferentes, dependendo da operaÃ§Ã£o, ou seja, a mesma operaÃ§Ã£o pode atuar de modos diversos em classes diferentes, estÃ¡-se diante de um(a):', 'heranÃ§a mÃºltipla.', 'polimorfismo.', 'caso de uso de engenharia reversa.', 'atributo multivalorado.', 'b', 'Conceitos Básicos de Programação'),
(77, 'A recursividade na programaÃ§Ã£o de computadores envolve a definiÃ§Ã£o de uma funÃ§Ã£o que:', 'apresenta outra funÃ§Ã£o como resultado.', 'pode chamar a si mesma.', 'aponta para uma variÃ¡vel.', 'chama uma outra funÃ§Ã£o.', 'b', 'Conceitos Básicos de Programação'),
(78, 'Assinale a alternativa que apresenta duas formas de passagem de parÃ¢metros para uma rotina ou funÃ§Ã£o.', 'Por inferÃªncia e por valor.', 'Por memÃ³ria e por disco.', 'Por valor e por referÃªncia.', 'Por teste e por reforÃ§o.', 'c', 'Conceitos Básicos de Programação'),
(79, 'As palavras reservadas estÃ£o diretamente associadas ao conceito de:', 'variable.', 'alias.', 'identifier.', 'data type.', 'c', 'Conceitos Básicos de Programação'),
(80, 'Permitem escrever trechos de cÃ³digo da linguagem usada na pÃ¡gina:', 'FunÃ§Ãµes.', 'Scriptlets.', 'LaÃ§os.', 'ComentÃ¡rios.', 'b', 'Conceitos Básicos de Programação'),
(81, 'A programaÃ§Ã£o de computadores, desde a sua criaÃ§Ã£o, evoluiu das linguagens em cÃ³digo binÃ¡rio atÃ© as atuais linguagens de alto nÃ­vel, orientadas a objetos. Assinale a alternativa que possui, nessa ordem, uma linguagem binÃ¡ria, uma linguagem estruturada e uma linguagem orientada a objetos.', 'Linguagem C, Cobol, Fortran.', 'Basic, Cobol, Linguagem C.', 'Pascal, Cobol, Fortran.', 'Assembly, Pascal, Java.', 'd', 'Conceitos Básicos de Programação'),
(82, 'Assinale a alternativa correta a respeito das variÃ¡veis e constantes, utilizadas em diversas linguagens de programaÃ§Ã£o.', 'O nÃºmero de constantes deve ser menor ou igual ao nÃºmero de variÃ¡veis em um programa.', 'O nÃºmero de constantes deve ser menor ou igual ao nÃºmero de procedimentos em um programa.', 'O nÃºmero de constantes deve ser igual ao nÃºmero de variÃ¡veis em um programa.', 'O nÃºmero de constantes independe da quantidade de variÃ¡veis em um programa.', 'd', 'Conceitos Básicos de Programação'),
(83, 'As linguagens de programaÃ§Ã£o imperativas sÃ£o caracterizadas por trÃªs conceitos:', 'VariÃ¡veis, AtribuiÃ§Ãµes e LaÃ§os de IteraÃ§Ã£o.', 'FunÃ§Ãµes, AtribuiÃ§Ãµes e LaÃ§os de IteraÃ§Ã£o.', 'VariÃ¡veis, DefiniÃ§Ãµes e LaÃ§os de IteraÃ§Ã£o.', 'FunÃ§Ãµes, DefiniÃ§Ãµes e LaÃ§os de IteraÃ§Ã£o.', 'a', 'Conceitos Básicos de Programação'),
(84, 'Sobre programaÃ§Ã£o estruturada e programaÃ§Ã£o orientada a objetos, Ã© INCORRETO afirmar que:', 'A linguagem de programaÃ§Ã£o C++ Ã© um exemplo de linguagem orientada a objetos, que nÃ£o permite a utilizaÃ§Ã£o do paradigma es', 'No paradigma de programaÃ§Ã£o estruturado, qualquer problema pode ser dividido em problemas menores, chamados de funÃ§Ãµes.', 'A linguagem de programaÃ§Ã£o C Ã© um exemplo de linguagem de programaÃ§Ã£o estruturada, compilada e procedural.', 'O paradigma orientado a objetos entende o problema como um conjunto de objetos interagindo por meio de troca de mensagens.', 'a', 'Programação Orientada a Objetos'),
(85, 'Em POO (ProgramaÃ§Ã£o Orientada a Objetos), dizer que a classe A estende a classe B Ã© o mesmo que dizer que:', 'a classe B Ã© subclasse de A;', 'a classe A Ã© superclasse de B;', 'a classe A Ã© derivada de B;', 'a classe B Ã© derivada de A;', 'c', 'Programação Orientada a Objetos'),
(86, 'Em POO (programaÃ§Ã£o orientada a objetos), dizer que a classe A Ã© superclasse de B Ã© o mesmo que dizer que:', 'A Ã© derivada de B.', 'A estende B.', 'B Ã© derivada de A.', 'B implementa A.', 'c', 'Programação Orientada a Objetos'),
(87, 'Na programaÃ§Ã£o orientada a objetos, o conceito de polimorfismo indica que:', 'uma certa operaÃ§Ã£o de uma classe pode nem sempre ativar o mesmo mÃ©todo.', 'o cÃ³digo de cada operaÃ§Ã£o tem um limite mÃ¡ximo no nÃºmero de linhas de cÃ³digo.', 'o nome dos mÃ©todos deve ser composto por, no mÃ¡ximo, 8 caracteres.', 'o nome das classes deve ser composto por, no mÃ¡ximo, 20 caracteres.', 'a', 'Programação Orientada a Objetos'),
(88, 'Acerca da programaÃ§Ã£o Orientada a Objetos, OVERLOADING Ã© a habilidade de poder definir diversas propriedades, mÃ©todos ou procedimentos em uma classe com o mesmo nome, que tambÃ©m pode ser definida como:', 'PirÃ¢mide.', 'Pilha.', 'Morphing.', 'Sobrecarga.', 'd', 'Programação Orientada a Objetos'),
(89, 'Sobre a POO (ProgramaÃ§Ã£o Orientada a Objetos), assinale a alternativa INCORRETA.', 'Classe Pai, classe Base ou Superclasse Ã© a classe que foi herdada.', 'Classe Filha ou Sub-Classe Ã© a classe que herda da classe Pai.', 'Instancias - sÃ£o caracterÃ­sticas de um objeto.', 'MÃ©todos definem as habilidades dos objetos.', 'c', 'Programação Orientada a Objetos'),
(90, 'Em um programa em C# sÃ£o adicionados vÃ¡rios valores do tipo int em uma implementaÃ§Ã£o da classe Stack, vamos supor que vocÃª queira remover todos objetos da fila, qual mÃ©todo vocÃª deve usar ?', 'Stack.Pop', 'Stack.Push', 'Stack.Clear', 'Stack.Peek', 'c', 'Programação Orientada a Objetos'),
(91, 'Em programaÃ§Ã£o orientada a objetos, a possibilidade de haver funÃ§Ãµes de mesmo nome, com funcionalidades similares em classes sem nenhuma relaÃ§Ã£o entre elas, denomina-se:', 'encapsulamento.', 'objeto.', 'classe.', 'polimorfismo.', 'd', 'Programação Orientada a Objetos'),
(92, 'Sobre orientaÃ§Ã£o a objetos, Ã© correto armar:', 'Uma classe Ã© o projeto do objeto. Ela informa Ã  mÃ¡quina virtual como criar um objeto de um tipo especÃ­fico. Cada objeto cria', 'Um relacionamento de heranÃ§a significa que a superclasse herdarÃ¡ as variÃ¡veis de instÃ¢ncia e mÃ©todos da subclasse.', 'Uma interface Ã© uma classe 100% abstrata, ou seja, uma classe que nÃ£o pode ser instanciada.', 'Os objetos tÃªm seu estado definido pelos mÃ©todos e seu comportamento definido nas variÃ¡veis de instÃ¢ncia.', 'c', 'Programação Orientada a Objetos'),
(93, 'Dentro do paradigma de programaÃ§Ã£o orientada a objetos (POO), hÃ¡ um mecanismo utilizado para impedir o acesso direto ao estado de um objeto, restando apenas os mÃ©todos externos que podem alterar esses estados. Assinale a alternativa que apresenta o nome deste mecanismo.', 'Mensagem', 'HeranÃ§a', 'Polimorfismo', 'Encapsulamento', 'd', 'Programação Orientada a Objetos'),
(94, 'Na taxonomia utilizada para as formas de polimorfismo sÃ£o, respectivamente, dois tipos categorizados como universal e dois como Ad Hoc:', 'ParamÃ©trico e InclusÃ£o; Sobrecarga e CoerÃ§Ã£o.', 'ParamÃ©trico e CoerÃ§Ã£o; Sobrecarga e InclusÃ£o.', 'ParamÃ©trico e Sobrecarga; InclusÃ£o e CoerÃ§Ã£o.', 'Sobrecarga e InclusÃ£o; ParamÃ©trico e CoerÃ§Ã£o.', 'a', 'Programação Orientada a Objetos'),
(95, 'Na taxonomia utilizada para as formas de polimorfismo sÃ£o, respectivamente, dois tipos categorizados como universal e dois como Ad Hoc:', 'ParamÃ©trico e InclusÃ£o; Sobrecarga e CoerÃ§Ã£o.', 'ParamÃ©trico e CoerÃ§Ã£o; Sobrecarga e InclusÃ£o.', 'ParamÃ©trico e Sobrecarga; InclusÃ£o e CoerÃ§Ã£o.', 'Sobrecarga e InclusÃ£o; ParamÃ©trico e CoerÃ§Ã£o.', 'a', 'Programação Orientada a Objetos'),
(96, 'MÃ©todo especial destinado ao preparo de novos objetos durante sua instanciaÃ§Ã£o. Pode ser acionado por meio do operador new, recebendo parÃ¢metros como mÃ©todos comuns, o que permite caracterizar os objetos jÃ¡ na instanciaÃ§Ã£o. Trata-se de', 'operaÃ§Ã£o polimÃ³rfica.', 'construtor.', 'atributo.', 'heranÃ§a polimÃ³rfica.', 'b', 'Programação Orientada a Objetos'),
(97, 'Sobre a programaÃ§Ã£o orientada a objetos, Ã© incorreto armar que:', 'uma interface Ã© uma classe abstrata que nÃ£o pode ser instanciada.', 'as interfaces permitem explorar o polimorfismo.', 'uma classe abstrata significa que ela deve ser estendida; um mÃ©todo abstrato significa que ele deve ser sobreposto.', 'um mÃ©todo abstrato pode estar presente em uma classe nÃ£o abstrata, desde que nÃ£o tenha corpo.', 'd', 'Programação Orientada a Objetos'),
(98, 'Dentro do paradigma de programaÃ§Ã£o orientada a objetos (POO), hÃ¡ um mecanismo pelo qual uma classe pode estender outra classe, aproveitando seus mÃ©todos e atributos. Assinale a alternativa que apresenta o nome desse mecanismo.', 'heranÃ§a.', 'mensagem.', 'encapsulamento.', 'polimorfismo.', 'a', 'Programação Orientada a Objetos'),
(99, 'Classes que encapsulam os tipos primitivos como objetos, agregando funcionalidades de conversÃ£o, sÃ£o as chamadas, especificamente, classes:', 'mothers.', 'abstratas.', 'primitivas.', 'wrappers.', 'd', 'Programação Orientada a Objetos'),
(100, 'A descriÃ§Ã£o de um conjunto de entidades (reais ou abstratas) de um mesmo tipo e com as mesmas caracterÃ­sticas e comportamentos. Trata-se da definiÃ§Ã£o de:', 'String.', 'MÃ©todo.', 'Conjunto.', 'Classe.', 'd', 'Programação Orientada a Objetos'),
(101, 'Na programaÃ§Ã£o orientada a objetos existem quatro tipos de polimorfismos possÃ­veis de serem aplicados na estrutura de uma classe, a saber:', 'HierÃ¡rquico, Sobrecarga, Procedural e CoerÃ§Ã£o.', 'Incursivo, Exclusivo, Herdado e Implementado.', 'InclusÃ£o, ParamÃ©trico, Sobrecarga e CoerÃ§Ã£o.', 'Procedural, HierÃ¡rquico, ParamÃ©trico e Implementado.', 'c', 'Programação Orientada a Objetos'),
(102, '&quot;Ã‰ o mecanismo pelo qual uma classe pode estender outra classe, aproveitando seus comportamentos e variÃ¡veis possÃ­veis.&quot; Na programaÃ§Ã£o orientada a objetos esta armaÃ§Ã£o refere-se aos conceitos essenciais de:', 'heranÃ§a, mÃ©todos e atributos.', 'subclasse, instÃ¢ncia e associaÃ§Ã£o.', 'subclasse, encapsulamento e abstraÃ§Ã£o.', 'heranÃ§a, abstraÃ§Ã£o e associaÃ§Ã£o.', 'a', 'Programação Orientada a Objetos'),
(103, 'A especificaÃ§Ã£o de uma comunicaÃ§Ã£o entre objetos, que contÃ©m informaÃ§Ãµes relacionadas ao que se espera resultar dessa atividade, Ã©:', 'uma restriÃ§Ã£o.', 'uma mensagem.', 'uma operaÃ§Ã£o.', 'um processo oculto.', 'b', 'Programação Orientada a Objetos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
