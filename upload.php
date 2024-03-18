<?php
if (isset($_POST) && !empty($_POST)) {
    require ("db.php");
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    $data = [
        ':title' => $_POST["title"],
        ':first_name' => $_POST["first_name"],
        ':last_name' => $_POST["last_name"],
        ':description' => $_POST["description"],
        ':email' => $_POST["email"],
        ':phone_no' => $_POST["phone_no"],
        ':location' => $_POST["location"],
        ':created_at' => date('Y-m-d H:i:s'),
        ':worker_id' => 1,
    ];
    $sql = "INSERT INTO complaint (title ,first_name,last_name, description,email , phone_no , location , created_at,worker_id ) VALUES (:title, :first_name, :last_name, :description ,:email ,:phone_no ,:location , :created_at,:worker_id)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $insert_id = $conn->lastInsertId();
    if ($insert_id > 0) {
        $targetDir = "uploads/";
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        $fileNames = array_filter($_FILES['images']['name']);
        if (!empty($fileNames)) {
            foreach ($_FILES['images']['name'] as $key => $val) {
                // File upload path 
                $info = pathinfo($_FILES['images']['name'][$key]);
                $ext = $info['extension'];
                $fileName = str_replace(array(".", " "), "", microtime()) . "." . $ext;
                $targetFilePath = $targetDir . $fileName;
                // Check whether file type is valid 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                if (in_array($fileType, $allowTypes)) {
                    if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFilePath)) 
                    {
                        $insert = $conn->query("INSERT INTO complaint_images (complaint_id, type,  image) VALUES ($insert_id, 'Before', '{$fileName}')");
                    }
                }
            }
        }
    }
    header('Location: thank-you.html');
}
?>