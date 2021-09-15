<?php
include("connect.php");
$key=$_POST['id'];  
$stmt = $con->prepare("SELECT * FROM post WHERE post_id = ?");
$stmt->execute(array($key));
$post = $stmt->fetch();
if(!empty($post)){ ?>
<div class="form-group ">
    <h4>اسم المنشور</h4>
    <input type="text" name="name"  placeholder=" اسم المنشور" value="<?php echo $post['post_name'];?>" class="form-control inputName " required>
</div>
<div class="form-group ">
    <h4>تفاصيل المنشور</h4>
    <textarea class="form-control" name="description" style="height: 150px;" required><?php echo $post['post_description'];?></textarea>
</div>
<?php 
} else{
    echo '<h2>هذا المنشور غير موجود</h2>';
}