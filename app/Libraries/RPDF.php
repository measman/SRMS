<?php

namespace App\Libraries;

use TCPDF;

class RPDF extends TCPDF
{

    //Page header
    public function Header()
    {
        // Logo
        $image_file = K_PATH_IMAGES . 'logo.png';
        $this->Image($image_file, 10, 5, 30, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('times', 'N', 20);
        // Title
        $this->SetXY(20, 15);
        $this->Cell(0, 15, 'CHAMUNDA SECONDARY SCHOOL', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->SetXY(100, 25);
        $this->Cell(5, 15, 'CHAMUNDA, DAILEKH', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        $this->SetXY(100, 40);
        $this->Cell(5, 15, 'GRADE SHEET', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer()
    {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}