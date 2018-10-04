
<div id="sections" class="page">
<?php
    if(!empty($_POST['section1'])){
        echo '';
    }elseif($_POST['section1']='on'){
        echo '<section>bonsoir je suis la section numero 1 </section>';
    };
    if(!empty($_POST['section2'])){
        echo '';
    }elseif($_POST['section2']='on'){
        echo '<section>bonsoir je suis la section numero 2 </section>';
    };
    if(!empty($_POST['section3'])){
        echo '';
    }elseif($_POST['section3']='on'){
        echo '<section>bonsoir je suis la section numero 3 </section>';
    };
?>
</div>
