<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <h1 class="bg-danger">srinu chauhan</h1>
        <?php

        $x=5;
        function pp(){
          echo "srinu chauhan has:";
          echo "<br>";
          $a=array("srinu","chsuhan","xerro",1000);
          var_dump($a);
        }
        pp();
        echo "vamshi has less amt".$x;
        echo "<br>";

        


        $uu=100;
        $rrr=1000;
        function rr(){
          global $uu,$rrr;
          $ppp=$uu+$rrr;
          $s="srinuchauhankorra hyderabad";
          echo "function result is".$ppp;
          echo "<br>";
          echo "the string length is".strlen($s);
          echo "<br>";
          echo "the string count is ".str_word_count($s);
          echo "<br>";
          echo "the string reverse is ".strrev($s);
          echo "<br>";
          echo "the string posistion";
          echo "<br>";
          echo "the position is ".strpos($s,"hyderabad");
          echo "<br>";
          echo "the string replace is ".str_replace("srinu","saai",$s);
          echo "<br>";
          echo "the pi val is".pi();
          echo "<br>";
          echo "the square root is ".sqrt(100);
          echo "<br>";
          echo "the max from the given words :".max(10,50,20,30,60,04);
          echo "<br>";
          echo "the round of given numbr is ".round(0.9);
          echo "<br>";
          echo "the random of given number is ".rand();
          echo "<br>";
          echo "the rand between the given numbers is ".rand(10,100);
          echo "<br>";
          $p=1;
          while($p<=10){
            echo "the values are ".$p;
            echo "<br>";
            $p++;
          }
         echo "<br>";
         $aaa=array("name"=>"srinu","age"=>20,"sal"=>1000);
         foreach($aaa as $xx=>$vv){
          echo "$xx=$vv <br>";
          
         }

        

          
          
        }

        function cnu(){
          echo "srinu learn php functions";
          
         }
         
         
        rr();
        echo "<br>";

        function c1($name,$age){
          echo "my name is $name chauhan and my age is $age";
        }

        function c2($a,$b){
          $rr=$a+$b;
          echo "the sum of two numbers $rr";

          
        }
        

        cnu();
        echo "<br>";  
        c1("srinu",20);
        echo "<br>";
        c2(10,20);
        echo "<br>";


        
        $arr=array("srinu",20,"chauhan",30);
        $n=count($arr);
        echo "first".$arr[0]."<br>"."the second"."<br>".$arr[1]."<br>"."the last".$arr[2];
        echo "<br>";
        echo "the array elemets are printer uisng loop";
        echo "<br>";
        echo "the len of array is $n ";
        echo "<br>";
        for($i=0;$i<$n;$i++){
          echo "the elements are".$arr[$i];
          echo "<br>";
        } 



        $b=array(
          array("name","age","sal"),
          array("srinu",20,20000),
          array("vamshi",30,40000)
        );
        for($row=0;$row<=2;$row++){
          echo "the row number $row";
          echo "<ul>";
          for($col=0;$col<=2;$col++){
            echo "<li>".$b[$row][$col]."</li>";
            
          }
          echo "</ul>";
        }
        
        ?>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>



        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>

        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>