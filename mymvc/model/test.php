<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=M, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="myheader">hello world</h1>
    <button onclick="doSomething()">clickme</button>


    <script>
        


        function myFunction2(input) {
            let total = 0;
            for (let i = 0; input.length > i; i++){
                total += input[i];
            }
            return total;
        }
        let myArray = [1,4,6];
        let x = myFunction2(myArray);
        console.log(x)
    </script>
    
</body>
</html>