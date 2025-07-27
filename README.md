# 📋 Sistema de Administração de Clientes

Este projeto é um sistema simples e responsivo para **cadastrar, editar, excluir e visualizar clientes**, feito em PHP com Laravel.

---

## 🧑‍💻 O que esse sistema faz?

- ✅ Cadastro de clientes (nome, CPF, nascimento, renda)
- ✅ Edição e exclusão de clientes
- ✅ Pesquisa por nome
- ✅ Visualização de dados em formato de **relatórios com cartões**
- ✅ Interface simples e bonita, compatível com celular e computador
- ✅ Alerta visual (popup) com confirmação ao excluir

---

## 🖥️ Como usar este sistema no seu computador?

### 1. 📦 Requisitos

Antes de começar, você precisa ter instalado no seu computador:

- [XAMPP](https://www.apachefriends.org/pt_br/index.html) (ou outro com PHP e MySQL)
- [Composer](https://getcomposer.org/) (gerenciador de pacotes do PHP)
- **Um editor de código** como [VS Code](https://code.visualstudio.com/)

---

### 2. ⬇️ Baixar o projeto

Você pode fazer isso de duas formas:

- **Opção 1:** Baixar o `.zip` do projeto e descompactar
- **Opção 2:** Clonar o repositório (se estiver no GitHub)

---

### 3. ⚙️ Configurar o projeto

Abra a pasta do projeto no terminal e digite:

```bash
composer install
```

Depois, gere a chave do Laravel:


```bash
php artisan key:generate
```

---

### 4. 🛠️ Configurar o banco de dados

Abra o arquivo `.env` e edite estas linhas com os dados do seu MySQL local:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cliente_admin
DB_USERNAME=root
DB_PASSWORD=

💡 Dica: crie o banco `cliente_admin` no phpMyAdmin ou outro gerenciador MySQL.

---

### 5. 🧱 Criar as tabelas no banco

Execute o comando abaixo no terminal:

```bash
php artisan migrate
```

---

### 6. ▶️ Rodar o sistema

Por fim, rode o sistema com:

```bash
php artisan serve
```

Abra o navegador e acesse: 

http://127.0.0.1:8000


---

## 📷 Telas do sistema

- ✅ Página de cadastro
- ✅ Lista de clientes
- ✅ Botões de editar/excluir
- ✅ Relatórios por mês, semana e dia
- ✅ Alertas de sucesso e confirmação de exclusão

---

## ❓ Dúvidas comuns

- **"O que é CPF com 11 dígitos?"**  
  É o número do CPF completo, sem pontos ou traços. Ex: `12345678901`

- **"E se eu errar ao digitar?"**  
  O sistema avisa na hora com uma mensagem de erro.

- **"Funciona no celular?"**  
  Sim! O site se adapta automaticamente à tela.

---

## 📞 Suporte

Se você tiver alguma dúvida ou problema, entre em contato com o desenvolvedor:

**João Vitor Sgobin**  
📧 dev.ssgobin@gmail.com  
📱 (19) 99400-4912  
🔗 [LinkedIn](https://www.linkedin.com/in/joaovitorsgobin/)