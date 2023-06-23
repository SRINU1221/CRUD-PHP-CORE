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
        <!-- #region -->
        <?php 
        $nameerr=$emailerr=$websiteerror=$passworderror=$commenterror=$gendererror="";
        $name=$email=$gender=$comment=$website=$password="";
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST["name"])){
                $nameerr="name is required";
            }else{
                $name=test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";
                  }

                
            }
            if(empty($_POST['email'])){
                $emailerr="email is required";
            }else{
                $email=test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                  }

                
            }
            if(empty($_POST['gender'])){
                $gendererror="gender is required";
            }
            else{
                $gender=test_input($_POST["gender"]);
            }
            if(empty($_POST["website"])){
                $websiteerror="ennter web site in correct format";
                
            }else{
                $website=test_input($_POST["website"]);
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "Invalid URL";
                  }    
            }
            if(empty($_POST["password"])){
                $passworderror="password is required";
                
            }
            else{
                $password=test_input($_POST["password"]); 
                $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=])[A-Za-z\d!@#$%^&*()_\-+=]{8,}$/';

                if (preg_match($pattern, $password)) {
                    echo "Password is strong!";
                } else {
                    echo "Password is weak!";
                }
            }
            
            
            
           
           
        }

        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars_decode($data);
            return $data;


            
        }
        
        
        
        ?>







        <div class="container bg-info text-white">
            <h2>form with data get and post</h2>
            <form method="post" class="form-control bg-secondary text-white"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);    ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Name :</label>
                    <input type="txt" class="form-control" name="name" id="" placeholder="enter your name">

                </div>
                <span class="error">* <?php  echo $nameerr;?></span>
                <div class="mb-3">
                    <label for="" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId"
                        placeholder="abc@mail.com">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>

                </div>
                <span class="error">*<?php echo $emailerr;?> </span>
                <div class="mb-3">
                    <label for="" class="form-label">Password :</label>
                    <input type="password" class="form-control" name="password" id=""
                        placeholder="enter your secrate key">

                </div>
                <span class="error">*<?php echo $passworderror;?> </span>
                <div class="mb-3">
                    <label for="" class="form-label">website :</label>
                    <input type="ptxt" class="form-control" name="website" id="" placeholder="">
                </div>
                <span class="error">*<?php echo $websiteerror;?> </span>
                <div class="mb-3">
                    <label for="" class="form-label">comment :</label>
                    <textarea name="comment" id="" cols="150" rows="10"></textarea>
                </div>
                <span class="error">*<?php echo $commenterror;?> </span>
                Gender :
                <div class="container">

                    <ul class="list-inle">
                        <li class="list-inline-item"><input type="radio" name="gender" value="male">Male</li>
                        <li class="list-inline-item"><input type="radio" name="gender" value="female">Female</li>
                        <li class="list-inline-item"><input type="radio" name="gender" value="other">Other</li>

                    </ul>
                </div>
                <span class="error">*<?php echo $gendererror;?> </span><br>

                <input type="submit" name="submit" value="submit">

















            </form>

        </div>


        <h2>dample form data output</h2>
        <?php 
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $password;
        echo "<br>";
        
        echo $website;
        echo "<br>";
        echo $comment;
        

        
        ?>

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