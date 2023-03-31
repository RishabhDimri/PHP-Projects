<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body{  
            color:white;
            background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) ,url("cut (2).jpg");
            background-repeat:no-repeat;
            background-size: 100% 150%;
            font-family: Calibri, Helvetica, sans-serif;  
            
        } 
        h1{
            text-align: center;
            color:white;
        }
        hr {
            color:black;
        }
        label{
            font-size: 30px;
            display:block;
            padding-left:15px;
            padding-top: 1.5%
        }
        input{
            font-size: 13px;
            width: 90%;
            padding: 15px;
            background-color:  #f1f1f1;
            font-weight: 400px;
            padding-top: 1%
        }
        select{
            width:30%;
            padding:15px;
            background-color:#f1f1f1 ;
            padding-top: 1%;
        }
        .btn{
            align-self:center;
            padding-left: 25%;
        }
        button {  
            background-color: #4CAF50;  
            color: white;  
            padding: 16px 20px;  
            margin: 8px 0;  
            border: none;  
            cursor: pointer;  
            width: 70%;  
            align-self: center;
            opacity: 0.9; 
            height:20%;
            font-size: 30px;
            letter-spacing: 2%;
        }  
        button:hover {  
            opacity: 1;  
        }  
        input:hover,select:hover{
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1> My Simple Calculator</h1><hr>
        <label> Enter First Number</label>
        <input type="int" id="first" name="first" size="15" value="0" required/>
        <label>Enter Second Number</label>
        <input type="int" name="second" id="second" size="15" value="0" required/>
        <label>Enter Operation</label>
        <select name="Operator">
            <option value="+">Add (+)</option>
            <option value="-">Subtract (-)</option>
            <option value="*">Multiply (*)</option>
            <option value="/">Divide (/)</option>
        </select>
        <div class="btn">
            <button type="submit">C A L C U L A T E</button>
        </div>
        <h2>
        <?php
        if (isset($_POST['first']) && isset($_POST['second']) && isset($_POST['Operator'])){

            $a=$_POST["first"];
            $b=$_POST["second"];
            $op=$_POST["Operator"];
            echo "The Answer is: ";   
            if(is_numeric($a) && is_numeric($b)){
                switch($op){
                    case '+':
                        echo $a+$b;
                        break;
                    case '-':
                        echo $a-$b;
                        break;
                    case '*':
                        echo $a*$b;
                        break;
                    case '/':
                        if($b==0){
                            echo "Division By zero is not possible";
                        }
                        else{
                            echo $a/$b;
                        }break;
                    default:
                        echo "Not Supported";
                    }
            }elseif(is_numeric($a)){
                echo " \"Enter Integer In Place Of Second Number\" ";
            }else{
                echo " \"Enter Integer In Place Of First Number\" ";
            }
            
            }
        ?>
</body>
</html>