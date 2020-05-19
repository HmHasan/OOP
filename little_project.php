<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
   

    class form
    {
        public $txt;
            public function display($name)
            {
                echo $this->txt = $name;
            }
    }

    $object = new form;
    $object->display($name);

}



    
    
    
    ?>
</body>
</html>