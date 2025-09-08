# **Projeto: Aventura no Campus**



Autores: Vitor C, Vinicius Z, Maysa, Eduardo, Nathália

Instituição: SENAI 2025 – Turma 1



#### ***Descrição Geral***



“Aventura no Campus” é um jogo interativo em navegador que combina narrativa, perguntas e desafios matemáticos, com pontuação e efeitos visuais. O jogador avança através de caixas de diálogo, respondendo perguntas, desbloqueando novas fases e acumulando pontos.



O projeto utiliza HTML, CSS, PHP e JavaScript, além de pastas de imagens (img) e sons (sound) para enriquecer a experiência.



#### ***Estrutura de Pastas***



/projeto

│── index.html             # Tela inicial com botões para iniciar e tutorial

│── dialogoclaudio.php     # Primeira caixa de diálogo

│── desafio1.php           # Primeiro desafio

│── desafio2.php           # Segundo desafio

│── desafio3.php           # Terceiro desafio

│── desafio4.php           # Quarto desafio

│── desafio5.php           # Quinto desafio

│── pontuacao.php          # Página para mostrar pontuação final

│── verificar.php          # Validação do primeiro desafio

│── verificar2.php         # Validação do segundo desafio

│── responsivo.css         # Estilos globais e por página

│── dtutorial.html         # Tutorial do jogo

│── img/                   # Todas as imagens do jogo

│── sound/                 # Todas as músicas e efeitos sonoros



#### ***Páginas e Funcionalidades***



###### 1\. index.html



Tela inicial com fundo animado pixelado (ceu.png) e dois botões:



Iniciar Jogo: leva à primeira caixa de diálogo (dialogoclaudio.php).



Tutorial: leva ao tutorial (dtutorial.html).



Botões com efeito hover (zoom 1.2x).



Layout responsivo e centralizado.



###### 2\. dialogoclaudio.php



Apresenta caixas de diálogo de personagens (Renato e Cláudio).



Cada personagem tem seu avatar e estilo de mensagem:



.mensagem-renato → fundo azul com avatar à esquerda.



.mensagem-claudio → fundo roxo com avatar à direita.



Mensagens aparecem com animação de fade-in (opacity e transform).



Botões de resposta que acionam verificação via PHP (verificar.php ou verificar2.php).



Sessão PHP usada para armazenar pontuação parcial.



###### 3\. desafios (desafio1.php a desafio5.php)



Cada página é um desafio individual com perguntas ou exercícios.



Exemplos:



Desafio 1: pergunta simples de conhecimento geral.



Desafio 2: sequência lógica ou matemática.



Desafio 3: enigma ou problema lógico.



Desafio 4: exercício de raciocínio ou quiz.



Desafio 5: desafio final com maior complexidade.



Cada desafio envia a resposta via POST para seu respectivo verificarX.php.



Ao acertar, o jogador recebe código de desbloqueio único e pode avançar para o próximo desafio.



###### 4\. pontuacao.php



Mostra pontuação final do jogador com cartão animado (.card).



Fundo animado em gradiente colorido.



Adiciona confetes animados via JavaScript para celebrar o sucesso.



Botão para voltar ao jogo (index.html).



###### 5\. verificar.php / verificar2.php



Recebem respostas via POST.



Comparam com resposta correta.



Se correta:



Geram código único (uniqid()) e armazenam em sessão ($\_SESSION\['codigo\_acerto'] ou $\_SESSION\['codigo\_acerto2']).



Retornam JSON {sucesso: true, codigo: chave}.



Se incorreta: retornam {sucesso: false}.



💡 Permite controle de progresso do jogador e desbloqueio de próximas mensagens ou desafios.



###### 6\. responsivo.css



Regras globais:



Fonte: Arial, sem margens/padding padrões.



Imagens e vídeos responsivos (max-width: 100%).



Containers centralizados (.container) com limite de 1200px.



Media queries para telas menores (<768px).



Customização por página (body.pagina-final) para diferenciar o fundo final.



#### ***Imagens e Sons***



img/: contém todos os avatares, botões e fundos.



sound/: contém músicas e efeitos sonoros que tocam durante o jogo ou ao avançar diálogos.



Observação: as imagens usam image-rendering: pixelated para efeito retrô pixel art.



Funcionalidades Extras



Pontuação:



Pontos acumulados em sessão PHP.



Exibidos no final com animação e confetes.



Caixas de diálogo interativas:



Mensagens de personagens aparecem sequencialmente.



Avatares personalizados e cores distintas por personagem.



Validação dinâmica de respostas:



Respostas corretas desbloqueiam próximas etapas do jogo.



Feedback instantâneo via JSON e JavaScript.



Estilo retrô pixelado:



Botões e fundos com pixel art e efeitos de transição.



Hover aumenta tamanho de botões e dá sensação de interação.



#### ***Tecnologias Utilizadas***



HTML5 \& CSS3 – estrutura e estilização responsiva.



PHP – sessões, pontuação e verificação de respostas.



JavaScript – animações de confetes, efeitos de fade-in e interatividade.



Imagens e sons – para reforçar imersão no jogo.

