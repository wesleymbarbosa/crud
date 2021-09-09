<p align="center">
	<img src="https://logospng.org/download/laravel/logo-laravel-256.png" height="120">
	<img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/vuejs_logo_icon_169247.png" height="120">
</p>


## CRUD WESLEY - Laravel & Vue SPA

Simples CRUD desenvolvido em Laravel 8 e Vue JS e banco de dados MySql rodando no Wampserver para fins de aprendizado e também para o processo de recrutamento Gazin.
<p align="center">
	<img src="https://i.ibb.co/zhrCdG9/crudwesley.gif" height="400">
</p>


## Banco de dados
```language
CREATE DATABASE crudwesley;
USE crudwesley;

CREATE TABLE `developers` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sexo` char(1) NULL,
  `idade` int(1) NULL,
  `hobby` varchar(255) NULL,
  `datanascimento` date NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `developers` (`nome`, `sexo`, `idade`, `hobby`, `datanascimento`) VALUES 
('Wesley Maciel Barbosa', 'M', 33, 'Futebol', '1987-12-14');
```


## Projeto
Necessário ter Wampserver e Node instalado na máquina do usuário e configurar um VirtualHost para o projeto
```language
<VirtualHost *:80>
	ServerName crud
	DocumentRoot "c:/wamp64/www/crud/public"
	<Directory  "c:/wamp64/www/crud/public/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```

No diretório do projeto rodar o comando Node: 
```
npm run dev
```

## Nota
Infelizmente ainda não tenho conhecimento suficiente para rodar a aplicação utilizando Docker, apesar de muitas tentativas, não obtive sucesso.

## Créditos
Wesley Maciel Barbosa
wesleym.barbosa@gmail.com