<?php

namespace Kuber\Tests;

use Kuber\Invoice;

class InvoiceTest extends BaseTest
{
    public function testConstructInvoice()
    {
        $invoice = new Invoice();

        $this->assertInstanceOf('Kuber\Invoice', $invoice);
    }

    public function testAddInvoiceItem()
    {
        $invoice = new Invoice();
        $invoice->render();
    }
}
