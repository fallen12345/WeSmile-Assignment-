
<?php
 include("navbar.php");
?>
  <?php 
      
    // Connection to Database.   
    require_once "connect.php"; 
  
    $limit = 10;  // Number of entries to show in a page. 
    // Look for a GET variable page if not found default is 1.      
    if (isset($_GET["page"])) {  
      $pn  = $_GET["page"];  
    }  
    else {  
      $pn=1;  
    };   
  
    $start_from = ($pn-1) * $limit;   
  
    $sql = "SELECT * FROM feedback LIMIT $start_from, $limit";   
    $rs_result = mysqli_query ($db,$sql);  
  
  ?> 
  <div class="container"> 
    <br> 
    <div> 
      <h1>Feedback</h1> 
      <p>Please Give Us Your Feedback</p> 
      <table class="table table-striped table-condensed table-bordered"> 
        <thead> 
        <tr> 
           
          <th>Nickname</th> 
          <th>Date</th> 
          <th>Feedback</th> 
          
        </tr> 
        </thead> 
        <tbody> 
        <?php   
          while ($row = mysqli_fetch_array($rs_result)) {  
                  // Display each field of the records.  
        ?>   
        <tr>   
          <td><?php echo $row["nick"]; ?></td>   
          <td><?php echo $row["date"]; ?></td> 
          <td><?php echo $row["feedback"]; ?></td> 
                
        </tr>   
        <?php   
        };   
        ?>   
        </tbody> 
      </table> 
      <ul class="pagination"> 
      <?php   
        $sql = "SELECT COUNT(*) FROM feedback";   
        $rs_result = mysqli_query($db,$sql);   
        $row = mysqli_fetch_row($rs_result);   
        $total_records = $row[0];   
          
        // Number of pages required. 
        $total_pages = ceil($total_records / $limit);   
        $pagLink = "";                         
        for ($i=1; $i<=$total_pages; $i++) { 
          if ($i==$pn) { 
              $pagLink .= "<li class='active'><a href='displayfb.php?page="
                                                .$i."'>".$i."</a></li>"; 
          }             
          else  { 
              $pagLink .= "<li><a href='displayfb.php?page=".$i."'> 
                                                ".$i."</a></li>";   
          } 
        };   
        echo $pagLink;   
      ?> 
      </ul> 
    </div> 
  </div> 
<?php
include("footer.php");
?>