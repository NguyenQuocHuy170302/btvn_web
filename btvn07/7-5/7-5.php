<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="7-5.css">
    <script src="7-5.js"></script>
    <title>7-5</title>
</head>
<body>
    <div class="header col-sm-12">
        <input type="text" id="input" placeholder=" Type something to search">
        <input type="button" name="" id="search" value="Search" placeholder=" Search">
    </div>

<div class="body-page row" >
        <div class="sidebar sm-col-3">
              <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    Product list
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Category</a>
                    <a href="#" class="list-group-item list-group-item-action">News</a>
                    <a href="#" class="list-group-item list-group-item-action">Memdership</a>
                    <a href="#" class="list-group-item list-group-item-action">Ordered product</a>
               </div>

               <div class="AddItem">
               <input type="text" id="Add" placeholder=" Add New Item">
               <input type="button" name="" id="subAdd" value="Add" >
               </div> 

        </div>
        <div class="main-page sm-col-8">
            <?php 
                $number=8;
                require "7-52.php";
                for($row=0;$row<$number/3+1;$row+=1) {
                    ?>
                     <div class="card-row">
                    <?php
                    for($col=0;$col<$number-$row*3 && $col<3;$col++) {
                        coutCard($row*3+$col);
                    }
                    ?>
                    </div>

                    <?php
                }
            ?>
        </div>
</div>

<div class="footer"></div>


</body>
</html>