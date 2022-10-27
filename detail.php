<!DOCTYPE html>
<html lang="en">
<?php
require_once('./header.php')
?>

<body>
  <?php require_once('./heading.php');
  $id = $_GET['id'];
  $data = json_decode('[
    {
    "courseID": "COSC2413",
    "title": "Web Programming",
    "creditPoints": 12,
    "career": "Undergraduate",
    "coordinator": "Dr. Hai Dong",
    "enrolledStudents": [
      {
          "studentID": "s1234567",
          "firstName": "Frank",
          "lastName": "Kendall",
          "mobilePhone": "0412345678"
      },
      {
          "studentID": "s7654321",
          "firstName": "Shelley",
          "lastName": "Tucker",
          "mobilePhone": "0487654321"
      },
      {
          "studentID": "s3123456",
          "firstName": "Leonard",
          "lastName": "Odonnell",
          "mobilePhone": "0412341234"
      }
      ]
    }
  ]')

  ?>
  <?php
  $item;
  foreach ($data as $i) {
    if (((array)$i)["courseID"] == $id) {
      $item = (array)$i;
    }
  }

  ?>

  <div class="detail">
    <div class="detail__avatar-course">
      <i class="fas fa-chalkboard"></i>
    </div>
    <div class="detail__info">
      <div class="title-2">
        Title: <?php echo " " . $item['title'] ?>
      </div>
      <div class="creditPoints">
        CreditPoints: <?php echo " " . $item['creditPoints'] ?>
      </div>
      <div class="career-2">
        Career: <?php echo " " . $item['career'] ?>
      </div>
      <div class="coordinator">
        Coordinator: <?php echo " " . $item['coordinator'] ?>
      </div>
    </div>
    <div class="detail_student">
      <?php
      $data2 = $item['enrolledStudents'];
      foreach ($data2 as $student)
        echo ' 
            <div class="student">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
              <div class="right">
                <div>
                  studentID: ' . ((array)$student)['studentID'] . '
                </div>
                <div>
                  firstName: ' . ((array)$student)['firstName'] . '
                </div>
                <div>
                  lastName: ' . ((array)$student)['lastName'] . '
                </div>
                <div>
                  mobilePhone: ' . ((array)$student)['mobilePhone'] . '
                </div>
              </div>
          </div>'
      ?>
    </div>
  </div>

  <?php
  require_once('./footer.php')
  ?>
</body>

</html>
