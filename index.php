<!DOCTYPE html>

<html>
<head>
 
  <title>Accordions</title>
 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <script type="text/javascript" src="accordion.json"></script>


<script>

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 3 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        document.getElementById("section1").innerHTML = myArr.blocks[0];
        document.getElementById("section2").innerHTML = myArr.blocks[1];
        document.getElementById("section3").innerHTML = myArr.blocks[2];
    }
};
xmlhttp.open("GET", "accordion.json", true);
xmlhttp.send();

</script>
</head>

<body>

           <section class="section-wrapper">


                                       <div class="container">
   

                                                          <button class="accordion">Section 1</i></button>
                                                          <div class="content" id="section1">
                                                          </div>


                                                          <button class="accordion">Section 2</button>
                                                          <div class="content" id="section2">
                                                          </div>


                                                          <button class="accordion">Section 3</button>
                                                          <div class="content" id="section3">
                                                          </div>

                                      </div>

  <script>
                    var x = document.getElementsByClassName("accordion");

                    for (var i = 0; i < x.length; i++) {

                     x[i].onclick = function() {

                   this.classList.toggle('open');

                   var y = this.nextElementSibling;
                   if (y.style.maxHeight) {
       
                     y.style.maxHeight = null;
                     } else {
       
                        y.style.maxHeight = y.scrollHeight + "px";

                        }

                       }

                   }


    </script>

   <section>

   <style>


         .section-wrapper{
                           width: 100%;
                           height: 0 auto;
                           text-align: center;
                           margin-top:5%;
 
                          }

          body{
                  background-color:black;
                  

                 }
          .container {
                      margin-top:30%;
                      width: 55%;
                      margin:auto;
                      border-style: solid;
                      border-color: white;
                      border-width: 30px;
                      text-align: center;

                      
                    }
                  


          button.accordion {
                              font-style: italic;
                              width: 100%;
                              height: 110px;
                              background-color: #c44dff;
                              border-style: inset;
                              outline: none;
                              text-align: left;
                              padding: 15px 20px;
                              font-size: 250%;
                              color: white;
                              cursor: pointer;
                              transition: background-color 0.2s linear;
                              border-style: solid;
  
                            }

          button.accordion:after {
                                  content: '\f107';
                                  font-family: "fontawesome";
                                  font-size: 14px;
                                  float: right;
                                 }

          button.accordion.open:after {
                                       content: '\f106';
                                      }

          button.accordion:hover, button.accordion.open {
                                                          background-color: #220066;
                                      }

          .content {
 
                      max-height: 0;
                      overflow: hidden;
                      transition: max-height 0.2s ease-in-out;
                      background-color: white;
                      border-style: solid;
                      border-left: solid;
                      border-right: solid;
                      border-width: 2px;
                      border-color: #f2f2f2;
                      font-size: 130%;
                      text-align: left;

                   
                    }



    </style>
    

</body>
</html>