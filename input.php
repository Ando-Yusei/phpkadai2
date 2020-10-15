<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>診察予約フォーム</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h2>診察予約フォーム</h2>
    <form action="write.php" method="post">
        <!-- お名前: <input type="text" name="name">
        EMAIL: <input type="text" name="mail">
        住所:  <input type="text" name="place">
        電話番号：<input type="text" name="tel"> -->

        <div class="inputWithIcon inputIconBg">
          <input type="text" name="YourName"placeholder="Your name">
          <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
        </div>

       <div class="inputWithIcon inputIconBg">
          <input type="text" name="Email"placeholder="Email">
          <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
       </div>
  
       <div class="inputWithIcon inputIconBg">
         <input type="text" name="PhoneNumber" placeholder="Phone Number">
         <i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
       </div>

       <input type="text" name="Age" placeholder="Age">

        <div class="btn btn-malformation btn-malformation--pastel">
          <input type="submit" value="send" class="btn btn-malformation btn-malformation--pastel">
        </div>
        
    </form>  
</body>

</html>




