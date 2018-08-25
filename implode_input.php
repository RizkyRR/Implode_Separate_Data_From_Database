<?php  
    $query = mysqli_query($db,"SELECT * FROM personals ORDER BY person_id DESC");
          while($r = mysqli_fetch_array($query)){
?>
<div class="subheading mb-5">
	<!-- First thing first we have to create variable $data (up to you, you can change it whatever do you want) then use function array() from php. Then we input separate data into array(). There you go -->
    <?php 

        $data = array($r['kota'],$r['provinsi'],$r['negara']);

        echo implode(", ",$data);

    ?>
    <a href="mailto:name@email.com"><?php echo $r['email']; ?></a>
</div>