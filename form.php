<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>My test page</title>
  </head>
  <body>
      <p>This is my formular</p>
      <form action="thanks.php" method="post">
          <ul>
             <li>
                <label for="name">Name:</label>
                <input type="text" value="Doe" id="name" name="user_name" required="required"/>
             </li>
             <li>
                <label for="fname">First name:</label>
                <input type="text" value="John" id="fname" name="user_fname" required="required"/>
             </li>
             <li>
                <label for="mail">E-mail:</label>
                <input type="email" value="john.doe@gmail.com" id="mail" name="user_mail" required="required"/>
             </li>
             <li>
                <label for="phone number">Phone number:</label>
                <input type="number" value="06 48 56 23 12" id="number" name="user_number" required="required"/>
             </li>
             <li>
                <label for="subject">Choose your subject</label>
                <select id="subjects" name="subjects">
                  <option value="product">Your product</option>
                  <option value="price">The price</option>
                  <option value="functionment">The functionment</option>
                  <option value="return">The return</option>
                </select>
             </li>
             <li>
               <label for="msg">Message:</label>
               <textarea id="msg" name="user_message">Your message...</textarea>
             </li>
          </ul>
          <div class="button">
             <button type="submit">Send</button>
          </div>
      </form>
  </body>
</html>
