<?hh // strict
namespace fiz\baz;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: example2.proto

newtype XXX_AEnum2_t as int = int;
abstract class AEnum2 {
  const XXX_AEnum2_t Z = 0;
  private static dict<int, string> $XXX_itos = dict[
    0 => 'Z',
  ];
  public static function XXX_ItoS(): dict<int, string> {
    return self::$XXX_itos;
  }
  private static dict<string, int> $XXX_stoi = dict[
    'Z' => 0,
  ];
  public static function XXX_FromMixed(mixed $m): XXX_AEnum2_t {
    if (is_string($m)) return idx(self::$XXX_stoi, $m, is_numeric($m) ? ((int) $m) : 0);
    if (is_int($m)) return $m;
    return 0;
  }
  public static function XXX_FromInt(int $i): XXX_AEnum2_t {
    return $i;
  }
}

class example2 implements \Protobuf\Message {
  public int $zomg;

  public function __construct() {
    $this->zomg = 0;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->zomg = $d->readVarint32Signed();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->zomg !== 0) {
      $e->writeTag(1, 0);
      $e->writeVarint($this->zomg);
    }
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeInt32('zomg', 'zomg', $this->zomg, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'zomg':
          $this->zomg = \Protobuf\Internal\JsonDecoder::readInt32Signed($v);
          break;
      }
    }
  }
}

class refexample3 implements \Protobuf\Message {
  public ?\Funky $funky;

  public function __construct() {
    $this->funky = null;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          if ($this->funky == null) $this->funky = new \Funky();
          $this->funky->MergeFrom($d->readDecoder());
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $msg = $this->funky;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 1);
    }
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeMessage('funky', 'funky', $this->funky, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'funky':
          if ($v === null) break;
          if ($this->funky == null) $this->funky = new \Funky();
          $this->funky->MergeJsonFrom($v);
          break;
      }
    }
  }
}


class XXX_FileDescriptor_example2__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'example2.proto';
  const string RAW =
  'eNo0kctKA0EQRevRL6sn05MSUUREshKFLJIvcKELl1m6SyAR0TwIBnS+xw+V7qF3c+pWXc'
  .'7Q0q5/ltvD13o2PRz333v1m49+ulr21zWYD8HkVkJdVRXT77fvV3iH93ZRviePEo/rTT3S'
  .'G7Gb0+7zt+zEmZu+ZFoMw4ck7ul5d9rO1Aq+dfD6R+LUAHQoQbBRBlA5E2JQJn+Zh6RsQh'
  .'IRMqDGQUARYQOo7EInUYwBAmVPYxmJzWDUeHIqzYA2h74SKvvQVGJln7rcbkGNQFPabd4S'
  .'G3O7Le2RQj6xQ0EkrkTK0fmih2ra/CdZD1G5DedFD3NBIi16WPQStRdFAQlcDn0lVE5hVI'
  .'mVUzdeufIW8/8AAAD//9+MMTY';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
