#!/usr/local/bin/php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Radiant Reflections Photography</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header>
      <h1>Radiant Reflections Photography</h1>
      <nav>
        <ul class="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="services.html"> Services</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html"> <B> Contact</B></a></li>
        </ul>
      </nav>
    </header>

    <img id="main" src="island3.png" alt="picture of island"> 
    <div class="container">
        <div class="content">
          <h2>Let's Connect</h2>
          <p> If you are ready to book a session, or need more information, please feel free to fill out the contact form below! If you'd like to chat on the phone instead, we can do that too! I want to hear your story and help you create lasting memories! Thank you for your interest in Jackie Tran Photography, I can't wait to speak with you! 
<br>
<br>
            <a href="mailto:jackietranphoto@gmail.com" class="button">Email me</a>
        </div>
      </div>

<section>

<h1>Blog Posts</h1>
    </header>
    <form method="POST" action="posts.php">
      <label for="author">Author:</label> 
      <input type="text" id="author" name="author" >
      <br>
      <label for="content">Content:</label> 
      <textarea id="content" name="content"></textarea>
      <input type="submit" id="Post" name="Post" value="Post">
</form>


  <h2>Posts by other users:</h2>
  <p>
        <?php
       if(file_exists('posts.txt')){
            readfile('posts.txt');
          }
       
        ?>
  </p>
</section>
    
  </body>

    <footer>
        <hr>
        <p> <small>&copy 2023 Megan Tieu. <br> This is the unofficial webpage for Jackie Tran Photography, which is a small business that already has a website at https://jackie-tran-photography8.webnode.page/. The website you are currently on is simply a redesign of it. </small></p>
    </footer>

</html>

