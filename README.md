# Sistema de Autenticação Simples em PHP

## Autor

**Thiago Emanuel Correia Heckler**  
Curso: Ciência da Computação  
Campus: UNOESC SMO

## Objetivo

Desenvolver uma aplicação web utilizando apenas PHP puro, estruturada com orientação a objetos (POO), que permita o registro e autenticação de usuários com persistência de sessão e cookies, utilizando boas práticas de programação e organização de código.

## Contexto do Projeto

Você foi contratado para construir a primeira versão de um sistema de autenticação simples de usuários. Esse sistema deverá permitir:

- **Cadastro de usuários**: Nome, e-mail e senha.
- **Login**: Validação de e-mail e senha.
- **Exibição de uma área restrita**: Saudação personalizada ao usuário autenticado.
- **Armazenamento do e-mail em cookie**: Caso o usuário opte por isso.
- **Logout**: Destruição da sessão e remoção dos cookies.

## Estrutura do Projeto

O projeto está organizado da seguinte forma:

### Descrição dos Arquivos

- **`cadastro.php`**: Página de cadastro de novos usuários.
- **`login.php`**: Página de login para autenticação.
- **`dashboard.php`**: Área restrita exibida após o login bem-sucedido.
- **`erro.php`**: Página exibida em caso de erro no login.
- **`logout.php`**: Script para logout e destruição da sessão.
- **`processa_cadastro.php`**: Processa os dados do formulário de cadastro.
- **`processa_login.php`**: Processa os dados do formulário de login.
- **`style.css`**: Arquivo de estilos para a interface do sistema.
- **`classes/`**: Contém as classes PHP utilizadas no projeto:
  - **`Usuario.php`**: Representa um usuário do sistema.
  - **`Sessao.php`**: Gerencia as sessões do sistema.
  - **`Autenticador.php`**: Gerencia o registro e autenticação de usuários.

## Funcionalidades

1. **Cadastro de Usuários**  
   Permite que novos usuários se registrem fornecendo nome, e-mail e senha. As informações são armazenadas em cookies.

2. **Login**  
   Valida as credenciais do usuário (e-mail e senha) e inicia uma sessão para o usuário autenticado.

3. **Área Restrita**  
   Exibe uma saudação personalizada ao usuário autenticado, com base nas informações armazenadas na sessão ou nos cookies.

4. **Logout**  
   Destrói a sessão e remove os cookies, redirecionando o usuário para a página de login.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação utilizada para o backend.
- **HTML/CSS**: Para a estrutura e estilo das páginas.
- **Cookies e Sessões**: Para persistência de dados do usuário.

## Como Executar

1. Clone este repositório para o diretório raiz do seu servidor local (ex.: `htdocs` no XAMPP).
2. Certifique-se de que o servidor Apache está ativo.
3. Acesse o sistema pelo navegador em: `http://localhost/prog3-a1-poo-ThiagoHeckler/`.

## Observações

Este projeto foi desenvolvido como parte de uma atividade acadêmica para a disciplina de Programação Orientada a Objetos (POO).
