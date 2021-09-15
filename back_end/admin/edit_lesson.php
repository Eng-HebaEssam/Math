<?php
include("connect.php");
$key=$_POST['id'];  
$stmt = $con->prepare("SELECT * FROM lessons WHERE lesson_id = ?");
$stmt->execute(array($key));
$lesson = $stmt->fetch();
if(!empty($lesson)){ ?>
<div class="form-group ">
    <h4>عنوان الدرس</h4>
    <input type="text" name="name" placeholder="اسم الدرس" class="form-control" required value="<?php echo $lesson['lesson_name']; ?>">
</div>
<div class="form-group ">
    <h4>وصف الدرس</h4>
    <textarea name="description" class="form-control" style="height: 100px;" required ><?php echo $lesson['lesson_description']; ?></textarea>
</div>
<div class="form-group ">
    <h4>الفيديو</h4>
    <textarea name="video" class="form-control" style="height: 100px;" required ><?php echo $lesson['video']; ?></textarea>
</div>
<div class="form-group ">
    <h4>ورق الشرح</h4>
    <textarea name="pdf" class="form-control"  style="height: 100px;" required><?php echo $lesson['pdf']; ?></textarea>
</div>
<div class="form-group ">
    <h4>  اظهار الدرس :</h4>
    <div class="im" style="margin-top: 15px;">
        <input id="vis-yes" type="radio" name="approve" value="0" checked style="width:20px;height:20px;"/>
        <label for="vis-yes"  style="font-size: 20px;margin-right: 10px;">لا</label> 
    </div>
    <div class="im" style="margin-top: 15px;">
        <input id="vis-no" type="radio" name="approve" value="1" style="width:20px;height:20px;"/>
        <label for="vis-no" style="font-size: 20px; margin-right: 10px;">نعم</label> 
    </div>
</div>
<?php 
} else{
    echo '<h2>هذا الدرس غير موجود</h2>';
}