<?php

namespace Kuber;

use Kuber\Repositories\Pdf\MpdfPdfRepository;

class Invoice
{
    /**
     * Creates a new instance of a Kuber Invoice
     *
     * @return Kuber\Invoice
     */
    public function __construct()
    {
        //
    }

    /**
     * Stream invoice
     *
     * @return void
     */
    public function render()
    {
        $pdf = new MpdfPdfRepository();
        dd($pdf);
       
    }
}