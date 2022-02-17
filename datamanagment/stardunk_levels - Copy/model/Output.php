<?php
class Output{
    function __construct()
    {
        
    }
    function __destruct()
    {
        
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
}
?>