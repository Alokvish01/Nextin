<?php require_once("inc/head.php") ?>
<?php require_once("config/db.php");?>
<?php require_once("inc/nav.php") ?>

<?php 

$stmt = "SELECT * FROM avuserinfodata";
$query = mysqli_query($con, $stmt);

// remember to create a video on already subscribe user in db
?>
<?php if(isset($_GET['err'])){?>
        <div class="alert alert-danger"><?php echo $_GET['err']; ?></div>
    <?php }else if(isset($_GET['msg'])){?>
        <div class="alert alert-success"><?php echo $_GET['msg']; ?></div>
<?php }?>
<div class="table-cont">
    <table class="table table-stripe bd-dark table-hover">
        <thead>
            <th>id</th>
            <th>Username</th>
            <th>Emails</th>
            <th>Mobile</th>
            <th>Massege</th>
            <th>Action</th>
        </thead>
        <tbody>
        <?php while($res = mysqli_fetch_assoc($query)){?>
            <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['user']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><?php echo $res['mobile']; ?></td>
                <td><?php echo $res['massege']; ?></td>
                <td><a href="delete_user.php?id=<?php echo $res['id']; ?>" class="text-danger">Del</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>


