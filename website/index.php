
<html>
    <head>
        <title>POZOS</title>
    </head>

    <body>
        <h1>Student Checking App</h1>
        <ul>
            <form action="http://localhost:5000/pozos/api/v1.0/get_student_ages" method="POST">
                <p>Nom: <input type="text" name="student_name" required/></p>
                <p>Age: <input type="text" name="student_age" required/></p>
                <p><input type="submit" value="Ajouter un nom"/></p>
            </form>

            <?php
              $username = 'toto';
              $password = 'python';
              if ( empty($username) ) $username = 'toto';
              if ( empty($password) ) $password = 'python';
              $context = stream_context_create(array(
                "http" => array(
                "header" => "Authorization: Basic " . base64_encode("$username:$password"),
              )));
              
              $url = 'http://api:5000/pozos/api/v1.0/get_student_ages';
              $list = json_decode(file_get_contents($url, false, $context), true);
              echo "<p style='color:red;; font-size: 20px;'>This is the list of the student with age</p>";
              foreach($list["student_ages"] as $key => $value) {
                  echo "- $key are $value years old <br>";
              }
            ?>
        </ul>
    </body>
</html>
