<?php
include_once("../../Library/db.php");
function addUser($user){
    $query="INSERT INTO Registration (Username, Name, ID, Email, Password) VALUES('$user[username]','$user[name]','$user[id]','$user[email]','$user[password]')";
    $query2="INSERT INTO `login` (Username, Password) VALUES('$user[username]','$user[password]')";
        executeNonQuery($query2);
    return executeNonQuery($query);
}
function editUser($user){
    $query="UPDATE users SET name='$user[name]',phone='$user[phone]' WHERE id=$user[id]";
    return executeNonQuery($query);
}
function deleteUser($id){
    $query="DELETE FROM Registration WHERE Username = '$id' ";
    $query2="DELETE FROM Login WHERE Username='$id'";
    executeNonQuery($query2);
    return executeNonQuery($query);
    
}
function getUserForLogin($un,$pw){
    $query="SELECT * FROM login WHERE username='$un' AND password='$pw'";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=mysqli_fetch_assoc($result);
    }
    return $user;
}
function User($uname)
{
    $query="SELECT * FROM Registration WHERE username='$uname';";
    $result=executeQuery($query);
    $user2=null;
    if($result){
        
        $user2=mysqli_fetch_assoc($result);
    }
    return $user2;
    
}
function passwordChange($newpass,$sl)
{
    $query="UPDATE Registration SET password='$newpass' WHERE SL = '$sl'";
    return executeNonQuery($query);

}
function userUpdate($un,$name,$id,$email,$sl)
{
    $query="UPDATE Registration SET Name='$name',ID='$id',Email='$email' WHERE SL= '$sl'";
    return executeNonQuery($query);
}
function userNames()
{
$query="SELECT * FROM Registration;";
    $result=executeQuery($query);
    $userList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) { 
           $userList[$i]=$row;
       }
    }
    return $userList;
}

function bookAdd($book)
{
    $sql = "INSERT INTO books (Name, Author,Edition,Price,User,Image,Dir,Phone,Email,Description) VALUES ('$book[name]','$book[author]','$book[edition]','$book[price]','$book[user]','$book[filename]','$book[img_dir]','$book[phone]','$book[email]','$book[description]')";
    return executeNonQuery($sql);
}
function Books($uname)
{
    $image_query = "select * from books where Approval = 'yes'";
    $result=executeQuery($image_query);
    $bookList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) { 
           $bookList[$i]=$row;
       }
    }
    return $bookList;
}
function pendingBooks()
{
    $image_query = "select * from books where Approval = 'no'";
    $result=executeQuery($image_query);
    $bookList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) { 
           $bookList[$i]=$row;
       }
    }
    return $bookList;
}
function Book($id)
{
    $query="SELECT * FROM books WHERE SL = '$id'";
    $result=executeQuery($query);
    $book=null;
    if($result){
        $book=mysqli_fetch_assoc($result);
    }
    return $book;
}
function bookUpdate($book)
{
    $sql = "UPDATE books set Name = '$book[name]', Author = '$book[author]', Edition ='$book[edition]', Price='$book[price]', Image='$book[filename]', Dir = '$book[img_dir]', Phone = '$book[phone]', Email = '$book[email]', Description='$book[description]' WHERE SL = '$book[id]'";
    return executeNonQuery($sql);
}
function bookApprove($id)
{
    $sql = "UPDATE books set Approval = 'yes' WHERE SL = '$id'";
    return executeNonQuery($sql);
}
function deleteBook($id)
{
    $query="DELETE FROM books WHERE SL = '$id'";
    return executeNonQuery($query);
}
//FLAT/////////////////////////////


function flatAdd($flat)
{
    $sql = "INSERT INTO flats (User, Type, Road, House, Area, Rent, AvailableFrom, Description, Image, Dir) VALUES ('$flat[user]','$flat[type]','$flat[road]','$flat[house]','$flat[area]','$flat[rent]','$flat[availableFrom]','$flat[description]','$flat[filename]','$flat[img_dir]')";
    return executeNonQuery($sql);
}
function Flats()
{
    $image_query = "select * from flats where Approval = 'yes'";
    $result=executeQuery($image_query);
    $flatList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) { 
           $flatList[$i]=$row;
       }
    }
    return $flatList;
}
function Flat($id)
{
    $query="SELECT * FROM flats WHERE SL = '$id'";
    $result=executeQuery($query);
    $book=null;
    if($result){
        $book=mysqli_fetch_assoc($result);
    }
    return $book;
}
function flatUpdate($flat)
{
    $sql = "UPDATE flats set Type = '$flat[type]', road = '$flat[road]', house ='$flat[house]', area='$flat[area]', Image='$flat[filename]', Dir = '$flat[img_dir]', rent = '$flat[rent]', availableFrom = '$flat[availableFrom]', Description='$flat[description]' WHERE SL = '$flat[id]'";
    return executeNonQuery($sql);
}
function deleteFlat($id)
{
    $query="DELETE FROM flats WHERE SL = '$id'";
    return executeNonQuery($query);
}
function pendingFlats()
{
    $image_query = "select * from flats where Approval = 'no'";
    $result=executeQuery($image_query);
    $bookList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) { 
           $bookList[$i]=$row;
       }
    }
    return $bookList;
}
function flatApprove($id)
{
    $sql = "UPDATE flats set Approval = 'yes' WHERE SL = '$id'";
    return executeNonQuery($sql);
}
//flatttttttttttttttttttt


