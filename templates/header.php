<? echo BASE_URL ?>//ведет на Главную страницу
<?php

    $db = new PDO("mysql:host=localhost;dbname=LanaWeb;", "root", "");
    $info = [];
    if($query = $db->query("SELECT * FROM `header`")){
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }
    ?>
    <header>
     
<ul>
<?php foreach($info as $data):?>
     
    <li><a href="<?php echo $data['url']?>"><?php echo $data['neme']?></a></li>
    <?php endforeach; ?>
</ul>
</header>