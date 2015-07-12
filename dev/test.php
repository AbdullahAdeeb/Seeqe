<?php
echo "I am >> ";
echo exec('whoami');
if($_REQUEST['request'] == 'yes'){
    echo "Okay >>  ";
    print_r($_FILES);
    echo $_FILE['myFile']['name'];
    echo "   << Bye";
   
}else {
    echo "<br>Bye";
}
 phpinfo();

?>
<html>
    <head></head>
    <body>
        <form action="test.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="request" value="yes"/>
            <input type="file" id="myFile" name="myFile"/>
            <input type="submit"/>
            
        </form>
    </body>
</html>