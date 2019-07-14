<?php 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"education");

?>

<html>
<body>
<h3>M-TECH COLLEGES</h3>
<h3 class="head">B-TECH COLLEGES</h3>

<form  action="#" method="post">
            <select name="selecte1" class="select">
                <?php  
                $res=mysqli_query($link,"select * from my_edu");
                while($row=mysqli_fetch_array($res))
                {if($row["course"]=="M-TECH"){
                    ?>
                <option>
                    <?php echo $row["college"] ?></option>
                <?php
                }}
                ?>
                
            </select>
            <input type="submit" class="contact" name="contact" value="CONTACT" /><br>

        </form><br><br>


<form  action="#" method="post">
            <select name="selecte2" class="select1">
                <?php  
                $res=mysqli_query($link,"select * from my_edu");
                while($row=mysqli_fetch_array($res))
                {if($row["course"]=="B-TECH"){
                    ?>
                <option><?php echo $row["college"] ?></option>
                <?php
                }}
                ?>
                
            </select>
            <input type="submit" class="contact5" name="contact5" value="CONTACT" /><br>

        </form><br><br>
<form action="#" method="post">
                <input class="name" name="name" id="us" placeholder="ENTER NAME" type="text"><br><br>
                <input class="mail" name="mail" id="mail" placeholder="EMAIL" type="email" ><br><br>
                <input class="mobile" name="mobile" id="mob" placeholder="ENTER MOBILE" type="number" required ><br><br>
                <input class="submit" name="submit" type="submit" id="sub" value="REGISTER">
</form>

<?php


if(isset($_POST["contact5"])){
    $val3=$_POST["selecte2"]." university";
    header("Location:https://www.google.com/search?q=".$val3."&rlz=1C1CHBD_enIN784IN784&oq=para&aqs=chrome.0.69i59j69i57j69i59j0l3.1399j0j4&sourceid=chrome&ie=UTF-8");

   
}

if(isset($_POST["contact"])){
    $val5=$_POST["selecte1"]." university";
    header("Location:https://www.google.com/search?q=".$val5."&rlz=1C1CHBD_enIN784IN784&oq=para&aqs=chrome.0.69i59j69i57j69i59j0l3.1399j0j4&sourceid=chrome&ie=UTF-8");

   
}
if(isset($_POST["submit"])){
    echo "<br><br><br><p align='center'> <font color=green  size='6pt'>DETAILS SUBMITTED SUCCESFULLY</font> </p>";
}
?>
</body>

</html>
<style>
    .select{
        position:absolute;
        top:200px;
        left:160px;
        color:green;
        border-color:red;
        width:200px;
        height:30px;
    }
    .select1{
        position:absolute;
        top:200px;
        left:960px;
        color:green;
        border-color:red;
        width:200px;
        height:30px;
    }
    

    body{
        background: url(ch.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    }
    h3{
        color:white;
        font-size:30px;
        position:absolute;
        top:100px;
    }
    .head{
        color:white;
        font-size:30px;
        position:absolute;
        top:100px;
        left:800px;
    }
    .name,.mobile,.mail,.submit{
        width:250px;
        position:relative;
        top:400px;
        left:480px;
    }
    .view{
        position:absolute;
        top:300px;
        left:120px;

    }
    .contact{
        position:absolute;
        top:300px;
        left:200px;

    }
    .view5{
        position:absolute;
        top:300px;
        left:900px;

    }
    .contact5{
        position:absolute;
        top:300px;
        left:1000px;

    }
</style>