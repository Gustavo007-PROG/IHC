<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<title>Document</title>
<style>
    *{margin: 0%; padding: 0%; list-style: none; text-decoration: none;}
    body{font-family: 'Poppins', sans-serif; background-color: #FBFFFE;}
    main{display: flex; justify-content: center; flex-direction: column; align-items: center;}
    main div{margin: 4vw 0vw;}
    h1,h2,h3,h4,h5,h6{color: #8c0a07;}
    h1{font-size: 4vw !important;}
    h2{font-size: 3vw !important;}
    header{display: flex !important; justify-content: space-between; align-items: center !important;  padding: 1vh 4vh !important;  border-bottom: 1px solid #F0F0F0 !important;}
    button{ cursor: pointer; border-style: none; background-color: #8c0a07; border-radius: 50px; display: flex; align-items: center;}
    button a{color: #FBFFFE;}
    button i{color: #FBFFFE; font-size: 1.9vw;}
    header button{padding: 1% 2%; font-size: 100%;}
    .part{display: flex; align-items: center; width: 80vw;}
    .part div{margin: 1vw; display: flex; flex-direction: column; justify-content: space-between;}
    .part div h1,h2,p{margin: 1vh; }
    .part img{width: 40vw; border-radius: 15px;}
    .part p a{text-decoration: underline;}
    .part p a,i{color: #8c0a07; font-size: 1.2vw;}
    .part p{color: #273043;}
    .part button{padding: 1vh 6%; width: fit-content; font-size: 130%; margin: 5% 0%;}
    .part button a{font-weight: 100;}
    .menu{display: flex; align-items: center;}
    .menu-list{display: flex;}
    .menu-list li{margin: 0vw 1vw;}
    .menu img{width: 10vw; margin-right: 2vw;}
    .menu-list a{color: #273043;}
</style>
</head>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
<div class="menu">
            <a href="http://interao-humano-computador.local/"><img src="http://ihc.local/wp-content/uploads/2022/11/logo.png"></a>
            <div class="menu-item">
                <ul>
                    <li><a href="http://interao-humano-computador.local/"  class="gustavo">Inicio</a></li>
                    <li><a href="http://interao-humano-computador.local/?page_id=23"  class="gustavo">Institucional</a></li>
                    <li><a href="http://interao-humano-computador.local/cursos/" class="gustavo">Cursos</a></li>
                    <li><a href="http://ihc.local/secretaria/" class="gustavo">Secretaria</a></li>
                </ul>
            </div>
        </div>
        <a class="button" href="">
            <p>Entre em contato</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="2vw" height="2vw" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
              </svg>
        </a>
</header>
