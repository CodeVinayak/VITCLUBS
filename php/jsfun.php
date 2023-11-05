<?php 
function _alert($a_msg){
    echo "<script> alert('$a_msg')</script>";
}
function _redirect($path){
    echo "<script> window.location.href ='$path';
    </script>";
}

function _chLBtn($ename){
    echo "
    <script>
    document.getElementById('logindiv').innerHTML='$ename';
    </script>
    ";
    if(substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)=="index.php"){
    echo "
    <script>
    document.getElementById('login').href='api/profile.php';
    </script>"; 
    }
    else{
        echo "
        <script>
        document.getElementById('login').href='profile.php';
        </script>
        ";  
    }
}
function _setName(){
    if (isset($_SESSION['ename'])){
        _chLBtn($_SESSION['ename']);
   }
   if(isset($_SESSION['auth'])){
       if($_SESSION['auth']=="admin"){
       echo "<script>admin=true</script>";
       }
   }
}
?>
