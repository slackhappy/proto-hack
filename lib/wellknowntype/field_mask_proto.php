<?hh // strict
namespace google\protobuf;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: field_mask.proto

class FieldMask implements \Protobuf\Message {
  public vec<string> $paths;

  public function __construct() {
    $this->paths = vec[];
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->paths []= $d->readString();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    foreach ($this->paths as $elem) {
      $e->writeTag(1, 2);
      $e->writeString($elem);
    }
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writePrimitiveList('paths', 'paths', $this->paths);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'paths':
          foreach(\Protobuf\Internal\JsonDecoder::readList($v) as $vv) {
            $this->paths []= \Protobuf\Internal\JsonDecoder::readString($vv);
          }
          break;
      }
    }
  }
}


class XXX_FileDescriptor_field_mask__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'field_mask.proto';
  const string RAW =
  'eNqkWc2S48hx7m52b49qV7KXUngVs/ZEbo+0M2Nz2KuRD9JMrCPQJLobMpugAXBa48uwCB'
  .'TJ0oJVFApgD+XQA/jih/DRL+CzLz75PfwKCvviyKrCD39ke6U97CCJrK8ys7Iyv0STP51x'
  .'libvl1R9011lMpftP5lLOU+ZkabF7OIL8p1rVLqj6pv2D8jZiuYL9cNjaD3/TmCEq388Jt'
  .'+P5bK7s/Tqe9XCEf40Ov77n1uVuUypmHdlNr+cM6EXXJbLLmub3tSP/3zSuhld/cvJkxuD'
  .'MLLa3XuWpn8r5IOINiumfvFPf0PO22dPjv77+Jj8xyfk+JN268lR+9W/fQJ6RSxTuCpmM5'
  .'YpeAkG65mChOYUuMhZFi+omDOYyWxJcwI9udpkfL7I4dVXX/3MLgBPxF0AJ01Bv1OQMcWy'
  .'NUu6BBZ5vlKvLy8TtmapXLFMlXGJ5dI4Gcv05dQYcUkIBCzhKs/4tMi5FEBFAoViwAUoWW'
  .'Qx079MuaDZRtulOvDA8wXITP8ri5zAUiZ8xmOKCB2gGYMVy5Y8z1kCq0yuecISyBc0h3yB'
  .'3qWpfOBiDrEUCcdFChcRWLL8NSGA//3ljmEK5Ky0KJYJg2WhcshYTrnQqHQq1/jKRoyAkD'
  .'mPWQfyBVeQcpUjQnNHkeyYk3AVp5QvWdb9fUZw0YxFacQqk0kRs9oOUhvyR9lBwHqXyLhY'
  .'MpHT8pAuZQYyX7AMljRnGaepqkOtDyhfMAJN6yunhozrlQgs6JKhQc3cErJ+p+POc4UeCQ'
  .'MlMwVLuoEpw0xJIJfARCIzxTApVplcypyBiUmuIGEZX7MEZplcEhMFJWf5A6aJzSBQKxZj'
  .'BsEq45hYGeaOMFmklLadQHTrhRD619G9E7jghTAK/Lde3+3D1TuIbl3o+aN3gXdzG8GtP+'
  .'i7QQjOsA89fxgF3tU48oOQwIUTghde6DfO8B24vxwFbhiCH4B3Nxp4bh/unSBwhpHnhh3w'
  .'hr3BuO8NbzpwNY5g6EcEBt6dF7l9iPyO3nZ/HfjXcOcGvVtnGDlX3sCL3ukNr71oiJtd+w'
  .'EBB0ZOEHm98cAJYDQORn7oAnrW98LewPHu3H4XvCEMfXDfusMIwltnMNh2lIB/P3QDtL7p'
  .'Jly5MPCcq4GLW2k/+17g9iJ0qH7qeX13GDmDDoFw5PY8Z9AB95fu3WjgBO86FjR0/27sDi'
  .'PPGUDfuXNu3BCe/19RGQV+bxy4d2i1fw3h+CqMvGgcuXDj+30d7NAN3no9N3wDAz/UARuH'
  .'bodA34kcvfUo8K+9KHyDz1fj0NOB84aRGwTjUeT5wxdw69+7b90Aes44dPs6wv4QvcVccf'
  .'3gHcJiHPQJdOD+1o1u3QCDqqPlYBjCKPB6UVPNDyDyg4g0/IShezPwbtxhz8XXPsLce6H7'
  .'ApzAC1HB0xvDvfMO/LH2Gg9qHLrEPDdSt6PPE7xrcPpvPbTcao/8MPRsuuiw9W5tzLuEPC'
  .'LHJ+0WPPoMnx61WxdHb8jH5PTRf54fGeETcobCSbt1cf4Z+S75SEtHRvweOTfisZGt8nm7'
  .'dfH4tUV8etSxiMdGMEq47dPz71vEY0RE0SAea0SUrfJ5u/X0z/7KIv7o6NIinhjBKJ2gdP'
  .'65RTxBRBQN4olGRNkqn7dbP3rStYg/PrqwiC0jGKXWSbv14/PHFrGFiCgaxJZGRNkq49K/'
  .'+MIifnn0hUU8NYJROj1pt748/6FFPEVEFA3iqUZE2Sqft1tffg4W8dnRyCKeGcEonZ20W8'
  .'/OP7WIZ4iIokE804goW+XzduvZD3zy7x1ycnrU/uh3x8gpHv9rByYVrZnozsMUE7kCCorp'
  .'zqI2y6lMeQyavYDmSB3sVsA+0OUqZWWH1W9ew8WsSy92f5l2kwtC4JZlDCaznY0MsCYISw'
  .'aZlDksmVJ0zjowoRPd0CbTCTGKqmxhVgdmshB6+WQ26RjlZFLBVm91+yrXaO3udIJtQPsP'
  .'yMo0a6h6kOkhG4xEMbXBsBZo6qEWskgTmDKCtKHIBEtgiupz1F2xzPRWmVk6Y18LKFYJzV'
  .'mt0t2xIVUSFnTNgEJcqFwu4RehPwQmYplgO3+uGIMpS+XDC7T/qV19p1dzgdTwVyzWZIAQ'
  .'uF8wYXyyccO+yz5odyh2VavbAYrEbyWFqmMrM4Lev6zipmDG05xlxhmEc0YeRkuKdKOhDX'
  .'+SipXBooqU/bg2QnN0uK6zqAN8Vr0ptVYZW3NZKFJqoQF0tUq5OaIDFlNliY8q83IG/2Ae'
  .'ACi8hlevSmlavwBI4DX8pBY/oGYp/rZ82KDST0nzx9+8hp8hl1gwtKVIc3jgaYokrYpGRU'
  .'bWNC2Y0nfHxuZDZ6Mz9jcEnucLxjOjYzCmTN/BXBrGxma0SHOT4dKSYS5Ac3DAEyUgi3xV'
  .'5C9ekz/c9d+W3iGhyNiKUdzHXlGl/aIYXpYA+xCzVQ6WhadU5bCSipusnwElpgAAMkYxx1'
  .'T1MOWqegNyirlXwtqKgD7t3KGOubz1nTIpoHQKpGkZzOdUYRJt7TBrKBBYULyvTNT5qG/Q'
  .'EPmlvtNl1dBJmEhmLBMsxuzKeLrRW2/smRDI5epliqPRXiJ2wRMQU8XMPQvcMDroVGO/0q'
  .'uEZyzOq10q6A5MCx2ebVhih4At4PIaqZzRpBkvRuMFcJHwNU8KmpbmVoNBVcoyZqcjRD/k'
  .'ja1NS5YvZNIhdnpI2IwLO4k0SH0X61DGatNKk2ymE4hTRrN0U00m+obPmQbV8wfX3D9OqU'
  .'0Ca7Az8roAniBAxUbbaALAZjNMLvl73LosHxTmX8Z+XfCMJQSmbEHXODPgLXVGnjpYYsem'
  .'hPtlzJW+Lo2z5PtlXlVZp+BhweNFmbdyZpOJZnOWN0OP7WgusebnUkdSQyZdXW6w8G6ZXl'
  .'VhM/Sj27bimB3qgny4HhNdWlKGrQd/0weqoBC5LOIFbqvvb2UdV7CiquwskkDCVJzxqVlt'
  .'bbUmdKpewedCZpiLW+bRNK36u6md62aT0e2iLCD7Val2B0/tQIu1KfGBq5yLOakhrAU2Cu'
  .'YEag/LMozGlDOktUiwB7u4u11A9q3Th1IWTbvTfrWEia6WE7JbL3f6797R7UFVR21S0YSE'
  .'HI6J2ArM9l6HY8IVacajCzd8zbZULcCB/vvtO25cK+mWJJLG8X6bjb460OC0/3wvYNxQhw'
  .'Z7vSiV8502P/3DNt/z61Y+sDXLKhJUOojmPNA9ewyb3rPI8tFvZ9L/M/IeMtmEZVhlsFFX'
  .'vfKZspxll6c0olqoHCtrs9joWrNPbyxWxf/sB6gy+7o4Q4gY2eK+PTUTkM061SlhgJa7EN'
  .'0ZqYhZeV/qkmvNaqA1rO4gnU8ksYSlhDUOqaoAJoaeV1d4K7m2yI4sk9nE6xDFIQc5TgNy'
  .'i+TAgqp9jtOoUDW1VswGQMULtqTA1jItysrATfteMir0OlLPPgzilKPxFUH6RsgHHTncHL'
  .'sGm8mM6Vcznqa6VqEjJtK/Lpiq7o89PJMFPCtPSPcabQXHDvRAkRDU3RmHlYpWK5atecy0'
  .'vbYb4uhkbNQU8YFuysK5IVvB69jvilj8qACWZTLDAAuZ4+k5ynCPLeZmm1kqY9osuXXXwO'
  .'Zed0N1oB3WbMsEo6y5CVsxgQksdinvN1wkmoUdZjkHihipqIFlDwuJnbc5uGlu8xR6Uiie'
  .'VDQFG8ZtFI0MuzSzjZbRBp1t+w3WMppCMbWdnNXdt6c8cqLebUVM5QxG42jrMiuaczXbmB'
  .'0VW1KR81gReI6K+vu47qflx2I9TBVpai1SdiTWE7NbTsxy1iRwppqhRmfvbuohmyV4mSko'
  .'LuYps/0YHjSBNSON/uuCYivkouXYH8vlknbNRsp8B+fC8G1cpMlcLMWaZblha5ezTC4BaU'
  .'H2MqZLluIi+2eMNRP6MGwSYmqWc3JsT2vnI3+dQhVFrkbg8t0okzOesroZjBXLMI4ZfA0/'
  .'eVP+OlrgSLnS//8aXr3ZGnhLLL20ArIxSrhapXTzXnvfhLTvaZJkTKktVH0aZoqlu7xlYi'
  .'2e6MudSqnLrCriReUaqlZmlD0SXeo2jbnY1dDeXWzZYDICo6rQ/DIlqm9VJi10ZS93rzZG'
  .'5Z19h3TJOrvbbE8SWDJ9wcr0VDtfo/KM0bzRhSSqKvgVXgKKhs2LlJbfErrVNbaD5W5m7C'
  .'ZDqPPpzkqVJ3oTyJnK35vHBnOwp2hP96/f1G/CYloiqWL6vtzja/j5mwPEK9quVTEVDdpy'
  .'+EQbh4gIfva/qzeMaKyqu6D1crMq/yr1/KJ2+cKUZ650oX2B9mErK0sOF/bLhi2f9YnCW5'
  .'ZVf7i0fnKMcv2nNlupsWGXE5GZoFXH1lDz6U9sGp8x0E5SfydtdI5O+RlyjTubws5FnBZJ'
  .'NYHYL7aYa2YKJjDxhm+dgdd/7wQ34zt3GE3qzoc763rFFSTFKkVvWIK8pxBLulrRacq6hH'
  .'xMWqdHx+3T3x0/+pR0yOnp0clR+/S/jk/+/PET7Xfzi6k5pDJm3yVnqH2q1SvxDMWPPy3F'
  .'YxTbn5ViC8XHn08/0oXip/8TAAD//8MJwWI';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
