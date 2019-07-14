
<?php 

function hari_bulan_tahun($day /* 01/1 */, $month /* 07/7 */, $year = null)
{

	(empty($year)) ? $year = date("Y") : $year;

	if (is_int($day) && is_int($month)) {

		$hari = [
				1	=> 'Senin',
				2	=> 'Selasa',
				3	=> 'Rabu',
				4	=> 'Kamis',
				5	=> 'Jumat',
				6	=> 'Sabtu',
				7	=> 'Minggu'
		];

		$bulan = [
				1 	=> 'Januari',
				2 	=> 'Februari',
				3 	=> 'Maret',
				4 	=> 'April',
				5 	=> 'Mei',
				6 	=> 'Juni',
				7 	=> 'Juli',
				8 	=> 'Agustus',
				9 	=> 'September',
				10	=> 'Oktober',
				11	=> 'November',
				12	=> 'Desember'
			];
		
		return (!empty($hari[$day]) && !empty($bulan[$month])) ? ($hari[$day].'-'.$bulan[$month]).'-'.$year : 'Invalid Parameter';
	}

	if (is_string($day) && is_string($month)) {

		$hari = [
				'01'	=> 'Senin',
				'02'	=> 'Selasa',
				'03'	=> 'Rabu',
				'04'	=> 'Kamis',
				'05'	=> 'Jumat',
				'06'	=> 'Sabtu',
				'07'	=> 'Minggu'
		];

		$bulan = [
				'01' => 'Januari',
				'02' => 'Februari',
				'03' => 'Maret',
				'04' => 'April',
				'05' => 'Mei',
				'06' => 'Juni',
				'07' => 'Juli',
				'08' => 'Agustus',
				'09' => 'September',
				'10' => 'Oktober',
				'11' => 'November',
				'12' => 'Desember'
			];
		return (!empty($hari[$day]) && !empty($bulan[$month])) ? ($hari[$day].'-'.$bulan[$month]).'-'.$year : 'Invalid Parameter';
	}

	

	die('Error');

}
