<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $markdown = $_POST["markdown_content"] ?? "";
    $filename = "document_" . date("YmdHis") . ".doc";
    header("Content-Type: application/vnd.ms-word");
    header("Content-Disposition: attachment; filename=" . $filename);
    echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
    echo "<head><meta charset=\"UTF-8\"></head><body>";
    echo nl2br(htmlspecialchars($markdown));
    echo "</body></html>";
    exit;
}
