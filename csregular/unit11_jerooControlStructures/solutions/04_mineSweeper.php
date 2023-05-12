<?php
   session_start();
   if($_SESSION['username'] != 'CompSci_Student') 
       header("Location: /index.html");
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      #container {
        font-size: 1.3em;
      }
      ol li {
        padding-bottom: 5px;
      }
      h2 {
        background-color: lightgray;
      }

      #completedCode1 {
        display: none;
      }

      #completedCode2 {
        display: none;
      }

      #completedCode3 {
        display: none;
      }

      #completedCode4 {
        display: none;
      }

      #completedCode5 {
        display: none;
      }

      img {
        width: 550px;
      }
      #csSampleRun
      {
        color: white;
        background-color: black;
        width: 600px;
        padding: 10px;
        margin: 5px;
      }

      a
      {
        text-decoration: none;
        text-align: center;
        background-color: lightgray;
        color: black;
        border: 2px solid darkgray;
        border-radius: 25px;
        width: 143px;
        height: 35px;
        font-size: 1.3rem;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 7px;
        margin-bottom: 10px;
      }
      a:link {
        text-decoration: none;
      }
      a:visited {
        text-decoration: none;
      }
      a:hover {
        text-decoration: none;
        background-color: black;
        color: white;
      }

      .solutionContainer {
        display:flex;
        flex-direction: column;
      }
    </style>
  </head>

<body>
<div id = "container"> 
    <h1 style="text-align:center">MineSweeper Solution</h1>
    <h2>Create Jeroo Source File</h2>
    <p>Click the <strong>Save</strong> button and create a Jeroo source code file (.jsc) with the name <strong>CircleRing.jsc</strong>.<p>
    <p>Add the following starter code to the file under the Main Method section.</p>
    <img style="width:16%; border:2px solid black; padding:10px" src="/csregular/unit11_jerooControlStructures/solutions/images/main.png"><br>
    <h2>Step 1 - Create Jeroo Object</h2>
      <ol>
          <li>Create a Jeroo object named <strong>bob</strong> at location (0,0) with 50 flowers in his pouch.</li>
      </ol>
      <div class="solutionContainer">
          <a href="#!" onclick="makeVisible('completedCode1')" id="completedCode1a">Show Code</a>
          <img id="completedCode1" style="border:2px solid black; padding:10px; width:25%" src="/csregular/unit11_jerooControlStructures/solutions/images/circleRing_01.png">
      </div>
    
      <h2>Step 2 - Add a while Statement
      </h2>
        <p>Add a while statement that will continue repeating
          as long as bob does NOT have water AHEAD of him.
        </p>
      <div class="solutionContainer">
          <a href="#!" onclick="makeVisible('completedCode2')" id="completedCode2a">Show Code</a>
          <img id="completedCode2" style="border:2px solid black; padding:10px; width:25%" src="/csregular/unit11_jerooControlStructures/solutions/images/mineSweeper_02.png">
      </div>
      <h2>Step 3 - Add an if Statement
      </h2>
        <p>In the body of the while loop add an if statement that's condition is true when bob has a net 
           directly in front of him.</p>
      <div class="solutionContainer">
          <a href="#!" onclick="makeVisible('completedCode3')" id="completedCode3a">Show Code</a>
          <img id="completedCode3" style="border:2px solid black; padding:10px; width:25%" src="/csregular/unit11_jerooControlStructures/solutions/images/mineSweeper_03.png">
      </div>
    
      <h2>Step 4 - Add Code to if Statement</h2>
      <p>Add code to the body of the if statement so that when it's condition is true if will have bob       
         disable the net and place a flower in its place.
      </p>
      <div class="solutionContainer">
          <a href="#!" onclick="makeVisible('completedCode4')" id="completedCode4a">Show Code</a>
          <img id="completedCode4" style="border:2px solid black; padding:10px; width:18%" src="/csregular/unit11_jerooControlStructures/solutions/images/mineSweeper_04.png">

      <h2>Step 5 - Attach an else Statement to the if Statement</h2>
      <p>Convert the if statement into an if/else statement so that the jeroo will either disable a net or hop, but never do both. Add a hop command inside the body of the else statement.
      </p>
      
      <div class="solutionContainer">
          <a href="#!" onclick="makeVisible('completedCode5')" id="completedCode5a">Show Code</a>
          <img id="completedCode5" style="border:2px solid black; padding:10px; width:18%" src="/csregular/unit11_jerooControlStructures/solutions/images/mineSweeper_05.png">
      </div>
      <br><br><br>
    </div>


    <script>
    function makeVisible(id)
    {
        let element = document.getElementById(id);
        let display = element.currentStyle ? element.currentStyle.display :
            getComputedStyle(element, null).display;
    
        if(display === "none")
        {
          element.style.display = "block";
          let anchor = id+"a";
          document.getElementById(anchor).innerHTML = "Hide Code";
        }
        else
        {
          element.style.display = "none";
          let anchor = id+"a";
          document.getElementById(anchor).innerHTML = "Show Code";
        }
    }
    </script>
  </body>	
</html>