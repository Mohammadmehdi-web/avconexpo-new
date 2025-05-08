<?php
if(isset($_POST['delete']))
{
   include '../db_con.php';
   $testi_id =$_POST['testi_id'];

   $del_que ="delete from add_price where testi_id =$testi_id";
   mysqli_query($con,$del_que);

?>
<script>
    alert('Data deleted successfully!');
    window.location='add_testimonial.php';
</script>

<?php
}
else
{
    header('location:add_testimonial.php');
}
?>



