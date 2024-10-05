<?php

namespace chillerlan\QRCode\Data;

use chillerlan\QRCode\QRCode;
use Closure;

use function array_fill, array_key_exists, array_push, array_unshift, count, floor, in_array, max, min, range;

final class QRMatrix{

	public const M_NULL       = 0x00;
	public const M_DARKMODULE = 0x02;
	public const M_DATA       = 0x04;
	public const M_FINDER     = 0x06;
	public const M_SEPARATOR  = 0x08;
	public const M_ALIGNMENT  = 0x0a;
	public const M_TIMING     = 0x0c;
	public const M_FORMAT     = 0x0e;
	public const M_VERSION    = 0x10;
	public const M_QUIETZONE  = 0x12;
	public const M_LOGO       = 0x14;
	public const M_FINDER_DOT = 0x16;
	public const M_TEST       = 0xff;

	protected const alignmentPattern = [
		1  => [],
		2  => [6, 18],
		3  => [6, 22],
		4  => [6, 26],
		5  => [6, 30],
		6  => [6, 34],
		7  => [6, 22, 38],
		8  => [6, 24, 42],
		9  => [6, 26, 46],
		10 => [6, 28, 50],
		11 => [6, 30, 54],
		12 => [6, 32, 58],
		13 => [6, 34, 62],
		14 => [6, 26, 46, 66],
		15 => [6, 26, 48, 70],
		16 => [6, 26, 50, 74],
		17 => [6, 30, 54, 78],
		18 => [6, 30, 56, 82],
		19 => [6, 30, 58, 86],
		20 => [6, 34, 62, 90],
		21 => [6, 28, 50, 72,  94],
		22 => [6, 26, 50, 74,  98],
		23 => [6, 30, 54, 78, 102],
		24 => [6, 28, 54, 80, 106],
		25 => [6, 32, 58, 84, 110],
		26 => [6, 30, 58, 86, 114],
		27 => [6, 34, 62, 90, 118],
		28 => [6, 26, 50, 74,  98, 122],
		29 => [6, 30, 54, 78, 102, 126],
		30 => [6, 26, 52, 78, 104, 130],
		31 => [6, 30, 56, 82, 108, 134],
		32 => [6, 34, 60, 86, 112, 138],
		33 => [6, 30, 58, 86, 114, 142],
		34 => [6, 34, 62, 90, 118, 146],
		35 => [6, 30, 54, 78, 102, 126, 150],
		36 => [6, 24, 50, 76, 102, 128, 154],
		37 => [6, 28, 54, 80, 106, 132, 158],
		38 => [6, 32, 58, 84, 110, 136, 162],
		39 => [6, 26, 54, 82, 110, 138, 166],
		40 => [6, 30, 58, 86, 114, 142, 170],
	];

	protected const versionPattern = [
		7  => 0b000111110010010100,
		8  => 0b001000010110111100,
		9  => 0b001001101010011001,
		10 => 0b001010010011010011,
		11 => 0b001011101111110110,
		12 => 0b001100011101100010,
		13 => 0b001101100001000111,
		14 => 0b001110011000001101,
		15 => 0b001111100100101000,
		16 => 0b010000101101111000,
		17 => 0b010001010001011101,
		18 => 0b010010101000010111,
		19 => 0b010011010100110010,
		20 => 0b010100100110100110,
		21 => 0b010101011010000011,
		22 => 0b010110100011001001,
		23 => 0b010111011111101100,
		24 => 0b011000111011000100,
		25 => 0b011001000111100001,
		26 => 0b011010111110101011,
		27 => 0b011011000010001110,
		28 => 0b011100110000011010,
		29 => 0b011101001100111111,
		30 => 0b011110110101110101,
		31 => 0b011111001001010000,
		32 => 0b100000100111010101,
		33 => 0b100001011011110000,
		34 => 0b100010100010111010,
		35 => 0b100011011110011111,
		36 => 0b100100101100001011,
		37 => 0b100101010000101110,
		38 => 0b100110101001100100,
		39 => 0b100111010101000001,
		40 => 0b101000110001101001,
	];

