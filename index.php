<!DOCTYPE html>
<html>
  <head>
  <title>Color change</title>
  </head>

  <body>
  <p id="msg">Test sentence</p>
  <button onclick=myFunction()>Input</button>
  <script>
    function myFunction(){

      do{
        var a=prompt("Input backgroud color.","red");
        document.body.style.backgroundColor=a;
        var b=prompt("Input foreground color.","green");
        document.body.style.color=b;
      }while(a!="");
    }
        

  </script>
  </body>
</html>