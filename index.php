<? include ("path.php"); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web - сайты</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="templates/style.css">
    <link rel="stylesheet" href="templates/style_main.css">
 
</head>
<body>
    <canvas id="q"></canvas>
    <div class="container_big">

    <? include ("templates/header.php"); ?>

    <section>
        <div class="icon">
        <ul>
            <li><a href="#"><svg fill="#3c3f3d" width="28px" height="28px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12c0-6.627-5.373-12-12-12zm5.894 8.221-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/></svg></a></li>
            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="#3c3f3d" viewBox="0 0 30 30" width="35px" height="35px">    
                <path d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z"/></svg></a></li>
            <li><a href="#"><svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM9 8C9 7.44772 9.44772 7 10 7H14C14.5523 7 15 7.44772 15 8V16C15 16.5523 14.5523 17 14 17H10C9.44772 17 9 16.5523 9 16V8ZM10 9H14V15H10V9Z" fill="#3c3f3d"/>
                </svg></a></li>
        </ul>
        </div>
<div class="container">

    <div class="slider"><img src="templates/img/img1.png" alt="фотo">
         <h2>Шилова Светлана</h2><p>+7(962)969-91-99</p>

    </div>

<div class="main">
    
    <div class="hexagon one">
        <div><a href="#"><h3>Условия заказа</h3></a></div>
        <div class="corner left"></div>
        <div class="corner right"></div>
    </div>
      <div class="hexagon two">
        <div><a href="#"><h3>Заказать <br> сайт</h3></a></div>
        <div class="corner left"></div>
        <div class="corner right"></div>
      </div>
      <div class="hexagon three">
        <div><a href="#"><h3>Портфолио</h3></a></div>
        <div class="corner left"></div>
        <div class="corner right"></div>
      </div>
</div>
</div>
    </section>


   <? include ("templates/footer.php"); ?>
</div>
   
    <script src="templates/particles.js"></script>
</body>
</html>