//Counseling///////////////////////////



function studentAdd($flat)
{
    $sql = "INSERT INTO flats (User, Type, Road, House, Area, Rent, AvailableFrom, Description, Image, Dir) VALUES ('$flat[user]','$flat[type]','$flat[road]','$flat[house]','$flat[area]','$flat[rent]','$flat[availableFrom]','$flat[description]','$flat[filename]','$flat[img_dir]')";
    return executeNonQuery($sql);
}
function Students()
{
    $query = "select * from Counseling";
    $result=executeQuery($query);
    $studentList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) { 
           $studenList[$i]=$row;
       }
    }
    return $studenList;
}
function Student($id)
{
    $query="SELECT * FROM flats WHERE SL = '$id'";
    $result=executeQuery($query);
    $book=null;
    if($result){
        $book=mysqli_fetch_assoc($result);
    }
    return $book;
}
function studentUpdate($book)
{
    $sql = "UPDATE books set Name = '$book[name]', Author = '$book[author]', Edition ='$book[edition]', Price='$book[price]', Image='$book[filename]', Dir = '$book[img_dir]', Phone = '$book[phone]', Email = '$book[email]', Description='$book[description]' WHERE SL = '$book[id]'";
    return executeNonQuery($sql);
}
function deleteStudent($id)
{
    $query="DELETE FROM flats WHERE SL = '$id'";
    return executeNonQuery($query);
}

//Counseling End//////////////////////
function Altruist($id)
{
    $query="SELECT * FROM Counseling WHERE SL = '$id'";
    $result=executeQuery($query);
    $altruist=null;
    if($result){
        $altruist=mysqli_fetch_assoc($result);
    }
    return $altruist;
}
function altruistAdd($name,$dep,$pCourse,$time,$user)
{
     $sql = "INSERT INTO counseling (`Name`, `Department`, `PreCourse`, `Time`, `User`) VALUES ('$name', '$dep', '$pCourse', '$time', '$user')";
    return executeNonQuery($sql);
}
function deleteAltruist($id)
{
    $query="DELETE FROM counseling WHERE SL = '$id'";
    return executeNonQuery($query);
}
function altruistUpdate($name,$dep,$pCourse,$time,$user,$id)
{
    $sql="UPDATE `counseling` SET `Name`= '$name',`Department`='$dep',`PreCourse`='$pCourse',`Time`='$time',`User`='$user' WHERE SL = '$id'";
     return executeNonQuery($sql);

}

############################################################
#Resource###########################################################
function resourceUp($filename,$img_dir,$title,$type,$course,$dep)
{
    $sql = "INSERT INTO `resources` (name,dir,title,type,course,Department)  VALUES ('$filename','$img_dir','$title','$type','$course','$dep')";
    return executeNonQuery($sql);
}
function Readresources($dep)
{
   $sql = "SELECT * FROM resources WHERE Department = '$dep'";
    $result=executeQuery($sql);
    $rscList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_assoc($result) ; $i++) { 
           $rscList[$i]=$row;
       }
    }
    return $rscList;
}
function rsc($id)
{
        $query="SELECT * FROM resources WHERE SL = '$id'";
    $result=executeQuery($query);
    $rscc=null;
    if($result){
        $rscc=mysqli_fetch_assoc($result);
    }
    return $rscc;
}
function updateRes($filename,$img_dir,$title,$type,$course,$dep,$id)
{
    $sql="UPDATE `resources` SET `Name`= '$filename',`Dir`='$img_dir',`Title`='$title',`Type`='$type',`Course`='$course',`Department`='$dep' WHERE SL = '$id'";
    return executeNonQuery($sql);
}
function rescRemove($id)
{
        $query="DELETE FROM resources WHERE SL = '$id'";
    return executeNonQuery($query);
}
?>