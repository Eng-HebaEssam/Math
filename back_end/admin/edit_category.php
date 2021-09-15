<?php
include("connect.php");
$key=$_POST['id'];  
$stmt = $con->prepare("SELECT * FROM category WHERE category_id = ?");
$stmt->execute(array($key));
$category = $stmt->fetch();
if(!empty($category)){ ?>
    <div class="form-group ">
        <h4>الاسم</h4>
        <input type="text" name="name"  placeholder=" اسم القسم " value="<?php echo $category['category_name']; ?>" required class="form-control inputName ">
    </div>
    <div class="form-group ">
        <h4>وصف القسم</h4>
        <textarea class="form-control" name="description"  style="height: 100px;"><?php echo $category['category_description']; ?></textarea>
    </div>
<?php 
} else{
    echo '<h2>هذا القسم غير موجود</h2>';
}