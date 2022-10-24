<?php
  session_start();
  include '../../ErikWeb/database_abstractions.php';
  $link = session_id();
  $db_url = 'mysql41.unoeuro.com';
  $db_login = 'stuspecialisterne_dk';
  $db_pass = 'E5xDbhw62efc';
  $db_database = 'stuspecialisterne_dk_db';
?>

<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <title>Messenger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <form>
      <input 
        type="file" 
        id="myFile" 
        name="filename"
        accept=".json"
        onChange="selectFile()">
        <br>
        <div id="fileResult" style="color: white"></div>
    </form>
  
    <header class="contact">
      <section class="contact--details">
          <h1 class="contact--details__name online">Ida</h1>
      </section>
    </header>
    <section class="messages">
        <section>
            <h3 class="msg--date">Today - 19:44</h3>
            <div class="msg msg--them">
              <blockquote>Hey baby</blockquote>
            </div>
            <div class="msg msg--me">
                <blockquote>Dad! You killed the zombie Flanders!</blockquote>
            </div>
            <div class="msg msg--them">
                <blockquote>He was a zombie?</blockquote>
            </div>
        </section>
        <section>
            <h3 class="msg--date">Yesterday - 08:17</h3>
            <div class="msg msg--them">
                <blockquote>Grrrr WHY YOU LITTLE...</blockquote>
            </div>
            <div class="msg msg--me">
                <blockquote>It was like that when I got here!</blockquote>
            </div>
            <div class="msg msg--them">
                <blockquote>Hehehe, that's my boy</blockquote>
            </div>
        </section>
        <section>
          <div class="msg msg--next">
            <blockquote>Hi there</blockquote>
            <blockquote>whats up?</blockquote>
            <blockquote>hey sexy</blockquote>
          </div>
        </section>
    </section>

    <script type="text/javascript">
      function selectFile() {
        var uploadedFile = document.getElementById('myFile').value;
        //var s = JSON.stringify(uploadedFile);
        //document.getElementById('fileResult').innerHTML = s;
        // var fileBlob = new Blob(uploadedFile);
        // var reader = new FileReader();
        // reader.readAsText(fileBlob);
        console.log(uploadedFile);
      }


    </script>
    <style>
      body {
        background-color: black;

      }

      @import url(https://fonts.googleapis.com/css?family=Varela+Round);

      [class*="fontawesome-"]:before {
        font-family: 'FontAwesome', sans-serif;
      }

      html, body {
          height: 100%;
            font: 100%/1.5em 'Open Sans', sans-serif;
      }

      body {
        flex-direction: column;
      }

      body,header,.msg,.toolbar,form {
          display: flex;
      }

      header, .messages, blockquote {
          padding: .5em;
      }

      header {
          background-color: #f5f5f5;
          color: black;
          line-height: 0.5em;
          width: 50%;
          margin: auto;
      }

      .contact--details__name {
          font-weight: normal;
          font-size: 1.75em;
      }

      .contact--details__tel {
          font-size: .875em;
      }

      .messages,input {
          background-color: white;
          width: 50%;
          margin: auto;
      }

      .msg {
          position: relative;
          margin-bottom: 2em;
      }

      .msg--date {
          margin-top: 0;
          font-size: 1em;
          font-weight: normal;
          text-align: center;
          color: #737376;
      }

      blockquote {
          border-radius: 1em;
          position: relative;
          display: inline-block;
          margin: 0;
          max-width: 60%;
      }

      .msg--me blockquote {
        background-color: #0a81ff;
      }

      .msg--next blockquote {
        background-color: #0a81ff;
      }

      .msg--them blockquote {
        background-color: #e8e8ea; margin-left: 1em;
      }

      .msg--them--loading blockquote {
        background-color: #e8e8ea; margin-left: 1em;
        color: #b6b5b9;
        font-size: x-large;
      }

      .msg--them--loading {
        align-content: center;
      }

      .messages {
        flex: 1; overflow: auto;
      }

      .msg--me {
        justify-content: flex-end; 
        color: white;
      }

      .msg--next {
        justify-content: space-evenly; 
        color: white;
      }

      .msg--next:hover {
        cursor: pointer;
      }

      .msg--me blockquote {
          order: -1;
          margin-right: 1em;
      }

      .msg--dot {
        background-color: #b6b5b9;
        width: 15px;
        height: 15px;
      }

      .msg--them--loading {
        justify-content: flex-start;
        align-content: flex-start;
        flex-wrap: nowrap;
        flex-direction: row;
        gap: 10px;
      }

      .msg--them--loading blockquote {
        align-content: flex-start;
        gap: 10px;
        flex-direction: row;
      }

      .msg--them--loading blockquote div {
        border-radius: 50%;
        display: flex;
      }

      .msg-send {
        padding: 5px;
      }

      .online {
        color: black;
      }

    </style>
  </body>
</html>