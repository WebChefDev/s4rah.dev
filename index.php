/*
Whooooooooa there looking at my source code are you??
At least buy me dinner first!! 

LOL jk

Thanks for stopping by!
*/

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>s4rah.dev</title>
    <style>
body {
  margin: 0;
  min-height: 100vh; 
  display: grid;
  grid-template-rows: auto 1fr;
  justify-items: center;
  align-items: center;
  background: linear-gradient(45deg, #f7339b, #3ecfcd);
  background-size: 200% 200%; 
  animation: gradientAnimation 10s ease infinite;
  color: white;
  font-family: "Courier New", Courier, monospace;
  text-align: center;
  overflow: auto; 
}



@keyframes gradientAnimation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}


      h1 {
        font-size: 3rem;
        white-space: nowrap;
        border-right: 3px solid white; /* Cursor effect */
        overflow: hidden;
        animation: typing 4s steps(10, end) forwards,
          blink-caret 0.75s step-end infinite;
      }

      @keyframes typing {
        from {
          width: 0;
        }
        to {
          width: 10ch;
        }
      }

      @keyframes blink-caret {
        from,
        to {
          border-color: transparent;
        }
        50% {
          border-color: white;
        }
      }

      .greeting {
        font-size: 2rem;
        padding-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
      }

      .name {
        font-size: 1.5rem;
        margin-top: 10px;
      }

      img {
        width: 100px; 
        margin-top: 20px;
      }

      ul {
        list-style-type: none;
        padding: 0;
        margin: 20px 0 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        padding-bottom: 20px;
      }

li {
    background: rgba(255, 255, 255, 0.5);
    padding: 20px;
    border-radius: 8px;
    transition: transform 0.3s, background-color 0.3s;
    position: relative;
}

li:hover {
    transform: scale(1.05);
    background: rgba(255, 255, 255, 0.8);
    color: black;
    font-weight: bold;
}

li:hover img {
    display: block;
}

.hover-image {
    display: none;
    position: absolute; 
    bottom: 90%; 
    left: 50%;
    transform: translateX(-50%);
    max-width: 150px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


      .counter {
        font-family: "Courier New", monospace;
        font-size: 16px;
        color: #00ff00;
        background-color: black;
        padding: 10px;
        border: 2px solid #00ff00;
        display: inline-block;
        margin-bottom: 20px;
        border-radius: 12px;
      }
    </style>
  </head>
  <body>
    <div class="greeting">Hello and welcome to</div>
    <h1>S4RAH.dev</h1>
    <div class="name">I'm Sarah</div>
    <img src="sarah500.png" alt="Sarah's head" />
    <div class="name">These are my links:</div>
<ul>
    <li>
        <a href="https://designkitchen.dev/" class="hover-link">Design & Development Services</a>
        <img src="dk.png" alt="Hover Image" class="hover-image">
    </li>  
    <li>
        <a href="https://urpfp.com/">Ur new PFP!</a>
        <img src="pfp.png" alt="UrPFP.com" class="hover-image">
    </li> 
    <li>
        <a href="https://s4rah.com">My Clothing Designs</a>
        <img src="clothes.png" alt="s4rah.com" class="hover-image">
    </li> 
    <li>
        <a href="https://www.amazon.com/Gluten-Free-Deliciously-Private-Mouthwatering-Cuisine/dp/B0CH25NF5F/ref=tmm_pap_swatch_0?_encoding=UTF8&dib_tag=se&dib=eyJ2IjoiMSJ9.obgk0uBMH5SN2PDJsJhUHXkia_TeHIYaE3xvD7jch24sB3_RdjY8Lfh1OgwaKylzDZudM3nRcUHEQUooGpW_6BsfNtBjFgRQwfUJtf235RDSJbPvXmmR2BtcERBO9YdFWQc3ffUzvUw2Wa4UdajLgrpJ2Qg32_k3OI6OROuK-puVm3nUDmZU7l6sem7a_CPYVwodQAhw4CCgOwOhDoK_6CzvHo4rYWJfX57AwIMxMok.uY4ynZI8RDoAFg5Wi2WLvpn1KKD_8Eiyk0dwu7dNdhE&qid=1727224235&sr=8-1">My Cookbook</a>
        <img src="cookbook.png" alt="cookbook" class="hover-image">
    </li> 
    <li>
        <a href="https://chefsarah.ca/">Food Blog</a>
        <img src="chfsrh.png" alt="chefsarah.ca" class="hover-image">
    </li> 
    <li>
        <a href="https://evcomech.com/">Plumbing Services</a>
        <img src="evco.png" alt="evcomech.com" class="hover-image">
    </li> 
    <li>
        <a href="https://webchef.dev/">My Desktop</a>
        <img src="desktop.png" alt="webchef.dev" class="hover-image">
    </li> 

</ul>



    <div class="counter">
      <?php
      $file = "counter.txt";
      if (!file_exists($file)) {
          file_put_contents($file, "0");
      }
      $count = (int)file_get_contents($file);
      $count++;
      file_put_contents($file, $count);
      echo "Visitor Count: " . $count;
      ?>
    </div>

    <script src="./oneko.js"></script>
   
  </body>
</html>
