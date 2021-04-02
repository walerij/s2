<?php

class Super{
   protected $item;
   
   use AndyDune\CurrencyRateCbr\DailyRate;

   function __construct()
   {

            include __DIR__.'./vendor/autoload.php';
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
 
        echo $item->getCharCode(); // код валюты: USD
        echo $item->getValue(); // цена: 63,1394
    }
}