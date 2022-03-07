<link rel="stylesheet" href="media/styletables.css">
<?php

//oi
function createList($arr, $classmain, $classdrop=""){
    $html = '<ul class="' . $classmain . '">';
    foreach ($arr as $key => $val) {
        if(is_array($val)){
            $html.= "<li><a href='#' onclick='myDropdown()'>" .$key. "</a><ul class='myDropdown' id='dropdown-content'>";
            foreach($val as $key => $value){
            $html .="<li><a href='".$value."' class='dropbtn'>".$key. "</a></li>";
        }
        $html.="</ul></li>";
    }else{
        $html .="<li><a href='".$val."'>".$key."</a></li>"; 
    }
    }
    $html .= '</ul>';
    return $html;
}

function createTable($entries)
{
    $html = "<table>";
    foreach ($entries as $row) {
        $html .= "<tr>";
        foreach ($row as $key => $value) {
            $html .= "<td>" . $value . "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</table>";
    return $html;
}

function createTable2($entries/*, $ftable*/)
{
    // $html = '<table class="' . $ftable . '">';
    $html = "<table>";

    foreach($entries as $k => $v) {
        $html .= "<tr>";
        foreach ($v as $key => $val) {
            $html .= "<th>" . $val . "</th>";
        }
        $html .= "</tr>";
    }
    $html .= "</table>";
    return $html;
}

function createSkillbar($skill,$level,$color){
    // begin html
    // class in html verwerken
    $html = "";
    $html .= "<p>".$skill."</p>";
    $html .= "<div class=\"skillbackdrop\">";
    $html .= "<div class=\"skills\" style=\"width:".$level."%; background-color: ".$color.";\">".$level."%</div>";
    $html .= "</div>";
    // eind html
    // 2 generiek class per bar verwerken in styles.css
    return $html;
}

function createCard($gender,$name,$role,){
    if($gender == "man"){
        $img = "..\..\Flexlayout\media\pfp\download.jpg";
    }else if ($gender == "vrouw"){
        $img = "..\..\Flexlayout\media\pfp\img_avatar2.png";
    }
    if($name == "maple"){
        $img = "";
    }
    $html = "";
    $html .= "<div class =\"cont\">";
    $html .= "<div class =\"card\">";
    $html .="<img class=\"cardimg\" src=".$img.">";
    $html .= "<div class=\"cardtext\">";
    $html .="<p>".$name."</p>";
    $html .="<p>".$role."</p>";
    $html .="</div>";
    $html .="</div>";
    $html .="</div>";
    return $html;
}

?>