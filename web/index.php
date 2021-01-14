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
    <header class="banner">
      <?php require $root . '/header.php'; ?>
    </header>
    <nav>
      <?php require $root . '/nav.php'; ?>
    </nav>
    <main>
      <h1>About Me</h1>
      <p>Hello. My name is Coty Fivecoat. I am 27. I live in Salt Lake City. I currently work as a Software Development Engineer at a cybersecurity start up, but we were recently aquired.
      I don't have very much experience with Web Development, other than the Python frameworks Flask & FastAPI, though it has been my job for a couple of weeks now. I actually got this job because I worked on 
      the Operations team & managed to automate in the thousands of hours of various tasks between different teams in my free time with Python. I feel very comfortable with Python, 
      though I feel very uncomfortable with most other languages. I really enjoy writing code & I feel very lucky to be where I am. I was also very lucky to work in an organization 
      young enough to let me have access to all production databases & admin privileges to Jira, both of which I leveraged greatly along with our internal API endpoints. 
      I feel like I would try & code on my own, but would have a hard time applying things I would learn, but at work I had endless tasks from scaling our customer requests processes, to creating an auto QA process, 
      to aggregating data in a useable way for team leads, to generating daily reports that would find bugs in our data pipeline, to setting up my own web scraper / databases / scripts / browser automators 
      to automate much of the manual tasks in my own work. Python was a great first language to learn becauase you are able to do so much so quickly, though I also feel like I have had a much harder time with Java, 
      C, C++, Rust, PHP, & even JavaScript though it is the next easiest. I spend the vast majority of my free time rock climbing, skiing ( backcountry, XC, & in resort ), trail running, biking, & writing code. 
      I am actually finishing school a little late because I spent quite a few years travelling around just skiing & rock climbing around the United States, Canada & other parts of the world. Though I am not even close to the best developer, 
      I really would like to get good at backend web development & machine learning. I have recently been spending a lot of time learning about finance & investing as well. One last interesting fact about me is that I live in a built out 
      Dodge ProMaster with my wife. I have very low expectations for comfort & I am extremely blessed that my wife shares that as well. 
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