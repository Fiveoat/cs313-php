<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/main.css" media="screen">
  <script type="text/javascript" src="/main.js"></script>
  <title>Home Page</title>
</head>

<body>
  <div id="container">
    <header>
      <?php require $root . '/header.php'; ?>
    </header>
    <nav>
      <?php require $root . '/nav.php'; ?>
    </nav>
    <main>
      <h1>About Me</h1>
      <p>Hello. My name is Coty Fivecoat. I am 27. I live in Salt Lake City. I currently work as a Software Development Engineer at a cybersecurity start up. 
      I don't have very much experience with Web Development, though it has been my job for a couple of weeks now. I actually got this job because I worked on 
      the Operations team & managed to automate thousands of hours of various tasks between different teams in my free time with Python. I feel very comfortable with Python, 
      though I feel very uncomfortable with any other languages. I spend the vast majority of my free time rock climbing, skiing ( backcountry, XC, & in resort ), trail running, biking, & writing code. 
      Though I am not the best developer, I really would like to get good at backend web development & machine learning. I also really enjoy going to many countries & participating in outdoor activities there. 
      I have recently been spending a lot of time learning about finance & investing as well. 
      </p>
      <br>
      <button type="button" onclick="getImage()">Click For Random Image</button>
      <div id="x"></div>
    </main>
    <footer>
      <?php require $root . '/footer.php'; ?>
    </footer>
  </div>
</body>

</html>