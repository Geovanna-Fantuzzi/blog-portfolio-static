# :tada: Site Portfolio

Esse site foi desenvolvido para apresentar meu currículo e portfolio, possui um painel administrativo que auxilia no gerenciamento do site e nas postagens do blog.

---

## :computer: Tecnologias

- PHP 8.3
- Laravel 10
- MySQL
- Bootstrap
- JavaScript
- TinyMCE

---

## 🚀 Funcionalidades do Projeto

### 🌐 Área Pública
* **Página Inicial:** Vitrine principal com resumo do perfil e destaques.
* **Sobre Mim:** Biografia profissional com botão para download de currículo (PDF).
* **Portfólio:** Galeria interativa exibindo projetos desenvolvidos e detalhes técnicos.
* **Blog Integrado:** Espaço para publicação de artigos e estudos sobre Laravel.
* **Contato Direto:** Formulário funcional com envio automático de e-mail.

### 🔐 Painel Administrativo (Removido temporáriamente)
* **Autenticação Segura:** Tela de login protegida para o administrador.
* **Gestão de Conteúdo (CMS):** Telas de CRUD para criar, editar e excluir artigos do blog e projetos do portfólio.
* **Métricas Simples:** Visualização de mensagens recebidas pelo formulário.

---

## :pencil: Guia de Instalação

### 📌 Pré-requisitos
* PHP <= 8.3
* Composer >= 2.10
* MySQL >= 8.0 ou PostgreSQL
* Node.js & NPM (para compilação dos assets com Vite)

:bulb: Dica: Se quiser praticidade, o programa 'Laravel Herd' instala e gerencia tudo o que você precisa para o projeto.
<br/>
:link: Link para baixar o [Herd](https://herd.laravel.com/windows)

### :wrench: Instalação

```bash
git clone ...

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve
```

Lembre-se de verificar os requisitos, caso sua versão do php seja superior a versão 8.3, a instalação do composer não irá funcionar. Para resolver, altere a versão global de seu php para 8.3 antes de instalar o composer ou use um comando para forçar a instalação.

```bash
composer install --ignore-platform-reqs
```

---

## :camera_flash: Screenshots

### 🌐 Área Pública

* Página inicial

<img width="1915" height="906" alt="fafb42861483921afc3f441b64d404c1" src="https://github.com/user-attachments/assets/ef889498-d3f6-4ef5-8e54-d9805bd708b5" />

### 🔐 Painel Administrativo (Removido temporáriamente)

* Lista de categorias
<img width="1307" height="611" alt="65a91c38f029c" src="https://github.com/user-attachments/assets/b854c190-6f23-4313-b45e-4ee4450ad591" />

* Lista de Artigos

<img width="1297" height="905" alt="65a91bb09edfb" src="https://github.com/user-attachments/assets/db24e783-7fb3-4497-853f-ed8767bcf144" />
  
* Registro de post

<img width="1293" height="908" alt="65a91b5777dbf" src="https://github.com/user-attachments/assets/07a1a56f-4da3-4612-ab10-6932b190df1c" />
