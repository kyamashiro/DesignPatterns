# Strategyパターン

1. 目的  
様々なアルゴリズムを､それが発生するコンテキストに応じて使い分けられるようにする｡

2. 問題  
要求を行うクライアントや操作対象データによって､適用するアルゴリズムを選択する｡

3. 解決策  
該当アルゴリズムの実装からアルゴリズムを個別に切り出す｡これによりコンテキストによる選択が可能になる｡

* 問題例  
方言のモードは設定可能  
設定している方言によって出力を切り替える


### パターン適用前
```php
<?php
class Client
{
    public function anOperation()
    {
        $kyotoPerson = new DialectSpeaker(DialectSpeaker::KYOTO);
        $kyotoPerson->sayWelcome();
        $kyotoPerson->sayThanks();
    }
}
```

```php
<?php
class DialectSpeaker
{
    const KYOTO = 1;
    const NAGOYA = 2;

    /**
     * @var int
     */
    private $dialect;

    /**
     * DialectSpeaker constructor.
     * @param $dialect
     */
    public function __construct(int $dialect)
    {
        $this->dialect = $dialect;
    }

    public function sayWelcome()
    {
        switch ($this->dialect) {
            case self::KYOTO :
                echo "おいでやす";
                break;
            case self::NAGOYA :
                echo "いりゃあせ";
                break;
        }
    }

    public function sayThanks()
    {
        switch ($this->dialect) {
            case self::KYOTO :
                echo "おおきに";
                break;
            case self::NAGOYA :
                echo "ありがとう";
                break;
        }
    }
}
```

### パターン適用
ストラテジーパターンを適用する前に､どの部分がストラテジー､アルゴリズムに当たるのかを考える必要がある｡

```php
<?php
interface Dialect
{
    public function sayWelcome(): void;

    public function sayThanks(): void;
}
```

```php
<?php
class KyotoDialect implements Dialect
{
    public function sayWelcome(): void
    {
        echo "おいでやす";
    }

    public function sayThanks(): void
    {
        echo "おおきに";
    }
}
```

```php
<?php
class NagoyaDialect implements Dialect
{
    public function sayWelcome(): void
    {
        echo "いりゃあせ";
    }

    public function sayThanks(): void
    {
        echo "ありがとう";
    }
}
```

```php
<?php
class DialectSpeaker
{
    const KYOTO = 1;
    const NAGOYA = 2;

    /**
     * @var Dialect
     */
    private $dialect;

    /**
     * DialectSpeaker constructor.
     * @param int $dialect
     */
    public function __construct(int $dialect)
    {
        switch ($dialect) {
            case self::KYOTO :
                $this->dialect = new KyotoDialect();
                break;
            case self::NAGOYA :
                $this->dialect = new NagoyaDialect();
                break;
        }
    }

    public function sayWelcome()
    {
        $this->dialect->sayWelcome();
    }

    public function sayThanks()
    {
        $this->dialect->sayThanks();
    }
}
```

パターンを適用したことにより､実際の処理はDialectインターフェースを実装したKyotoDialect, NagoyaDialectクラスのメソッドによって実行される｡

* メリット  
    * 条件文が複数から1つになる
方言を見て種類を切り替えるswitch文がDialectSpeakerクラス内のsayWelcome()とsayThanks()メソッドの2箇所に存在していた｡
もしsayGoodBye()というメソッドを新たに追加した場合､switch文が増えることになる｡それに対して､パターン適用後は､方言の種類を見て処理を切り替える箇所は､DialectSpeakerクラスのコンストラクタの1箇所のみ｡
    * 方言による処理がひとまとまりになる  
方言を戦略(アルゴリズム)と捉え､これを別クラスにしたことで､方言の具体的な処理をサブクラスに記述できる｡京都弁に問題があったら､KyotoDialectを修正するだけで済む｡

