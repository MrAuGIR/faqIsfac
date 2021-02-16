<?php

require 'header.php';

?>
<main>
    <textarea></textarea>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>

    <textarea id="text" name="text" > mon message </textarea>

</main>
<footer>


</footer>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>