	protected const formatPattern = [
		[ 
			0b111011111000100,
			0b111001011110011,
			0b111110110101010,
			0b111100010011101,
			0b110011000101111,
			0b110001100011000,
			0b110110001000001,
			0b110100101110110,
		],
		[ 
			0b101010000010010,
			0b101000100100101,
			0b101111001111100,
			0b101101101001011,
			0b100010111111001,
			0b100000011001110,
			0b100111110010111,
			0b100101010100000,
		],
		[ 
			0b011010101011111,
			0b011000001101000,
			0b011111100110001,
			0b011101000000110,
			0b010010010110100,
			0b010000110000011,
			0b010111011011010,
			0b010101111101101,
		],
		[ 
			0b001011010001001,
			0b001001110111110,
			0b001110011100111,
			0b001100111010000,
			0b000011101100010,
			0b000001001010101,
			0b000110100001100,
			0b000100000111011,
		],
	];

	protected int $version;

	protected int $eclevel;

	protected int $maskPattern = QRCode::MASK_PATTERN_AUTO;

	protected int $moduleCount;

	protected array $matrix;

	public function __construct(int $version, int $eclevel){

		if(!in_array($version, range(1, 40), true)){
			throw new QRCodeDataException('invalid QR Code version');
		}

		if(!array_key_exists($eclevel, QRCode::ECC_MODES)){
			throw new QRCodeDataException('invalid ecc level');
		}

		$this->version     = $version;
		$this->eclevel     = $eclevel;
		$this->moduleCount = $this->version * 4 + 17;
		$this->matrix      = array_fill(0, $this->moduleCount, array_fill(0, $this->moduleCount, $this::M_NULL));
	}

	public function init(int $maskPattern, bool $test = null):QRMatrix{
		return $this
			->setFinderPattern()
			->setSeparators()
			->setAlignmentPattern()
			->setTimingPattern()
			->setVersionNumber($test)
			->setFormatInfo($maskPattern, $test)
			->setDarkModule()
		;
	}

	public function matrix(bool $boolean = false):array{

		if(!$boolean){
			return $this->matrix;
		}

		$matrix = [];

		foreach($this->matrix as $y => $row){
			$matrix[$y] = [];

			foreach($row as $x => $val){
				$matrix[$y][$x] = ($val >> 8) > 0;
			}
		}

		return $matrix;
	}

	public function version():int{
		return $this->version;
	}

	public function eccLevel():int{
		return $this->eclevel;
	}

	public function maskPattern():int{
		return $this->maskPattern;
	}

	public function size():int{
		return $this->moduleCount;
	}

	public function get(int $x, int $y):int{
		return $this->matrix[$y][$x];
	}

	public function set(int $x, int $y, bool $value, int $M_TYPE):QRMatrix{
		$this->matrix[$y][$x] = $M_TYPE << ($value ? 8 : 0);

		return $this;
	}

	public function check(int $x, int $y):bool{
		return ($this->matrix[$y][$x] >> 8) > 0;
	}


	public function setDarkModule():QRMatrix{
		$this->set(8, 4 * $this->version + 9, true, $this::M_DARKMODULE);

		return $this;
	}

	public function setFinderPattern():QRMatrix{

		$pos = [
			[0, 0], 
			[$this->moduleCount - 7, 0], 
			[0, $this->moduleCount - 7], 
		];

		foreach($pos as $c){
			for($y = 0; $y < 7; $y++){
				for($x = 0; $x < 7; $x++){
					if($x === 0 || $x === 6 || $y === 0 || $y === 6){
						$this->set($c[0] + $y, $c[1] + $x, true, $this::M_FINDER);
					}
					elseif($x === 1 || $x === 5 || $y === 1 || $y === 5){
						$this->set($c[0] + $y, $c[1] + $x, false, $this::M_FINDER);
					}
					else{
						$this->set($c[0] + $y, $c[1] + $x, true, $this::M_FINDER_DOT);
					}
				}
			}
		}

		return $this;
	}

