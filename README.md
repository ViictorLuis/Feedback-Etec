# 📌 Projeto Feedback ETEC

Olá! 👋  

Seguinte: eu desenvolvi esses arquivos **PHP básicos** para o projeto.  
Eu queria ter feito através de um **banco de dados local que pudesse ser movido entre computadores sem necessidade de instalar nada**, mas não funcionou.  

O formulário (`index.html`) possui conexão com o (`salvar.php`), além de marcar o horário que o registro foi feito.

---

## ⚠️ IMPORTANTE

- Eu utilizei o **XAMPP**, então precisamos verificar se ele está instalado nos computadores da escola.  
- No arquivo de conexão (`conexao.php`) existem variáveis que indicam:
  - **servidor**
  - **nome de usuário**
  - **senha**
  - **nome do banco de dados**

  Caso o **XAMPP** em questão utilize valores diferentes, será necessário **alterar essas variáveis** manualmente.

---

Script de criação do banco
Para criar o banco e a tabela necessária, execute o seguinte script no phpMyAdmin ou via terminal SQL:

CREATE DATABASE feedback_epa;
USE feedback_epa;

CREATE TABLE avaliacoes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  curso VARCHAR(100) NOT NULL,
  tipo VARCHAR(20) NOT NULL,
  feedback VARCHAR(10) NOT NULL,
  data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


