# Desafio Toolzz

## Descrição

Este projeto foi desenvolvido com o framework Laravel e tem como objetivo ser avaliado como parte de um desafio de código, proposto pela empresa Toolzz para a vaga de desenvolvedor Fullstack.

## Requisitos

- PHP >= 7.4
- Composer
- MySQL
- Node.js com NPM/Yarn

## Instalação

### Passo 1: Clonar o Repositório

```bash
git clone https://github.com/JordanDeodato/desafio-toolzz-backend.git
cd desafio-toolzz-backend
```

### Passo 2: Instalar Dependências PHP

```bash
composer install
```

### Passo 3: Configurar o Ambiente

```bash
cp .env.example .env
```

### Passo 4: Gerar a Chave da Aplicação

```bash
php artisan key:generate
```

### Passo 6: Criação de um Banco de Dados

- Acesse o seu sistema de gerenciamento de banco de dados (MySQL, PHPMyadmin, Dbeaver...) e crie um novo banco com o nome "desafio-login". Copie esse nome e configure o .env.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=desafio-login
DB_USERNAME=root
DB_PASSWORD=root
```

### Passo 6: Migrar Banco de Dados

```bash
php artisan migrate
```

### Passo 7: Iniciar o projeto

- Se você usa o xampp ou qualquer outro servidor que funcione com o PHP, inicie o servidor e rode o seguinte comando:

```bash
php artisan serve
```

### Pronto: Seu projeto está funcionando.
