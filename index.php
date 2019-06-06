<?php
$kid = new Kid();
$kid->setName('しずか');
$kid->setSex('girl');
$kid->setAge(12);

echo $kid->showName();

class Kid{
  private $name;
  private $sex;
  // 年齢を追加
  private $age;

  // コンストラクタ
  function __construct(){
    $this->name = 'Seed';
    $this->sex = 'boy';
    // 初期値の設定
    $this->age = 10;
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

  public function getAge(){
    return $this->age;
  }

  public function setAge($nenrei){
     $this->age = $nenrei;
   }

  // 性別によって名前の語尾を判定するメソッド
  public function showName(){
    // 名前の語尾を格納する変数
    $suffix = '';

    if ($this->sex == 'boy') {
      if ($this->age >= 12) {
        // 男の子で12歳以上の場合
        $suffix = '君';
      } else {
        // 男の子で11歳以下の場合
        $suffix = 'くん';
      }
    } else if($this->sex == 'girl') {
      if ($this->age >= 12) {
        // 女の子で12歳以上の場合
        $suffix = 'さん';
      } else {
        // 女の子で11歳以下の場合
        $suffix = 'ちゃん';
      }
    } else {
      return $this->name .'の性別が不明です';
    }
    return $this->name . $suffix;
  }

}