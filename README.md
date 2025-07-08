# curso-logica-php
# 🎬 Screen Match - Projeto em PHP

Este projeto simula um sistema de gerenciamento de filmes e séries, com organização de código em PHP utilizando boas práticas como separação por responsabilidade, funções auxiliares, e estrutura de pastas.

---

## 🗂️ Estrutura do Projeto
screen-match/
├── public/
│   ├── index.html
│   ├── filme.json
│   ├── exporta-arquivo.php
│   └── sucesso.php
├── src/
│   ├── Calculos/
│   │   ├── CalculadoraDeMaratona.php
│   │   └── ConversorNotaEstrela.php
│   ├── Modelo/
│   │   ├── Avaliavel.php
│   │   ├── ComAvaliacao.php
│   │   ├── Episodio.php
│   │   ├── Filme.php
│   │   ├── Genero.php
│   │   ├── Serie.php
│   │   └── Titulo.php
│   └── funcoes.php
├── autoload.php
├── erro.php
├── index.php
├── importar.php
├── antigo.php
└── filme.json
---

## O que foi praticado

- Programação Orientada a Objetos em PHP
- Organização em camadas (Modelo / Funções / Cálculos)
- Manipulação de arquivos JSON
- Criação de classes e interfaces
- Separação entre parte pública e lógica do sistema
- Autoload manual
- Reaproveitamento de código com funções

---

## Como executar

1. Clonar este repositório:
```bash
git clone https://github.com/mborges130/curso-logica-php.git
