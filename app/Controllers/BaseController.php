<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


use App\Models\ProjectModels;
use App\Models\ProfilModels;
use App\Models\KelasModels;
use App\Models\MemberModels;
use App\Models\MateriModels;
use App\Models\ModulModels;
use App\Models\ArtikelModel;
use App\Models\UserModels;
/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['url'];
	protected $project;
	protected $profil;
	protected $kelas;
	protected $member;
	protected $materi;
	protected $modul;
	protected $artikel;
	protected $user;

	public function __construct()
	{
		$this->project = new ProjectModels ;
		$this->profil = new ProfilModels ;
		$this->kelas = new KelasModels ;
		$this->member = new MemberModels ;
		$this->materi = new MateriModels ;
		$this->modul = new ModulModels ;
		$this->artikel = new ArtikelModel ;
		$this->user = new UserModels ;
	}

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
	}
}
