<?php

namespace Kuber\Contracts;

interface PdfRepositoryInterface
{
    public function __construct();
    public function render();
}
