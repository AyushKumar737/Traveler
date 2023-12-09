<?php
include('connection.php');

if (isset($_POST['update'])) {
    $post_id = $_POST['post_id'];

    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $old_filename = $_POST['old_image'];
    $image = $_FILES['image']['name'];
    $targetDir = "./img/"; 
    if(!empty($image))
    {
            $fileName = basename($_FILES['image']['name']); 
            $targetFilePath = $targetDir . $fileName; 
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){ 
                
                $update_filename =$fileName; 
            }
        
    }else {
        $update_filename = $old_filename;
    }

    //$update_filename = "";
    $place = $_POST['place'];
    $days = $_POST['days'];
   /* if ($image != NULL) {
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_extension;
        $update_filename = $filename;
    } else {
        $update_filename = $old_filename;
    }*/

    //package details
    $old_filename1 = $_POST['old_image1'];
    $image1 = $_FILES['image1']['name'];
    if(!empty($image1))
    {
            $fileName2 = basename($_FILES['image1']['name']); 
            $targetFilePath2 = $targetDir . $fileName2; 
            if(move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFilePath2)){ 
                
                $update_filename1 = $fileName2; 
            }
        
    }else {
        $update_filename1 = $old_filename1;
    }
    //echo $update_filename1; die;
   // $update_filename1 = "";
    $name1 = $_POST['name1'];
    $desc1 = $_POST['desc1'];
    /*if ($image1 != NULL) {
        $image_extension1 = pathinfo($image1, PATHINFO_EXTENSION);
        $filename1 = time() . '.' . $image_extension1;
        $update_filename1 = $filename1;
    } else {
        $update_filename1 = $old_filename1;
    }*/


    $image2 = $_POST['image2'];
    $old_filename2 = $_POST['old_image2'];
    $image2 = $_FILES['image2']['name'];
    if(!empty($image2))
    {
            $fileName3 = basename($_FILES['image2']['name']); 
            $targetFilePath3 = $targetDir . $fileName3; 
            if(move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFilePath3)){ 
                
                $update_filename2 = $fileName3; 
            }
        
    }else {
        $update_filename2 = $old_filename2;
    }
    //$update_filename2 = "";
    $name2 = $_POST['name2'];
    $desc2 = $_POST['desc2'];
    /*if ($image2 != NULL) {
        $image_extension2 = pathinfo($image2, PATHINFO_EXTENSION);
        $filename2 = time() . '.' . $image_extension2;
        $update_filename2 = $filename2;
    } else {
        $update_filename2 = $old_filename2;
    }*/

    $old_filename3 = $_POST['old_image3'];
    $image3 = $_FILES['image3']['name'];
     if(!empty($image3))
    {
            $fileName4 = basename($_FILES['image3']['name']); 
            $targetFilePath4 = $targetDir . $fileName4; 
            if(move_uploaded_file($_FILES["image3"]["tmp_name"], $targetFilePath4)){ 
                
                $update_filename3 = $fileName4; 
            }
        
    }else {
        $update_filename3 = $old_filename3;
    }
    $name3 = $_POST['name3'];
    $desc3 = $_POST['desc3'];
    /*if ($image3 != NULL) {
        $image_extension3 = pathinfo($image3, PATHINFO_EXTENSION);
        $filename3 = time() . '.' . $image_extension3;
        $update_filename3 = $filename3;
    } else {
        $update_filename3 = $old_filename3;
    }
*/

    $old_filename4 = $_POST['old_image4'];
    $image4 = $_FILES['image4']['name'];
    if(!empty($image4))
    {
            $fileName5 = basename($_FILES['image4']['name']); 
            $targetFilePath5 = $targetDir . $fileName5; 
            if(move_uploaded_file($_FILES["image4"]["tmp_name"], $targetFilePath5)){ 
                
                $update_filename4 = $fileName5; 
            }
        
    }else {
        $update_filename4 = $old_filename4;
    }
    //$update_filename4 = "";
    $name4 = $_POST['name4'];
    $desc4 = $_POST['desc4'];
    /*if ($image4 != NULL) {
        $image_extension4 = pathinfo($image4, PATHINFO_EXTENSION);
        $filename4 = time() . '.' . $image_extension4;
        $update_filename4 = $filename4;
    } else {
        $update_filename4 = $old_filename4;
    }*/


    $old_filename5 = $_POST['old_image5'];
    $image5 = $_FILES['image5']['name'];
    if(!empty($image5))
    {
            $fileName6 = basename($_FILES['image5']['name']); 
            $targetFilePath6 = $targetDir . $fileName6; 
            if(move_uploaded_file($_FILES["image5"]["tmp_name"], $targetFilePath6)){ 
                
                $update_filename5 = $fileName6; 
            }
        
    }else {
        $update_filename5 = $old_filename5;
    }
    $name5 = $_POST['name5'];
    $desc5 = $_POST['desc5'];
    //$update_filename5 = "";
    
    $old_filename6 = $_POST['old_image6'];
    $image6 = $_FILES['image6']['name'];
    
    if(!empty($image6))
    {
            $fileName7 = basename($_FILES['image6']['name']); 
            $targetFilePath7 = $targetDir . $fileName7; 
            if(move_uploaded_file($_FILES["image6"]["tmp_name"], $targetFilePath7)){ 
                
                $update_filename6 = $fileName7; 
            }
        
    }else {
        $update_filename6 = $old_filename6;
    }
    /*if ($image5 != NULL) {
        $image_extension5 = pathinfo($image5, PATHINFO_EXTENSION);
        $filename5 = time() . '.' . $image_extension5;
        $update_filename5 = $filename5;
    } else {
        $update_filename5 = $old_filename5;
    }*/


    //$update_filename6 = "";
    $name6 = $_POST['name6'];
    $desc6 = $_POST['desc6'];
    /*if ($image6 != NULL) {
        $image_extension6 = pathinfo($image6, PATHINFO_EXTENSION);
        $filename6 = time() . '.' . $image_extension6;
        $update_filename6 = $filename6;
    } else {
        $update_filename6 = $old_filename6;
    }*/




    $query = "UPDATE add_package SET pname='$pname', price='$price', image='$update_filename', place='$place', days='$days', image1='$update_filename1', name1='$name1', description1='$desc1', image2=' $update_filename2', name2='$name2', description2='$desc2', image3=' $update_filename3', name3='$name3', description3='$desc3', image4=' $update_filename4', name4='$name4', description4='$desc4', image5=' $update_filename5', name5='$name5', description5='$desc5', image6=' $update_filename6', name6='$name6', description6='$desc6' WHERE Id='$post_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if ($image != NULL) {
            if (file_exists('img/' . $old_filename)) {
                unlink("'img/'.$old_filename");
            }
            move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $update_filename);
        }
        move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$update_filename);
        move_uploaded_file($_FILES['image1']['tmp_name'], 'img/'.$update_filename1);
        move_uploaded_file($_FILES['image2']['tmp_name'], 'img/'.$update_filename2);
        move_uploaded_file($_FILES['image3']['tmp_name'], 'img/'.$update_filename3);
        move_uploaded_file($_FILES['image4']['tmp_name'], 'img/'.$update_filename4);
        move_uploaded_file($_FILES['image5']['tmp_name'], 'img/'.$update_filename5);
        move_uploaded_file($_FILES['image6']['tmp_name'], 'img/'.$update_filename6);
        $_SESSION['message'] = "package updated succesfully";
        header('Location: admin-view-details.php?Id=' . $post_id);
        exit(0);
    } else {
        $_SESSION['message'] = "package not added succesfully";
        header('Location: admin-table-package-edit.php?id=' . $post_id);
        exit(0);
    }
}
