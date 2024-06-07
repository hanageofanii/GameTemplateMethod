<?php

/**
 * Kelas abstrak yang mendefinisikan metode template dan operasi primitif untuk perilaku AI.
 */
abstract class AI
{
    // Metode template yang mendefinisikan kerangka perilaku AI.
    final public function execute(): void
    {
        $this->initialize();
        $this->performAction();
        $this->cleanup();
    }

    // Operasi primitif, yang akan diimplementasikan oleh subclass.
    abstract protected function initialize(): void;
    abstract protected function performAction(): void;
    abstract protected function cleanup(): void;
}

/**
 * Kelas AI konkret untuk Orc, dengan perilaku agresif.
 */
class OrcAI extends AI
{
    protected function initialize(): void
    {
        echo "AI Orc: Bersiap untuk pertempuran.\n";
    }

    protected function performAction(): void
    {
        echo "AI Orc: Menyerang musuh!\n";
    }

    protected function cleanup(): void
    {
        echo "AI Orc: Merayakan kemenangan dan meraup hasil.\n";
    }
}

/**
 * Kelas AI konkret untuk Manusia, dengan perilaku defensif.
 */
class HumanAI extends AI
{
    protected function initialize(): void
    {
        echo "AI Manusia: Memperkuat pertahanan.\n";
    }

    protected function performAction(): void
    {
        echo "AI Manusia: Membela diri dari serangan musuh!\n";
    }

    protected function cleanup(): void
    {
        echo "AI Manusia: Menilai kerusakan dan memperbaiki.\n";
    }
}

/**
 * Kelas AI konkret untuk Monster, dengan perilaku sederhana.
 */
class MonsterAI extends AI
{
    protected function initialize(): void
    {
        echo "AI Monster: Bangun dan lapar.\n";
    }

    protected function performAction(): void
    {
        echo "AI Monster: Mencari makanan.\n";
    }

    protected function cleanup(): void
    {
        echo "AI Monster: Istirahat setelah makan.\n";
    }
}

// Kode klien
echo "Perilaku Orc:\n";
$orc = new OrcAI();
$orc->execute();
echo "\n";

echo "Perilaku Manusia:\n";
$human = new HumanAI();
$human->execute();
echo "\n";

echo "Perilaku Monster:\n";
$monster = new MonsterAI();
$monster->execute();
echo "\n";
