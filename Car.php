<?php


class Car
{

   private int $numberWheel;

   private int $currentSpeed;

   private string $color;

   private int $numberSeat;

   private string $energy;

   private int $energyLevel;

   private bool $hasParkBrake = true;


   public function __construct(string $color, int $numberSeat, string $energy)
   {
      $this->color = $color;
      $this->numberSeat = $numberSeat;
      $this->energy = $energy;
   }

   public function getNumberWheel(): int
   {
      return $this->numberWheel = 4;
   }

   public function getCurrentSpeed(): int
   {
      return $this->currentSpeed;
   }

   public function getColor(): string
   {
      return $this->color;
   }

   public function getNumberSeat(): int
   {
      return $this->numberSeat;
   }

   public function getEnergy(): string
   {
      return $this->energy;
   }

   public function getEnergyLevel(): int
   {
      return $this->energyLevel;
   }

   public function start(): int
   {
      if ($this->hasParkBrake === true) {
         throw new Exception('Attention le frein à main est actif !');
      }
      return $this->currentSpeed  = 0;
   }

   public function break(): string
   {
      $sentence = "";
      while ($this->currentSpeed > 0) {
         $this->currentSpeed--;
         $sentence .= $this->currentSpeed . ' km/h -> ';
      }
      $sentence .= "I'm stopped !";
      return $sentence;
   }

   public function forward(): int
   {
      return $this->currentSpeed  = 15;
   }



   public function setHasParkBrake($hasParkBrake): Car
   {
      $this->hasParkBrake = $hasParkBrake;

      return $this;
   }
}
