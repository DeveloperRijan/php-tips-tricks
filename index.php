<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello PHP Tips and Tricks</title>
</head>
<body>
     <h1>PHP Array to Javascript Object JSON</h1> 
     <p id="showJson"></p>

     <h1>PHP String to Javascript String</h1>
     <p id="showString"></p>


     <?php
        $array = [
                "language"=>["PHP", "Python", "JS", "GO", "NodeJS"],
                "mostlyWorked"=>["PHP", "Python", "Nodejs"],
                "reaction"=>"Love for GO"
        ];
        $phpString = "Hey I am PHP to Javascript String!";
     ?>
     <script type="text/javascript">
        const data = <?php echo json_encode($array); ?>;
        const string = "<?php echo $phpString; ?>";
        window.onload = showData()
        function showData(){
                document.getElementById("showJson").innerText = "Output Check Developer Tools: Console"
                console.log("PHP Array to JS Object", data)

                document.getElementById("showString").innerText = string
        }
     </script>
</body>
</html>