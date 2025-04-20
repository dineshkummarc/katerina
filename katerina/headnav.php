  <div class="row">
  <div id="katerina-menu">
    <ul>
    <strong>
      <li class="active" ><a style="width:185px" href="<?php echo web_root; ?>index.php" accesskey="1" title="">HOME</a></li>
      <li><a style="width:263px" href="<?php echo web_root; ?>index.php?page=2" accesskey="2" title="">MENU</a></li>          
    
      <li><a style="width:249px" align="right" href="index.php?page=5" accesskey="4" title="">CUSTOMER CARE</a></li>
	  <li><a style="width:249px" align="right" href="index.php?page=3" accesskey="4" title="">ABOUT</a></li>
	
      <li><a align="center" width="30%"href="<?php echo web_root; ?>index.php?page=6"  accesskey="4"  class="img-cart" title=""><span class="glyphicon glyphicon-shopping-cart"></span><?php
               $countcart =isset($_SESSION['katerina_cart'])? count($_SESSION['katerina_cart']) : "0";
              echo $countcart;


                 ?></a></li>
				 
   
    </strong>
    </ul>
 
</div> 
  </div>