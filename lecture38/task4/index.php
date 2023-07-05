<?php
// Пътят до XML файла
$xmlFile = 'file.xml';

// Пътят до DTD или XSD файла
$schemaFile = 'file.sxd'; // ИЛИ 'file.xsd'

// Изключваме генерирането на грешки
libxml_use_internal_errors(true);

// Създаваме нов DOM документ
$dom = new DOMDocument;

// Зареждаме XML файла
$dom->load($xmlFile);

// Валидираме XML документа спрямо DTD или XSD файла
if ($dom->schemaValidate($schemaFile)) {
  echo 'XML document is valid.';
} else {
  echo 'XML document is invalid.';
}

// Изчистваме грешките
libxml_clear_errors();


