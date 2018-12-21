# Adapterパターン

1. 目的  
修正することのできない既存オブジェクトを､特定のインターフェースに適合させる｡
既存のクラスを修正することなく､適切なインターフェース(メソッド)を追加することができる｡

2. 問題  
使用したいデータや振る舞いが既存システム内に存在しているものの､そのインターフェースが正しくない場合｡

3. 解決策  
必要なインターフェースを保持したラッパーをAdapterによって提供する｡


* 問題例

```php
<?php
class MyNameViewer
{
    public function viewName(MyPersonB $person): void
    {
        echo $person->getName();
    }
}
```

```php
<?php
class MyPersonB
{
    /**
     * @var string
     */
    private $name;

    /**
     * MyPersonB constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
```

以上のような既存のプログラムがあり､
viewName(MyPersonB $person)はMyPersonBクラスの型が指定されている｡

```php
<?php
$viewer = new App\MyNameViewer();
$viewer->viewName(new App\MyPersonB("John"));
```
John  
と表示される｡

```php
<?php
class MyPersonA
{
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string
     */
    private $lastName;

    /**
     * MyPersonA constructor.
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
```

このMyPersonAオブジェクトをMyNameViewerに渡して表示したいときにどうするか｡

```
Fatal error: Uncaught TypeError: Argument 1 passed to App\MyNameViewer::viewName() must be an instance of App\MyPersonB, instance of App\MyPersonA given
```

当然MyPersonAを入れてもエラーになる｡

こういうときにAdapterパターンを使う｡

```php
<?php
class Adapter extends MyPersonB
{
    /**
     * @var MyPersonA
     */
    private $person;

    /**
     * Adapter constructor.
     * @param MyPersonA $person
     */
    public function __construct(MyPersonA $person)
    {
        $this->person = $person;
    }

    public function getName(): string
    {
        return $this->person->getFirstName() . $this->person->getLastName();
    }
}
```

MyPersonBをかぶせたAdapterを作成する｡

```php
<?php
$adapter = new Other\Adapter(new \Other\MyPersonA("Ken", "Thompson"));
$viewer = new Other\MyNameViewer();
$viewer->viewName($adapter);
```

アダプティクラスの仕様を修正することなく､別のインターフェースへの拡張を容易にする｡