	public function setSeparators():QRMatrix{

		$h = [
			[7, 0],
			[$this->moduleCount - 8, 0],
			[7, $this->moduleCount - 8],
		];

		$v = [
			[7, 7],
			[$this->moduleCount - 1, 7],
			[7, $this->moduleCount - 8],
		];

		for($c = 0; $c < 3; $c++){
			for($i = 0; $i < 8; $i++){
				$this->set($h[$c][0]     , $h[$c][1] + $i, false, $this::M_SEPARATOR);
				$this->set($v[$c][0] - $i, $v[$c][1]     , false, $this::M_SEPARATOR);
			}
		}

		return $this;
	}


	public function setAlignmentPattern():QRMatrix{

		foreach($this::alignmentPattern[$this->version] as $y){
			foreach($this::alignmentPattern[$this->version] as $x){

				if($this->matrix[$y][$x] !== $this::M_NULL){
					continue;
				}

				for($ry = -2; $ry <= 2; $ry++){
					for($rx = -2; $rx <= 2; $rx++){
						$v = ($ry === 0 && $rx === 0) || $ry === 2 || $ry === -2 || $rx === 2 || $rx === -2;

						$this->set($x + $rx, $y + $ry, $v, $this::M_ALIGNMENT);
					}
				}

			}
		}

		return $this;
	}


	public function setTimingPattern():QRMatrix{

		foreach(range(8, $this->moduleCount - 8 - 1) as $i){

			if($this->matrix[6][$i] !== $this::M_NULL || $this->matrix[$i][6] !== $this::M_NULL){
				continue;
			}

			$v = $i % 2 === 0;

			$this->set($i, 6, $v, $this::M_TIMING); 
			$this->set(6, $i, $v, $this::M_TIMING); 
		}

		return $this;
	}

	public function setVersionNumber(bool $test = null):QRMatrix{
		$bits = $this::versionPattern[$this->version] ?? false;

		if($bits !== false){

			for($i = 0; $i < 18; $i++){
				$a = (int)floor($i / 3);
				$b = $i % 3 + $this->moduleCount - 8 - 3;
				$v = !$test && (($bits >> $i) & 1) === 1;

				$this->set($b, $a, $v, $this::M_VERSION); 
				$this->set($a, $b, $v, $this::M_VERSION); 
			}

		}

		return $this;
	}

	public function setFormatInfo(int $maskPattern, bool $test = null):QRMatrix{
		$bits = $this::formatPattern[QRCode::ECC_MODES[$this->eclevel]][$maskPattern] ?? 0;

		for($i = 0; $i < 15; $i++){
			$v = !$test && (($bits >> $i) & 1) === 1;

			if($i < 6){
				$this->set(8, $i, $v, $this::M_FORMAT);
			}
			elseif($i < 8){
				$this->set(8, $i + 1, $v, $this::M_FORMAT);
			}
			else{
				$this->set(8, $this->moduleCount - 15 + $i, $v, $this::M_FORMAT);
			}

			if($i < 8){
				$this->set($this->moduleCount - $i - 1, 8, $v, $this::M_FORMAT);
			}
			elseif($i < 9){
				$this->set(15 - $i, 8, $v, $this::M_FORMAT);
			}
			else{
				$this->set(15 - $i - 1, 8, $v, $this::M_FORMAT);
			}

		}

		$this->set(8, $this->moduleCount - 8, !$test, $this::M_FORMAT);

		return $this;
	}

