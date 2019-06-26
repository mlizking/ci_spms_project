<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php $this->load->view('layouts/script_head'); ?>
</head>
<body>
   
    <?php
        foreach($picdata as $row)
        {   
            echo $row->p_id;
        }
    ?>
    <?php print_r(array_keys($picdata)) ?>


</body>
</html>