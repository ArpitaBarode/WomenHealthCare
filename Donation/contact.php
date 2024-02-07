<!--php script to send email-->
<?php 


//showing alert and redirected to contact page
echo "<script>
setTimeout(SWAL, 1000);
function SWAL(){
    alert('Thanks ! Your details saved Successfully' , 'success');
}
setTimeout(OUT, 2000);
function OUT(){
    window.location.href = 'index.html';
}
</script>";
?>

