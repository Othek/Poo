public function getAmount(): int     switch ($this->amount) {
        case self::TYPE_HEAL:
            $type = 'heal';
            $used = true;
            $this->amount = random_int(10, 30);
            break;
        case self::TYPE_MANA:
            $type = 'mana';
            $used = true;
            $this->amount = random_int(10, 30);
            break;
        }
    }
}

Item $ name
Item $description
String $Type