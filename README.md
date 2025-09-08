# Aventura no Campus

**Autores:** Vitor Cardoso, Vinicius Zucolin, Maysa, Eduardo, Nathália  
**Instituição:** SENAI 2025 – Turma 1  

## Descrição

Aventura no Campus é um **jogo interativo em navegador** que combina narrativa, desafios, perguntas e pontuação.  
O jogador avança através de caixas de diálogo, respondendo perguntas ou resolvendo desafios matemáticos e lógicos, desbloqueando novas fases e acumulando pontos.  

O projeto utiliza **HTML, CSS, PHP e JavaScript**, além de pastas de **imagens (`img`)** e **sons (`sound`)** para enriquecer a experiência.

---

## Estrutura de Pastas

/projeto
│── index.html # Tela inicial
│── dtutorial.html # Tutorial do jogo
│── dialogoclaudio.php # Primeira caixa de diálogo
│── desafio1.php # Primeiro desafio
│── desafio2.php # Segundo desafio
│── desafio3.php # Terceiro desafio
│── desafio4.php # Quarto desafio
│── desafio5.php # Quinto desafio
│── pontuacao.php # Página de pontuação final
│── verificar.php # Validação do desafio 1
│── verificar2.php # Validação do desafio 2
│── verificar3.php # Validação do desafio 3
│── verificar4.php # Validação do desafio 4
│── verificar5.php # Validação do desafio 5
│── responsivo.css # Estilos globais e por página
│── img/ # Todas as imagens do jogo
│── sound/ # Todas as músicas e efeitos sonoros

markdown
Copiar código

---

## Funcionalidades

- **Tela inicial** com botões para iniciar o jogo ou acessar o tutorial.
- **Caixas de diálogo animadas** com avatares dos personagens.
- **Cinco desafios interativos**:
  - Desafio 1 até Desafio 5, cada um com perguntas ou exercícios únicos.
  - Respostas validadas via PHP com **sessões** e códigos de desbloqueio.
- **Pontuação acumulativa** apresentada ao final do jogo.
- **Responsividade** para dispositivos móveis e tablets.
- **Imagens e sons** para melhorar a experiência do usuário.
- **Efeitos visuais** como hover nos botões, fade-in nas mensagens e animações de confetes.

---

## Tecnologias Utilizadas

- **HTML5**
- **CSS3** (estilos globais e específicos por página)
- **PHP** (validação de respostas e sessões)
- **JavaScript** (interatividade, animações e requisições AJAX)
- **Imagens e sons** (pastas `img` e `sound`)

---

## Como Executar

1. Clonar o repositório para o servidor local (ex.: XAMPP, WAMP ou MAMP):
   ```bash
   git clone <URL_DO_REPOSITORIO>
Colocar o projeto na pasta htdocs ou equivalente.

Abrir index.html no navegador.

Seguir as instruções na tela para avançar pelos diálogos e desafios.

Estrutura de Desenvolvimento
index.html: Tela inicial com botões de iniciar e tutorial.

dtutorial.html: Tutorial explicando como jogar.

dialogoclaudio.php: Primeira caixa de diálogo com narrativa inicial.

desafio1.php → desafio5.php: Páginas de desafios interativos.

verificar.php → verificar5.php: Validação das respostas de cada desafio.

pontuacao.php: Página final mostrando pontuação acumulada.

responsivo.css: Estilos globais e específicos para cada página.

img/: Contém todas as imagens usadas no jogo.

sound/: Contém todas as músicas e efeitos sonoros do jogo.

Observações
Cada desafio gera um código único para desbloquear o próximo nível.

A pontuação total é mantida usando variáveis de sessão PHP.

O projeto é extensível: é possível adicionar novos desafios ou personagens alterando HTML, CSS e PHP.

