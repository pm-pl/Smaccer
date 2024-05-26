<?php

declare(strict_types=1);

namespace aiptu\smaccer\entity\npc;

use aiptu\smaccer\entity\EntitySmaccer;
use pocketmine\entity\EntitySizeInfo;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class TropicalfishSmaccer extends EntitySmaccer {
	protected function getInitialSizeInfo() : EntitySizeInfo {
		return new EntitySizeInfo($this->getHeight(), $this->getWidth());
	}

	public function getHeight() : float {
		return 0.4;
	}

	public function getWidth() : float {
		return 0.4;
	}

	public static function getNetworkTypeId() : string {
		return EntityIds::TROPICALFISH;
	}

	public function getName() : string {
		return 'Tropicalfish';
	}
}
