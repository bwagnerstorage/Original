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
    <h1 style="text-align:center">MinMax Solution</h1>
<h2>Add Starter Code</h2>
<p>Add the following starter code to the <strong>MinMax.java</strong> file.</p>
<img src="/csregular/unit07_math/solutions/images/minMax01.png"><br>
<h2>Step 1 - Create Variables</h2>
  <ol>
      <li>Create a Scanner object and assign it the name <strong>keyboard</strong>.</li>
      <li>Create a variable of type <strong>int</strong> named <strong>num1</strong> and assign it a value of zero.</li>
      <li>Create a variable of type <strong>int</strong> named <strong>num2</strong> and assign it a value of zero.</li>
      <li>Create a variable of type <strong>int</strong> named <strong>num3</strong> and assign it a value of zero.</li>
      <li>Create a variable of type <strong>int</strong> named <strong>smallest</strong> and assign it a value of zero.</li>
      <li>Create a variable of type <strong>int</strong> named <strong>largest</strong> and assign it a value of zero.</li>
  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode1')" id="completedCode1a">Show Code</a>
      <img id="completedCode1" src="/csregular/unit07_math/solutions/images/minMax02.png">
  </div>
  <h2>Step 2 - Get User Input</h2>
  <ol>
      <li>Display a user prompt that says: <span style="font-family: Consolas">"Enter 1st integer -->"</span></li>
      <li>Use the Scanner class's <strong>nextInt</strong> method to allow the user
          to input an integer value from the keyboard and store the input value in the variable <strong>num1</strong>.</li>
      <li>Display a user prompt that says: <span style="font-family: Consolas">"Enter 2nd integer -->"</span></li>
      <li>Use the Scanner class's <strong>nextInt</strong> method to allow the user
          to input an integer value from the keyboard and store the input value in the variable <strong>num2</strong>.</li>
      <li>Display a user prompt that says: <span style="font-family: Consolas">"Enter 3rd integer -->"</span></li>
      <li>Use the Scanner class's <strong>nextInt</strong> method to allow the user
          to input an integer value from the keyboard and store the input value in the variable <strong>num3</strong>.</li>
  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode2')" id="completedCode2a">Show Code</a>
      <img id="completedCode2" src="/csregular/unit07_math/solutions/images/minMax03.png">
  </div>
  <h2>Step 3 - Do Processing (Perform Calculations)</h2>
  <ol>
        <li>Use the Math class's <strong>min</strong> method to compare the values in the variables
            <strong>num1</strong> and <strong>num2</strong> and store the smaller value in 
            the variable <strong>smallest</strong>.</li>
        <li>Use the Math class's <strong>min</strong> method to compare the values in the variables
            <strong>num3</strong> and <strong>smallest</strong> and store the smaller value in 
            the variable <strong>smallest</strong>.</li>
        <li>Use the Math class's <strong>max</strong> method to compare the values in the variables
              <strong>num1</strong> and <strong>num2</strong> and store the larger value in 
              the variable <strong>largest</strong>.</li>
        <li>Use the Math class's <strong>max</strong> method to compare the values in the variables
              <strong>num3</strong> and <strong>largest</strong> and store the larger value in 
              the variable <strong>largest</strong>.</li>
  </ol>

  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode3')" id="completedCode3a">Show Code</a>
      <img id="completedCode3" src="/csregular/unit07_math/solutions/images/minMax04.png">
  </div>
  <h2>Step 4 - Display Output (Results of Processing)</h2>
  <ol>
      <li>Display the value stored in the variable <strong>smallest</strong>. Include the following label at the
          beginning of the output: "Smallest = ".</li>
      <li>Display the value stored in the variable <strong>largest</strong>. Include the following label at the
          beginning of the output: "Largest = ".</li>
  </ol>
  
  <div class="solutionContainer">
      <a href="#!" onclick="makeVisible('completedCode4')" id="completedCode4a">Show Code</a>
      <img id="completedCode4" src="/csregular/unit07_math/solutions/images/minMax05.png">
  </div>
  <h2>Sample Run</h2>
  <div id="csSampleRun"> 
    <pre>
Enter 1st Integer -->7
Enter 2nd Integer -->2
Enter 3rd Integer -->5
      
Smallest = 2
Largest = 7
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
