<?php
 include 'vendor/autoload.php';
 use AndyDune\CurrencyRateCbr\DailyRate; 

class Super{
   protected $item;
   

   function __construct()
   {
   
    //use AndyDune\CurrencyRateCbr\DailyRate;        
            $rate = new DailyRate();
            $rate->setDate(new \DateTime()); // не оюязательно - по умолчанию используется текущая дата 
            $isOk = $rate->retrieve(); // true если данные успешно получены

            // Извлекаем курс доллара 
            /** @var DailyRateItem $item */
            $this->item = $rate->get('usd'); // код валюты, регистр не важен
   }

    function you($name="")
    { return "Ты супер,".$name; }

    function getdollar()
    {
 
        echo $this->item->getCharCode(); // код валюты: USD
        echo $this->item->getValue(); // цена: 63,1394
    }
}