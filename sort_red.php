<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Palette</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sort_red.css">
</head>
<body>
    <?php include 'sort_red01.php';?>
    <?php include 'sort_red02.php';?>
    <?php include 'sort_red03.php';?>
    <?php include 'sort_red04.php';?>
    <?php include 'sort_red05.php';?>
    <?php include 'footer.php';?>  
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

<script>
$(window).scroll(function() {
    var scrolltop = $(this).scrollTop();
    if (scrolltop>300 && scrolltop<2000){
        $(".changebg").css('background-color','#662424');
    }else if(scrolltop>2000 && scrolltop<3400){
        $('.changebg').css('background-color','#c2704f');
    }else if(scrolltop>3400){
        $('.changebg').css('background-color','#df9282');
    }
});

$(window).scroll(function() {
    var scrolltop = $(this).scrollTop();
    if (scrolltop>300 && scrolltop<2000){
        $(".changebox").css('background-color','#662424');
    }else if(scrolltop>2000 && scrolltop<3400){
        $('.changebox').css('background-color','#c2704f');
    }else if(scrolltop>3400){
        $('.changebox').css('background-color','#df9282');
    }
});
</script>
</body>
</html>