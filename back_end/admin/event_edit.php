<?php
include("connect.php");
$key=$_POST['id'];  
$stmt = $con->prepare("SELECT * FROM events WHERE events_id = ?");
$stmt->execute(array($key));
$event = $stmt->fetch();
if(!empty($event)){ ?>
<div class="form-group ">
    <h4>اسم المهمة</h4>
    <input type="text" name="name"  placeholder=" اسم المهمة" value="<?php echo $event['events_name'];?>" class="form-control inputName " required>
</div>
<div class="form-group ">
    <h4>تفاصيل المهمة</h4>
    <textarea class="form-control" name="description" style="height: 150px;" required><?php echo $event['events_description'];?></textarea>
</div>

<div class="form-group">
<h4>تاريخ المهمة</h4>
<input type="date" name="date"  placeholder="تاريخ المهمة" required class="form-control inputName " value="<?php echo $event['events_date'];?>">
</div>

<div class="form-group">
<h4>ميعاد المهمة</h4>
<input type="time" name="time"  placeholder="ميعاد المهمة" required class="form-control inputName " value="<?php echo $event['events_time'];?>">
</div>
<?php 
} else{
    echo '<h2>المهمه غير موجود</h2>';
}