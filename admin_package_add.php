<?php
include('connection.php');

if(isset($_POST['add']))
{
   // echo "<pre>"; print_r($_FILES);die;
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    // $targetDir = "./img/"; 
    $image = $_FILES['image']['name'];
    if(!empty($image))
    {
            $fileName = basename($_FILES['image']['name']); 
            $targetFilePath = $targetDir . $fileName; 
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){ 
                
                $filename = $fileName; 
            }
        
    }
   
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    //$filename = time().'.'.$image_extension;
    $place = $_POST['place'];
    $days = $_POST['days'];

    $image1 = $_FILES['image1']['name'];
    if(!empty($image1))
    {
            $fileName1 = basename($_FILES['image1']['name']); 
            $targetFilePath1 = $targetDir . $fileName1; 
            if(move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFilePath1)){ 
                
                $filename1 = $fileName1; 
            }
        
    }
    //echo $filename;die
    /*$image1 = $_FILES['image1']['name'];
    $image_extension1 = pathinfo($image1, PATHINFO_EXTENSION);
    $filename1 = time().'.'.$image_extension1;*/
    $name1 = $_POST['name1'];
    $desc1 = $_POST['desc1'];

    $image2 = $_FILES['image2']['name'];
    if(!empty($image2))
    {
            $fileName2 = basename($_FILES['image2']['name']); 
            $targetFilePath2 = $targetDir . $fileName2; 
            if(move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFilePath2)){ 
                
                $filename2 = $fileName2; 
            }
        
    }
    //$image_extension2 = pathinfo($image2, PATHINFO_EXTENSION);
    //$filename2 = time().'.'.$image_extension2;
    $name2 = $_POST['name2'];
    $desc2 = $_POST['desc2'];

    $image3 = $_FILES['image3']['name'];
    if(!empty($image3))
    {
            $fileName3 = basename($_FILES['image3']['name']); 
            $targetFilePath3 = $targetDir . $fileName2; 
            if(move_uploaded_file($_FILES["image3"]["tmp_name"], $targetFilePath3)){ 
                
                $filename3 = $fileName3; 
            }
        
    }
    //$image_extension3 = pathinfo($image3, PATHINFO_EXTENSION);
    //$filename3 = time().'.'.$image_extension3;
    $name3 = $_POST['name3'];
    $desc3 = $_POST['desc3'];

    $image4 = $_FILES['image4']['name'];
    //$image_extension4 = pathinfo($image4, PATHINFO_EXTENSION);
    //$filename4 = time().'.'.$image_extension4;
    if(!empty($image4))
    {
            $fileName4 = basename($_FILES['image4']['name']); 
            $targetFilePath4 = $targetDir . $fileName4; 
            if(move_uploaded_file($_FILES["image4"]["tmp_name"], $targetFilePath4)){ 
                
                $filename4 = $fileName4; 
            }
        
    }
    $name4 = $_POST['name4'];
    $desc4 = $_POST['desc4'];

    $image5 = $_FILES['image5']['name'];
    if(!empty($image5))
    {
            $fileName5 = basename($_FILES['image5']['name']); 
            $targetFilePath5 = $targetDir . $fileName5; 
            if(move_uploaded_file($_FILES["image5"]["tmp_name"], $targetFilePath5)){ 
                
                $filename5 = $fileName5; 
            }
        
    }
    //$image_extension5 = pathinfo($image5, PATHINFO_EXTENSION);
    //$filename5 = time().'.'.$image_extension5;
    $name5 = $_POST['name5'];
    $desc5 = $_POST['desc5'];

    $image6 = $_FILES['image6']['name'];
    //$image_extension6 = pathinfo($image6, PATHINFO_EXTENSION);
    //$filename6 = time().'.'.$image_extension6;
     if(!empty($image6))
    {
            $fileName6 = basename($_FILES['image6']['name']); 
            $targetFilePath6 = $targetDir . $fileName6; 
            if(move_uploaded_file($_FILES["image6"]["tmp_name"], $targetFilePath6)){ 
                
                $filename6 = $fileName6; 
            }
        
    }
    $name6 = $_POST['name6'];
    $desc6= $_POST['desc6'];

    $query = "INSERT INTO add_package (pname, price, image, place, days, image1, name1, description1, image2, name2, description2, image3, name3, description3, image4, name4, description4, image5, name5, description5, image6, name6, description6) VALUES ('$pname', '$price', '$filename', '$place', '$days', '$filename1', '$name1', '$desc1', '$filename2', '$name2', '$desc2', '$filename3', '$name3', '$desc3', '$filename4', '$name4', '$desc4', '$filename5', '$name5', '$desc5', '$filename6', '$name6', '$desc6')"; 
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
       /* move_uploaded_file($_FILES['image']['tmp_name'], '.img/'.$filename);
        move_uploaded_file($_FILES['image1']['tmp_name'], '.img/'.$filename1);
        move_uploaded_file($_FILES['image2']['tmp_name'], '.img/'.$filename2);
        move_uploaded_file($_FILES['image3']['tmp_name'], 'img/'.$filename3);
        move_uploaded_file($_FILES['image4']['tmp_name'], 'img/'.$filename4);
        move_uploaded_file($_FILES['image5']['tmp_name'], 'img/'.$filename5);
        move_uploaded_file($_FILES['image6']['tmp_name'], 'img/'.$filename6);*/
        $_SESSION['message'] = "package added succesfully";
        header('Location: admin-view-details.php?id='.$pname);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "package not added succesfully";
        header('Location: admin-form.php?id='.$pname);
        exit(0);
    }
}


?>