<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Team02</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="script.js"></script>
  </head>
  <body>
    <form id="form" action="Team02.php" method="post">
        <input type="reset"> </br>
          Name: <input type="text" name="Name"> <br/>
          Email: <input type="text" name="Email"> <br/>
          Major: </br>
            <input type="radio" name="Major" value="CS"> Computer Science </br>
            <input type="radio" name="Major" value="Web"> Web Design and Development </br>
            <input type="radio" name="Major" value="CIT"> Computer Information Technology </br>
            <input type="radio" name="Major" value="CE"> Computer Engineering <br/></br>
          Comments: <textarea name="Comments" rows="5" cols="30"></textarea> <br/>
          Where you've been: <br/>
            <input type="checkbox" name="Loc[]" value="NA">North America<br/>
            <input type="checkbox" name="Loc[]" value="SA">South America<br/>
            <input type="checkbox" name="Loc[]" value="Europe">Europe<br/>
            <input type="checkbox" name="Loc[]" value="Asia">Asia<br/>
            <input type="checkbox" name="Loc[]" value="Aust">Australia<br/>
            <input type="checkbox" name="Loc[]" value="Africa">Africa<br/>
            <input type="checkbox" name="Loc[]" value="Antarctica">Antarctica<br/>
        <input type="submit" style="border:auto;">
        <br/><br/><br/>
      </form>
  </body>
</html>