	public function setQuietZone(int $size = null):QRMatrix{

		if($this->matrix[$this->moduleCount - 1][$this->moduleCount - 1] === $this::M_NULL){
			throw new QRCodeDataException('use only after writing data');
		}

		$size = $size !== null
			? max(0, min($size, floor($this->moduleCount / 2)))
			: 4;

		for($y = 0; $y < $this->moduleCount; $y++){
			for($i = 0; $i < $size; $i++){
				array_unshift($this->matrix[$y], $this::M_QUIETZONE);
				array_push($this->matrix[$y], $this::M_QUIETZONE);
			}
		}

		$this->moduleCount += ($size * 2);

		$r = array_fill(0, $this->moduleCount, $this::M_QUIETZONE);

		for($i = 0; $i < $size; $i++){
			array_unshift($this->matrix, $r);
			array_push($this->matrix, $r);
		}

		return $this;
	}

	public function setLogoSpace(int $width, int $height, int $startX = null, int $startY = null):QRMatrix{

		if($this->eclevel !== QRCode::ECC_H){
			throw new QRCodeDataException('ECC level "H" required to add logo space');
		}

		if($startX === null && ($width % 2) === 0){
			$width++;
		}

		if($startY === null && ($height % 2) === 0){
			$height++;
		}

		$length = $this->version * 4 + 17;

		if($width * $height > floor($length * $length * 0.2)){
			throw new QRCodeDataException('logo space exceeds the maximum error correction capacity');
		}

		$qz    = ($this->moduleCount - $length) / 2;
		$start = $qz + 9;
		$end   = $this->moduleCount - $qz;

		$startX = ($startX !== null ? $startX : ($length - $width) / 2) + $qz;
		$startY = ($startY !== null ? $startY : ($length - $height) / 2) + $qz;

		foreach($this->matrix as $y => $row){
			foreach($row as $x => $val){
				if($x < $start || $y < $start ||$x >= $end || $y >= $end){
					continue;
				}
				if($x >= $startX && $x < ($startX + $width) && $y >= $startY && $y < ($startY + $height)){
					$this->set($x, $y, false, $this::M_LOGO);
				}
			}
		}

		return $this;
	}

	public function mapData(array $data, int $maskPattern):QRMatrix{
		$this->maskPattern = $maskPattern;
		$byteCount         = count($data);
		$y                 = $this->moduleCount - 1;
		$inc               = -1;
		$byteIndex         = 0;
		$bitIndex          = 7;
		$mask              = $this->getMask($this->maskPattern);

		for($i = $y; $i > 0; $i -= 2){

			if($i === 6){
				$i--;
			}

			while(true){
				for($c = 0; $c < 2; $c++){
					$x = $i - $c;

					if($this->matrix[$y][$x] === $this::M_NULL){
						$v = false;

						if($byteIndex < $byteCount){
							$v = (($data[$byteIndex] >> $bitIndex) & 1) === 1;
						}

						if($mask($x, $y) === 0){
							$v = !$v;
						}

						$this->matrix[$y][$x] = $this::M_DATA << ($v ? 8 : 0);
						$bitIndex--;

						if($bitIndex === -1){
							$byteIndex++;
							$bitIndex = 7;
						}

					}
				}

				$y += $inc;

				if($y < 0 || $this->moduleCount <= $y){
					$y   -=  $inc;
					$inc  = -$inc;

					break;
				}

			}
		}

		return $this;
	}

	protected function getMask(int $maskPattern):Closure{

		if((0b111 & $maskPattern) !== $maskPattern){
			throw new QRCodeDataException('invalid mask pattern'); 
		}

		return [
			0b000 => fn($x, $y):int => ($x + $y) % 2,
			0b001 => fn($x, $y):int => $y % 2,
			0b010 => fn($x, $y):int => $x % 3,
			0b011 => fn($x, $y):int => ($x + $y) % 3,
			0b100 => fn($x, $y):int => ((int)($y / 2) + (int)($x / 3)) % 2,
			0b101 => fn($x, $y):int => (($x * $y) % 2) + (($x * $y) % 3),
			0b110 => fn($x, $y):int => ((($x * $y) % 2) + (($x * $y) % 3)) % 2,
			0b111 => fn($x, $y):int => ((($x * $y) % 3) + (($x + $y) % 2)) % 2,
		][$maskPattern];
	}

}
