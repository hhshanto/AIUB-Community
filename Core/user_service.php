<?php
include_once("../../data/user_data_access.php");
function addNewUser($un,$name,$id,$email,$pw){
    $user=array("username"=>$un,"name"=>$name,"id"=>$id,"email"=>$email,"password"=>$pw);
    return addUser($user);
}
// function updateUser($id,$name,$phone){
//     $user=array("id"=>$id,"name"=>$name,"phone"=>$phone);
//     return editUser($user);
// }
function removeUser($un){
    return deleteUser($un);
}
function changePass($newpass,$sl)
{
    return passwordChange($newpass,$sl);
}
function loadAllUser(){
    return getAllUser();
}
function loadUserForLogin($un,$pw){
    return getUserForLogin($un,$pw);
}
function Userinfo($uname)
{
    return User($uname);
}
function checkUserName()
{
    return userNames();
}
function updateUser($un,$name,$id,$email,$sl)
{
    return userUpdate($un,$name,$id,$email,$sl);
}

//#######################################################################################
//#######################################################################################
//Book Start/////////////////////////////////////////////////

function addBook($name,$author,$edition,$price,$phone,$email,$description,$img_dir,$filename,$uname){
	$book=array("name"=>$name,"author"=>$author,"edition"=>$edition,"price"=>$price,"phone"=>$phone,"email"=>$email,"description"=>$description,"img_dir"=>$img_dir,"filename"=>$filename,"user"=>$uname);
	  return bookAdd($book);
}
function Bookinfo($uname)
{
	return Books($uname);
	
}
function pendingBookinfo()
{
    return pendingBooks();
    
}
function loadBook($id)
{
   return Book($id);
}
function updateBook($name,$author,$edition,$price,$phone,$email,$description,$img_dir,$filename,$uname,$id)
{
    $book=array("name"=>$name,"author"=>$author,"edition"=>$edition,"price"=>$price,"phone"=>$phone,"email"=>$email,"description"=>$description,"img_dir"=>$img_dir,"filename"=>$filename,"user"=>$uname,"id"=>$id);
    return bookUpdate($book);
}
function approveBook($id)
{
    return bookApprove($id);
}
function removeBookPost($id)
{
    return deleteBook($id);
}
//Book End//////////////////////////////////////////////////

//#######################################################################################
//#######################################################################################

//Flat Start/////////////////////
function addFlat($type,$road,$house,$area,$rent,$available,$description,$img_dir,$filename,$uname){
    $flat=array("type"=>$type,"road"=>$road,"house"=>$house,"area"=>$area,"rent"=>$rent,"availableFrom"=>$available,"description"=>$description,"img_dir"=>$img_dir,"filename"=>$filename,"user"=>$uname);
      return flatAdd($flat);
}
function Flatinfo()
{
    return Flats();
    
}
function loadFlat($id)
{
   return Flat($id);
}
function updateFlat($type,$road,$house,$area,$rent,$available,$description,$img_dir,$filename,$uname,$id)
{
    $flat=array("type"=>$type,"road"=>$road,"house"=>$house,"area"=>$area,"rent"=>$rent,"availableFrom"=>$available,"description"=>$description,"img_dir"=>$img_dir,"filename"=>$filename,"user"=>$uname,"id"=>$id);
    return flatUpdate($flat);
}
function removeFlatPost($id)
{
    return deleteFlat($id);
}
function pendingFlatinfo()
{
    return pendingFlats();
    
}
function approveFlat($id)
{
    return flatApprove($id);
}
//Flat End///////////////////////////////////////////////////

//#######################################################################################
//#######################################################################################

//Counseling Start/////////////////////////////////////////////

function addStudent($type,$road,$house,$area,$rent,$available,$description,$img_dir,$filename,$uname){
    $flat=array("type"=>$type,"road"=>$road,"house"=>$house,"area"=>$area,"rent"=>$rent,"availableFrom"=>$available,"description"=>$description,"img_dir"=>$img_dir,"filename"=>$filename,"user"=>$uname);
      return studentAdd($flat);
}
function Studentinfo()
{
    return Students();
    
}
function loadStudent($id)
{
   return Student($id);
}
function updateStudent($name,$author,$edition,$price,$phone,$email,$description,$img_dir,$filename,$uname,$id)
{
    $book=array("name"=>$name,"author"=>$author,"edition"=>$edition,"price"=>$price,"phone"=>$phone,"email"=>$email,"description"=>$description,"img_dir"=>$img_dir,"filename"=>$filename,"user"=>$uname,"id"=>$id);
    return studentUpdate($book);
}
function removeStudent($id)
{
    return deleteStudent($id);
}


//#######################################################################################
//#######################################################################################
function loadAltruist($id)
{
    return Altruist($id);
}
function addAltruist($name,$dep,$pCourse,$time,$user)
{
    return altruistAdd($name,$dep,$pCourse,$time,$user);
}
function removeAltruist($sl)
{
    return deleteAltruist($sl);
}
function updateAltruist($name,$dep,$pCourse,$time,$user,$id)
{
    return altruistUpdate($name,$dep,$pCourse,$time,$user,$id);
}

//#######################################################################################
//Resource #######################################################################################
function upResource($filename,$img_dir,$title,$type,$course,$dep)
{
  return resourceUp($filename,$img_dir,$title,$type,$course,$dep);
}
function resources($dep)
{
    return Readresources($dep);
}
function Loadresource($id)
{
     return rsc($id);
}
function updateResource($filename,$img_dir,$title,$type,$course,$dep,$id)
{
    return updateRes($filename,$img_dir,$title,$type,$course,$dep,$id);
}
function removeResc($id)
{
    return rescRemove($id);
}
?>