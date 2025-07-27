# 📋 Sistema de Administração de Clientes

Este projeto é um sistema simples, porém funcional e responsivo, desenvolvido em PHP com o framework Laravel, que permite a gestão básica de clientes. Com ele, você pode **cadastrar, editar, excluir e visualizar informações importantes dos seus clientes** tudo através de uma interface amigável, leve e que funciona bem em dispositivos móveis e desktops.

Ideal para quem precisa de um sistema prático para controle de clientes, seja para uso pessoal, pequenas empresas ou até como base para projetos maiores.

---

## 🧑‍💻 O que esse sistema faz?

Este sistema oferece as principais funcionalidades para a administração de clientes, focando na usabilidade e na simplicidade, para que o usuário possa realizar todas as operações comuns com facilidade:

- ✅ Cadastro de clientes (nome, CPF, nascimento, renda)
- ✅ Edição e exclusão de clientes
- ✅ Pesquisa por nome
- ✅ Visualização de dados em formato de **relatórios com cartões**
- ✅ Interface simples e bonita, compatível com celular e computador

---

## 🖥️ Como usar este sistema no seu computador?

### 1. 📦 Requisitos

Antes de tudo, certifique-se de que seu ambiente local está preparado para rodar projetos Laravel. Você vai precisar de:

- [XAMPP](https://www.apachefriends.org/pt_br/index.html) ou outro ambiente que ofereça PHP (versão 7.4 ou superior) e MySQL (ou MariaDB).
- [Composer](https://getcomposer.org/) que é o gerenciador oficial de pacotes do PHP. Ele vai baixar e organizar todas as dependências do Laravel automaticamente.
- **Um editor de código** como [VS Code](https://code.visualstudio.com/)

---

### 2. ⬇️ Baixar o projeto

Você pode obter os arquivos do sistema de duas formas simples:

- **Opção 1:** Baixar o arquivo .zip diretamente do GitHub (clicando no botão "Code" e depois em "Download ZIP"). Depois é só descompactar na pasta que preferir.
- **Opção 2:** Clonar o repositório Git via terminal, usando o comando:
```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
```
Assim você já terá o histórico e poderá atualizar o projeto facilmente no futuro.

---

### 3. ⚙️ Configurar o projeto

Depois de baixar o projeto, é preciso instalar as dependências do Laravel para que ele funcione corretamente.
Abra o terminal dentro da pasta do projeto e execute:

```bash
composer install
```
Esse comando vai baixar todas as bibliotecas e pacotes necessários.

Depois, gere a chave de segurança da aplicação, que é usada para proteger dados sensíveis, sessões e criptografia:

```bash
php artisan key:generate
```
Isso cria uma chave única e importante para o funcionamento seguro do sistema.

---

### 4. 🛠️ Configurar o banco de dados

O Laravel usa um arquivo chamado `.env` para guardar configurações do ambiente, como acesso ao banco.

Abra o arquivo `.env` e edite estas linhas com os dados do seu MySQL local:


```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cliente_admin
DB_USERNAME=root
DB_PASSWORD=
```

💡 Dica: crie o banco `cliente_admin` no phpMyAdmin ou outro gerenciador MySQL.

---

### 5. 🧱 Criar as tabelas no banco

Para que o sistema funcione, é necessário criar as tabelas no banco de dados que armazenarão os dados dos clientes.

Isso é feito rodando as migrations do Laravel, que são scripts que criam a estrutura do banco:

```bash
php artisan migrate
```
Esse comando lê as migrations presentes no projeto e cria as tabelas automaticamente.

---

### 6. ▶️ Rodar o sistema

Com tudo configurado, basta iniciar o servidor local do Laravel para acessar o sistema via navegador:

```bash
php artisan serve
```

Depois, abra seu navegador e acesse o endereço:

http://127.0.0.1:8000

Você verá a interface do sistema pronta para uso.

---

## 📷 Telas do sistema

- ✅ Página de cadastro
- ✅ Lista de clientes
- ✅ Botões de editar/excluir
- ✅ Relatórios por mês, semana e dia

---

## ❓ Dúvidas comuns

- **"O que é CPF com 11 dígitos?"**  
  É o número do CPF completo, sem pontos ou traços. Ex: `12345678901`

- **"Funciona no celular?"**  
  Sim! O site se adapta automaticamente à tela.

---

## 📞 Suporte

Se você tiver alguma dúvida ou problema, entre em contato com o desenvolvedor:

**João Vitor Sgobin**  
📧 dev.ssgobin@gmail.com  
📱 (19) 99400-4912  
🔗 [LinkedIn](https://www.linkedin.com/in/joaovitorsgobin/)