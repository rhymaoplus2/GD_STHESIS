<?php
require_once 'PhpWord/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $content = $_POST["content"];
  $zip = new ZipArchive();
  $zip->open("page.zip", ZipArchive::CREATE);
  $zip->addFromString("index.html", $content);
  $zip->close();
  $doc = new Docxtemplater();
  $doc->loadZipFile("page.zip");
  $docx = $doc->generate();
  header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
  header("Content-Disposition: attachment;Filename=page.docx");
  echo $docx;
}
?>
<?php
// Get the HTML table from the POST request
$html = $_POST["html"];

// Create a new PHPWord object
$phpWord = new PhpWord\PhpWord();

// Add a section to the document
$section = $phpWord->addSection();

// Add the HTML table to the section
PhpWord\Shared\Html::addHtml($section, $html);

// Generate the Docx file
$objWriter = PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('export.docx');

// Return the URL of the generated file
echo 'export.docx';

?>
