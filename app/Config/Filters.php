<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'filterauth' => \App\Filters\FilterAuth::class
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			'filterauth' => ['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'guru', 'guru/*',
				'santri', 'santri/*',
				'/'
			]]
			// 'honeypot',
			// 'csrf',
		],
		'after'  => [
			'filterauth' => ['except' => [
				'admin', 'admin/*',
				'home', 'home/*',
				'guru', 'guru/*',
				'santri', 'santri/*',
				'/',
				'pengumuman', 'pengumuman/*',
				'data_kelas', 'data_kelas/*',
				'data_materi', 'data_materi/*',
				'data_rps', 'data_rps/*',
				'data_absensi', 'data_absensi/*',
				'data_pembayaran', 'data_pembayaran/*',
				'bio_guru', 'bio_guru/*',
				'bio_santri', 'bio_santri/*',
				'file_surat', 'file_surat/*',
				'data_user', 'data_user/*',
				'data_pesan', 'data_pesan/*',
				'data_rapor', 'data_rapor/*',
				'data_nilai', 'data_nilai/*',
				'anggota_kelas', 'anggota_kelas/*',
			]],

			'toolbar',
			// 'honeypot',
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [];
}
