<?php
include("connect.php");
$key=$_POST['id'];  
$stmt = $con->prepare("SELECT * FROM members WHERE userid = ?");
$stmt->execute(array($key));
$user = $stmt->fetch();
if(!empty($user)){ ?>
<div class="form-group ">
    <h4>الاسم</h4>
    <input type="text" name="username" autocomplete="off"  placeholder=" اسم المستخدم " class="form-control inputName " id="Name " value="<?php echo $user['username']; ?>">
</div>
<div class="form-group ">
    <h4>البريد الالكترونى</h4>
    <input type="email" name="email" class="form-control Description"  placeholder="البريد الالكترونى يجب ان يكون صحيح" value="<?php echo $user['email']; ?>">
</div>
<div class="form-group ">
    <h4>رقم الهاتف </h4>
    <input type="tel" name="phone"  class="form-control Description "  placeholder="ادخل رقم الهاتف" value="<?php echo $user['phone']; ?>">
</div>
<div class="form-group ">
    <h4>الصف</h4>
    <select class="custom-select form-control" name="parent">
        <?php 
            $stmt = $con->prepare("SELECT 
                                    category_name, category_id, ordering 
                                    FROM category 
                                    where parent = 0
                                    ");
            $stmt->execute(array());
            $rows = $stmt->fetchAll();
            foreach($rows as $row) {
        ?>
            <option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></option>
        <?php 
            if($row['ordering'] == 6){echo '<option disabled ><hr></option>';}
        } ?>
    </select>
</div>
<?php 
} else{
    echo '<h2>هذا الطالب غير موجود</h2>';
}