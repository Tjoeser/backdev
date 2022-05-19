<?php
require 'header.php';
?>
<div class="msg-box">
    <p>Show the contact</p>
</div>
<?php
$html = "<a class=\"crudfunctionbutton\" href='index.php?op=create'><i class='fa-solid fa-circle-plus'></i> Create</a>";
echo $html;
echo $contacts;
require 'footer.php';