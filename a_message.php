<?php 
if (isset($_GET['msg'])){
?>
    <div style="margin-top:10px;">
        <?php echo htmlspecialchars($_GET['msg']); ?>
    </div>
<?php
} else {
?>
    <div style="margin-top:35px;"></div>
<?php    
}; 
?>