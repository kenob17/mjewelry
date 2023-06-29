
<?php 
require_once ('MysqliDb.php');
$db = new MysqliDb ('localhost', 'root', '', 'jewelry_db');


if (isset($_POST['submit'])) {


    $fileNames = array_filter($_FILES['image']['name']); 
    $tempNames = array_filter($_FILES['image']['tmp_name']); 
    $folder_path = Array();

    foreach($fileNames as $file){
        $file = "./images/" . $file;
        array_push($folder_path, $file);
    }

    // $filename = $_FILES["image"]["name"];
    // $tempname = $_FILES["image"]["tmp_name"];
    // $folder = "./images/" . $filename;

    $data = Array(
        "category" => $_POST['category'],
        "description" => $_POST['description'],
        "price" => $_POST['price'],
        "image" => implode(',' , $folder_path)
    );

    $db->insert('items', $data);

    //move the uploaded file to the images folder
    foreach($folder_path as $path){
        $n = 0;
        if (move_uploaded_file($tempNames[$n], $path)) {
            $n++;
        } else {
            echo "<script>alert('Item not uploaded.'); </script>";
        }
    }
    echo "<script>alert('New item uploaded successfully.'); </script>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/269238eb9d.js"
      crossorigin="anonymous"
    ></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="upload.css" />

    <title>Upload</title>
  </head>
<body>
    <div class="form-wrapper d-flex justify-content-center">
        <form class="form" method="POST" enctype="multipart/form-data">
            <p class="title">Upload new item </p>
            <label>
                <input required type="text" name="category" class="input">
                <span>Category</span>
            </label> 
            <label>
                <input required type="text" name="description" class="input">
                <span>Description</span>
            </label> 
            <label>
                <input required type="text" name="price" class="input">
                <span>Price</span>
            </label> 
            <label>
                <input required type="file" name="image[]" class="input" multiple>
            </label> 
            <button class="submit" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>