<!DOCTYPE html>
<html lang="en">
<?php
require_once('./header.php')

?>

<body>
  <?php require_once('./heading.php');
   $data = json_decode('[{
        "courseID": "COSC2413",
        "title": "Web Programming",
        "creditPoints": 12,
        "career": "Undergraduate",
        "coordinator": "Dr. Hai Dong"
    }]');
   $color = array("#99ccff", "#ff80ff", "#bf80ff", "#aaff80");
  ?>
  <div class="gallery-course">
    <?php 
      foreach($data as $item) {
        $i = (array) $item;
        echo
      '<div class="gallery-course__element"  style ="background:'.$color[rand(0,3)]. ';" >
        <i class="fas fa-chalkboard fa-chalkboard--index "></i>
        <div class="creditPoint">
          ' . (int)$i['creditPoints'] . '
        </div>
        <div class="content">
          <h1 class="title"> ' . $i['title'] . ' </h1>
          <div class="career">
           ' . $i['career'] . '
          </div>
          <div class="coordinator">
            ' . $i['coordinator'] . '
          </div>
        </div>
        <div class="overlay">
          <a href="./detail.php?id=' . $i['courseID'] . '">
            View Detail
          </a>
        </div>
      </div>';
      }
      ?>
  </div>

  <?php require_once('./footer.php')
  ?>
</body>

</html>
