<!--link (input) to stay in textbox with id="url"
// -->
<!DOCTYPE html>
<html>
  <head>
    <title>URL Shortener</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Tomi.css">
  </head>
  <body style=" background-image: url('background.png') ">

<!--<marquee direction="up"><img src="Butterflies.png" alt = "Butterflies" /></marquee> -->

   <div id="top">
      <!--<img src="Butterflies.png" alt = "Butterflies" /> -->
      <h2>URL Shortener</h2><br>
    </div>

    <div class = "Shortener">
      <form action = "" method = "get">
        <h1>Paste your long link here:</h1>
        <div class="Shortbutton">
          <input class="field r2" placeholder="" id="url" name="url" type="text" value="<?php $url;?>">

          <button type="submit" class="btn btn-default" id ="shorten" >Submit</button>
          <!--after pressing button need to stay at website, link must stay there, short link must appear -->
        </div>


        <h1>This is your URL:</h1>
     <p class"my_surl" id="my_surl"></p>
      <!--  <input readonly type = "text" name= "surl" id = "surl" placeholder = "" value = "" href="Tomi.php">
      -->
      </form>
    </div>


  <!--<img id = "Butterflies2" src="Butterflies.png" alt = "Butterflies2" />-->
<!--
<div class = "Shapes">

  <div class="shape"></div>
  <div class="shape shape2"></div>
  <div class="shape shape3"></div>

  <div class="triangle-up"></div>
  <div class="triangle-up2"></div>
  <div class="triangle-up3"></div>
  <div class="triangle-up4"></div>
  <div class="triangle-up5"></div>
  <div class="triangle-up6"></div>
  <div class="triangle-up7"></div>
  <div class="triangle-up8"></div>

</div>
-->

  <script type = "text/javascript">



    $(document).ready(function(){


      $('button[type="submit"]').click(function(e){
        e.preventDefault();
        var url = $('input[name="url"]').val();

        //alert ("This is your url: " + url)

        if(url.length ==  0){
          $('.errors').html('Oops, please eneter URL');
          return false;
        }


        $.post('Tomi.php',{
            url: url
        },function(data, textStatus, xhr){
            //alert(data)
            //$('#my_surl').html(data)
            $('#my_surl').html('<a id= "link_surl" href="'+data+'">'+data+'</a>')
            console.log(data)
            //alert("HEREEE")
            var lin = document.getElementById('link_surl');
            //lin.onClick = linkClicked();
            lin.addEventListener("click", function(){
              //alert("CLICKKKKKK")
              /*$.ajax({
                type:'POST',
                data:{name:"tomi"},
                success: function(resp){
                    alert("Success")

                }
              })*/

              var srt_link = lin.href.slice(lin.href.length - 12).trim()
              //alert("wdvwefvwrbqefvqfv " + srt_link)

              $.post('functions.php',{
                  link: srt_link
              },function(data, textStatus, xhr){
                //alert(data)
                window.location.href = data;
                //alert("TOMI")
              });




            })
        });

      });
    });
  </script>

  </body>
</html>
