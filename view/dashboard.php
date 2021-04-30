<?php
include('../controller/dashboard_controller.php');
?>
<!doctype html> 
<html>
   <head>
      <title>Facebook type Notifications system using PHP and Ajax</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      
	  
	    <?php
			include('dashboard_style.php');
		?>
	  
	  
   </head>
   <body style="margin:0;padding:0;">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <div id="notification_box">
         <ul>
            <li id="notifications_container">
               <div id="notifications_counter"><?php echo $unread_count?></div>
               <div id="notifications_button">
                 <button  title="Notifications" > <img src="../bell.png" style=" height: 24px; width: 20px;"></button> 
               
			   </div>
               <div id="notifications">
                  <h3>Notifications</h3>
                  <div style="height:300px;" id="show_notification">
					<?php if($unread_count>0){
						while($row_message=mysqli_fetch_assoc($res_message)){?>
                     <p><strong><?php echo $row_message['name']?></strong> message <?php echo $row_message['message']?></p>
					 <?php } } ?>
                  </div>
               </div>
            </li>
			<li id="notifications_container"><a href="../controller/logout.php">Logout</a></li>
         </ul>
      </div>
      <div id="post">
         <div class="container">
            <div id="post-row" class="row justify-content-center align-items-center">
               <div id="post-column" class="col-md-6">
                  <div id="post-box" class="col-md-12">
                     <form id="post-form" class="form" action="" method="post">
                        <h2 class="text-center text-info">Post Form</h2>
                        <div class="form-group">
                           <label for="user" class="text-info">User:</label><br>
                           <select class="form-control" name="to_id" required>
                              <option value="">Select User</option>
							  <?php while($row_user=mysqli_fetch_assoc($res_user)){?>
                              <option value="<?php echo $row_user['id']?>"><?php echo $row_user['name']?></option>
							  <?php } ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="message" class="text-info">Message:</label><br>
                           <textarea class="form-control" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                           <input type="submit" name="submit" class="btn btn-success" value="Submit">
						   <span style="color:red;"><?php echo $msg?></span>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script>
      $(document).ready(function () {
          $('#notifications_button').click(function () {
              jQuery.ajax({
				url:'../model/update_message_status.php',
				success:function(){
					$('#notifications').fadeToggle('fast', 'linear');
					$('#notifications_counter').fadeOut('slow');
				}
			  })
              return false;
          });
          $(document).click(function () {
              $('#notifications').hide(); 
          });
      });
   </script>
</html>