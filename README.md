# Hyperf-mailer 

Install:
```shell script
composer require lijinhua/hyperf-mailer
```

Publish config:
```shell script
php bin/hyperf.php vendor:publish lijinhua/hyperf-mailer
```

Code Example:
```php 
<?php
declare(strict_types=1);

namespace App\Mail;

use Lijinhua\HyperfMailer\Contract\ShouldQueue;
use Lijinhua\HyperfMailer\Mailable;
use Lijinhua\HyperfMailer\Mail;

class TestEmail extends Mailable implements ShouldQueue
{
    public function __construct(private string $name)
    {
    }

    public function build(): void
    {
        $this
            ->subject('PHP Department welcome')
            ->textBody(sprintf('Hello, %s!', $this->name));
    }
}

...

Mail::to("xxx@qq.com")->queue(new TestEmail('xxx'));
```

Based on [https://github.com/hyperf-ext/mail](https://github.com/hyperf-ext/mail)