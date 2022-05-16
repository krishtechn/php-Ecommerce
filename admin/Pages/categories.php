<?Php 
if(isset($_POST["submit"])){
    $categoryname = $_POST["category"];
    if($categoryname == ""){
      echo "<script>alert('Please Add a categories');</script>";
    }else{
       $sel = "SELECT * FROM `categories` where category_title = '$categoryname'";
       $selectresult = mysqli_query($con,$sel);
       $num = mysqli_num_rows($selectresult);

      if($num > 0){
          echo "<script>alert('category already exists');</script>";
      }else{
    //   while($row = mysqli_fetch_assoc($selectresult)){
        //      $ctitle = $row["category_title"];   
        //   }
            $insertsc = "INSERT INTO `categories`(`category_title`) VALUES ('$categoryname')";
             $insertresult = mysqli_query($con,$insertsc);
            if($insertresult){
           echo "<script>alert('category Added');</script>";
         }
     }
 }
 }



?>

<div class="col-xl-12">
          <div class="card p-4">
              <div class="row gy-4">
              <form action="" method="POST">
              <div class="col-md-12">    
                  <input name="category"  type="text" class="form-control" placeholder="Add Category">
                 <br> 
                 <button name="submit" class="btn btn-danger">Add Category</button>
              </div>
               </form>    
                  
                </div>

            </form>
              </div>
          </div>

   