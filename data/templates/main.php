<?php
// include('./head.php'); ?>
<div id="selectSection" class="page">
    <!-- Selection des sectiona ne pas afficher -->

    <form action="./index.php" method='POST' id="formSection">
    
        <label for="section1">Section 1</label>
        <label class="switch">
        <input name="section1" type="checkbox" checked>
        <span class="slider round"></span>
        </label>

        <label for="section2">Section 2</label>
        <label class="switch">
        <input name="section2" type="checkbox" checked>
        <span class="slider round"></span>
        </label>

        <label for="section3">Section 3</label>
        <label class="switch">
        <input name="section3" type="checkbox" checked>
        <span class="slider round"></span>
        </label>

        <input type="submit" value="Valider">
    </form>
</div>
<?php
// include('./footer.php');