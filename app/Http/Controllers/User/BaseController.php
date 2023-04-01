<?php

namespace App\Http\Controllers\User;

use App\Services\User\Service;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
  protected $service;

  /**
   * Class constructor.
   */
  public function __construct(Service $service)
  {
    $this->service = $service;
  }
}