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
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 8px;
        transition: transform 0.3s;
      }

      li:hover {
        transform: scale(1.05); 
        background: rgba(255, 255, 255, 0.469);
        color: black;
        font-weight: bold;
      }

      .counter {
        font-family: "Courier New", monospace;
        font-size: 16px;
        color: #00ff00;
        background-color: black;
        padding: 10px;
        border: 2px solid #00ff00;
        display: inline-block;
      }
    </style>
  </head>
  <body>
    <div class="greeting">Hello and welcome to</div>
    <h1>S4RAH.dev</h1>
    <div class="name">I'm Sarahh</div>
    <img src="sarah500.png" alt="Sarah's head" />

    <ul>
      <li>Design & Development Serves</li>
      <li>Ur new PFP!</li>
      <li>Food Blog</li>
      <li>Plumbing Services</li>
      <li>My Desktop</li>
      <li>Item 6</li>
      <li>Item 7</li>
      <li>Item 8</li>
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
