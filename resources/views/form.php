<html>
   <body>
      
      <?php
         echo Form::open(array('url' => 'foo/bar'));
            echo 'Username:';
            echo Form::text('username','Username');
            echo '<br/>';
            
            echo 'Email:';
            echo Form::text('email', 'example@gmail.com');
            echo '<br/>';
     
            echo 'Password:';
            echo Form::password('password');
            echo '<br/>';
            
           //echo Form::checkbox('name', 'value');
           // echo '<br/>';
            
            echo Form::radio('name', '1');
            echo 'Male';
            echo '<br/>';

            echo Form::radio('name', '2');
            echo 'Female';
            echo '<br/>';
            
            echo 'Your Photo:';
            echo Form::file('image');
            echo '<br/>';
            
            echo 'Your Nationality:';
            echo Form::select('nat', array('1' => 'ไทย', '2' => 'พม่า', '3' => 'ลาว'));
            echo '<br/>';
            
            echo Form::submit('SAVE');
         echo Form::close();
      ?>
   
   </body>
</html>