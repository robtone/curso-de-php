<?php
    if(isset($_COOKIE['font-size'])){
        $tamaño= $_COOKIE['font-size'];    
    }else{
        $tamañop='15px';
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p{
            font-size:<?php echo $tamaño;?>;
        }
    </style>    
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur, 
        adipisicing elit. Inventore veniam repellat, 
        repudiandae commodi tempora adipisci doloribus 
        assumenda? Adipisci, odit! Culpa in sint porro tempore, 
        sed asperiores dolorem recusandae esse aliquid.
    </p>      
</body>
</html>