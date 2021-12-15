<style>
    h1{
        color:red
    }
</style>
<?php
echo '<h1 id="main">Hello world</h1>';
echo '<h2 onclick="hideH1()">Welcome Mr Ahmed</h2>'

?>

<script>
    function hideH1(){
    document.getElementById('main').style.display='none'
    }
</script>
