<?php
$con= mysqli_connect("localhost","id2776118_mark","mark1998","id2776118_mark");

$subject = $_POST['postsub'];
   
$mp = 'mp';

echo $subject;  


if(isset($_REQUEST['submit']))
{
    //storing all necessary data into the respective variables.
    
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

  

if(move_uploaded_file ($file_path,'upload/'.$file_name)){

        if($subject == $mp){
            $query=mysqli_query($con,"insert into mp(file) values('$file_name')");
        }else
        {
           $query=mysqli_query($con,"insert into upload(file) values('$file_name')");
        }

 
}

 if($query==true)
{
    echo "File Uploaded";

}
}
?>