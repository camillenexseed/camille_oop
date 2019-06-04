<?php
$kid = new Kid();
$kid->setName('しずか');
$kid->setSex('girl');

echo $kid->showName();

class Kid{
  private $name;
  private $sex;

  // コンストラクタ
  function __construct(){
    // 初期値の設定
    $this->name = 'Seed';
    $this->sex = 'boy';
  }

  public function getName(){
    return $this->name;
  }

  public function setName($namae){
    $this->name = $namae;
  }

  public function getSex(){
    return $this->sex;
  }

  public function setSex($seibetsu){
     $this->sex = $seibetsu;
   }

  // 性別によって名前の語尾を判定するメソッド
  public function showName(){
    if ($this->sex == 'boy') {
      return $this->name . 'くん';
    } else if($this->sex == 'girl') {
      return $this->name . 'ちゃん';
    } else {
      return $this->name .'の性別が不明です';
    }
  }
}