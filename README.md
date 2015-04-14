# Milky Way

[![Build status...](https://img.shields.io/travis/wmorin/MilkyWay.svg?style=flat)](http://travis-ci.org/wmorin/MilkyWay)

A Telemetry PHP API Library.

Let's put all together:

```php
use MilkyWay\Client\Milkyway;
use MilkyWay\Model\Flow;
use MilkyWay\Model\WidgetVariant\Weather;

$flow = new Flow;
$flow->setTag('board_text_1');

$weather = new Weather;
$weather->setTitle('Current Weather');
$weather->setLocation('Tokyo, JP');
$weather->setTemperature(Weather::TEMPERATURE_CELSIUS);

$client = new Milkyway('your-api-key');
$client->updateFlow($flow, $weather);
$client->post();
```