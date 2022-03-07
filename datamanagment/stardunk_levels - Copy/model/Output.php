<?php
class Output{
    function __construct()
    {
        
    }
    function __destruct()
    {
        
    }

    //multi dimensional array
    function createTable($entries)
    {
        $tableheader = false;
        $html = "";
        $html .= "<table>";

        foreach ($entries as $row) {
            if ($tableheader == false) {
                $html .= "<tr>";
                foreach ($row as $key => $value) {
                    $html .= "<th>{$key}</th>";
                }
                $html .= "<th>Actions</th>";
                $html .= "</tr>";
                $tableheader = true;
            }
            $html .= "<tr>";
            foreach ($row as $key => $value) {
                $html .= "<td data-title='{$key}'>{$value}</td>";
            }
            $html .= "<td><a class='button'href='index.php?op=read&id=" . $row['product_id'] . 
            "'>Read</a><a class='button'href='index.php?op=update&id=" . $row['product_id'] . 
            "'>Update</a><a class='button'href='index.php?op=delete&id=". $row['product_id'].
            "' onclick = \"return confirm('are you sure you want to delete?');\">Delete</a></td>";
            $html .= "</tr>";
        }
        $html .= "</table>";
        return $html;
    }
}
