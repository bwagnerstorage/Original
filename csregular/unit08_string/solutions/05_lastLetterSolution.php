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
    <h1 style="text-align:center">LastLetter Solution</h1>
<h2>Add Starter Code</h2>
<p>Add the following starter code to the <strong>LastLetter.java</strong> file.</p>
<img src="/csregular/unit08_string/solutions/images/lastLetter01.png"><br>
<h2>Step 1 - Create Variables</h2>
  <ol>
      <li>Create a Scanner object and assign it the name <strong>keyboard</strong>.</li>
      <li>Create a variable of type <strong>String</strong> named <strong>str</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>String</strong> named <strong>last</strong> and assign it the empty string "".</li>
      <li>Create a variable of type <strong>int</strong> named <strong>len</strong> and assign it a value of zero.</li>

  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode1')" id="completedCode1a">Show Code</a>
      <img id="completedCode1" src="/csregular/unit08_string/solutions/images/lastLetter02.png">
  </div>
  <h2>Step 2 - Get User Input</h2>
  <li>Display a user prompt that says: <span style="font-family: Consolas">"Enter a string -->"</span>.</li>
  <li>Use the Scanner class's <strong>nextLine</strong> method to allow the user
      to input a string and store it in the variable <strong>str</strong>.</li>


  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode2')" id="completedCode2a">Show Code</a>
      <img id="completedCode2" src="/csregular/unit08_string/solutions/images/lastLetter03.png">
  </div>
  <h2>Step 3 - Do Processing (Perform Calculations)</h2>
  <ol>
    <li>Use the String class's <strong>length</strong> method to get the length (number of characters) of the string stored
        in the variable <strong>str</strong> and store the value in the variable  <strong>len</strong>.</li>
    <li>Use the String class's <strong>substring</strong> method and the <strong>len</strong> variable
        to extract the last letter from the string stored in the <strong>str</strong> variable. Store the
        extracted last letter in the variable <strong>last</strong>.</li>
  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode3')" id="completedCode3a">Show Code</a>
      <img id="completedCode3" src="/csregular/unit08_string/solutions/images/lastLetter04.png">
  </div>
  <h2>Step 4 - Display Output (Results of Processing)</h2>
  <ol>
      <li>Display the label "Last letter = " followed by the string stored in the variable <strong>last</strong>.</li>
  </ol>
  
  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode4')" id="completedCode4a">Show Code</a>
      <img id="completedCode4" style="width:800px;" src="/csregular/unit08_string/solutions/images/lastLetter05.png">
  </div>
  <h2>Sample Run 1</h2>
  <div id="csSampleRun"> 
    <pre>
Enter a string --> mountains

Last letter = s
   </pre>
  </div>
  <h2>Sample Run 2</h2>
  <div id="csSampleRun"> 
    <pre>
Enter a string --> have a nice day

Last letter = y
   </pre>
  </div>
  <br>
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
