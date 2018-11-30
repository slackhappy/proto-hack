<?hh // strict
namespace google\protobuf;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: timestamp.proto

class Timestamp implements \Protobuf\Message {
  public int $seconds;
  public int $nanos;

  public function __construct() {
    $this->seconds = 0;
    $this->nanos = 0;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->seconds = $d->readVarint();
          break;
        case 2:
          $this->nanos = $d->readVarint32Signed();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->seconds !== 0) {
      $e->writeTag(1, 0);
      $e->writeVarint($this->seconds);
    }
    if ($this->nanos !== 0) {
      $e->writeTag(2, 0);
      $e->writeVarint($this->nanos);
    }
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeInt64Signed('seconds', 'seconds', $this->seconds, false);
    $e->writeInt32('nanos', 'nanos', $this->nanos, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'seconds':
          $this->seconds = \Protobuf\Internal\JsonDecoder::readInt64Signed($v);
          break;
        case 'nanos':
          $this->nanos = \Protobuf\Internal\JsonDecoder::readInt32Signed($v);
          break;
      }
    }
  }
}


class XXX_FileDescriptor_timestamp__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'timestamp.proto';
  const string RAW =
  'eNqkWE9320hyF0nJcjrzJ8OZl53neXFq5ZVN7lIgZdmeSN45UBQkwaEIBgCtsf3mrZpAk+'
  .'wdEI2gm6Jlx/Fpc8wnyCmHHHLOF8g955xzyctXyDGvugGS8p+dfRs+6xkFVP+q6tfVXdVN'
  .'Pld8yqSi09RKM6FE9fOxEOOYGWk4G209Jn8SFDrVr8mmZKFIIvl1CUq1ileI1a/IRkITIb'
  .'8uQ6m24Rnh8O/Jl6GYWu9gHn62QOzjq37p+a/GXE1mQysU0+ZYxDQZNwvtZqquUiabC0//'
  .'t1T653LlpH/4r+XbJwa5n+ta5yyO/zoR8yTAMU/+q0U2qxu31/6hVCL/8QkpfVKt3F6r3v'
  .'/3T0CPCEUMh7PRiGUSdsBg3ZMQUUWBJ4pl4YQmYwYjkU2pItAR6VXGxxMF91utv8oHgJOE'
  .'FkA7jkF/k5AxybJLFlkEJkql8qDZjNgli0XKMlmQgZGmuRM7Q+NEkxDwWMSlyvhwprhIgC'
  .'YRzCQDnoAUsyxk+s2QJzS70n7JBsy5moDI9P9ipghMRcRHPKSI0ACaMUhZNuVKsQjSTFzy'
  .'iEWgJlSBmmB0cSzmPBkDTiXHQRIHEZgydUAI4O+X7zgmQYwKj0IRMZjOpIKMKcoTjUqH4h'
  .'I/5YwRSITiIWuAmnAJMZcKEVYtJtE77kRchjHlU5ZZH3OCJ6tcFE6kmYhmIVv6QZaO/L/8'
  .'IJBHF4lwNmWJosUkNUUGQk1YBlOqWMZpLJdU6wlSE0Zg1ftFUD3G9UgETuiUoUOruZWI5T'
  .'fNO1cSI0oMlMgkTOkVDBlmSgRKAEsikUmGSZFmYioUA8OJkhCxjF+yCEaZmBLDghQjNcc0'
  .'yTMIZMpCzCBIM46JlWHuJCaLpNS+EwhOHR989zg4b3s2OD70Pfepc2QfweEzCE5t6Lj9Z5'
  .'5zchrAqds9sj0f2r0j6Li9wHMOB4Hr+QS22j44/pb+0u49A/v7vmf7PrgeOGf9rmMfwXnb'
  .'89q9wLH9Bji9Tndw5PROGnA4CKDnBgS6zpkT2EcQuA1t9v1x4B7Dme11Ttu9oH3odJ3gmT'
  .'Z47AQ9NHbsegTa0G97gdMZdNse9Ade3/VtwMiOHL/TbTtn9pEFTg96LthP7V4A/mm7270e'
  .'KAH3vGd76P1qmHBoQ9dpH3ZtNKXjPHI8uxNgQMunjnNk94J2t0HA79sdp91tgP29fdbvtr'
  .'1njRzUt/9mYPcCp92Fo/ZZ+8T2ofZTrPQ9tzPw7DP02j0Gf3DoB04wCGw4cd0jTbZve0+d'
  .'ju0/hq7ra8IGvt0gcNQO2tp033OPncB/jM+HA9/RxDm9wPa8QT9w3F4dTt1z+6ntQac98O'
  .'0jzbDbw2gxV2zXe4awyIOegQacn9rBqe0hqZqtNtLgB57TCVbVXA8C1wvISpzQs0+6zond'
  .'69j42UWYc8e369D2HB8VHG0YztvPwB3oqHGiBr5NzPNK6jb0fIJzDO2jpw56nmv3Xd938n'
  .'TRtHVOc84tQm6SUrlagZs/w6eb1crW2mPyp2T95v9srhnhE7KBQrla2dr8GfmU3NDSmhE/'
  .'I5tGLBk5V96sVrZuHeSId9b+MkcsGcEoodk7C8QSIt5ZIJY04p0FYqlSrdy5dTtH/MXaYY'
  .'5YNoJRKqO0+UWOWEZEFA1iWSOinCtvViu/+KqdI26vNXLEihGMUqVcrWxvfpkjVhARRYNY'
  .'0Ygo58qb1cr2n/8qR7y71swR141glNbL1crdzW9yxHVERNEgrmtElHPlzWrl7m0rR7y3tp'
  .'UjbhjBKG2Uq5V7m7dyxA1ERNEgbmhElHPlSrVy7y9+niPW1n6eI94wglG6Ua5Waptf54g3'
  .'EBFFg3hDI6KcK29WK7VvgPzbN6S8vlbdeIVNyq1/+QbasOiOdCljkiVKAoVU8ETpAsSn2B'
  .'BELGVJxBJdwGhyZd6/EgkjuPGHNGZJRLPGEoVFQCXkLZsudKOMhstyXnzAao39m5axnRGx'
  .'6UZ4AoOgA3Yqwok2Z4GjgEtgCTYB2KpgwdSlrp+JmKWKh3CSsbHIOE2gk/sE8wkPJ8BeKo'
  .'YGsbgtlQrHCQxp+OOcZqgh4IrRDETynkkq5WyKVmkcw5QnM8V0+wKPWmQRUiyScQO4xSyI'
  .'GU2XoWYMtuSU0YxFWyCF6YoSsapFQNFhzNBmwhiaHInM9IcpNjy6loOnO0Uu87raarV2d/'
  .'S/oNU60P+eYxT7+/v7O7v3d/Z2g/t7Bw/3Dx7uW/vF77lF4PAKCVcZD5WmMncpQ/gGzBmw'
  .'RM4yZt7OGYTImEguWaZACZLPqpgCeMcd2Nvb28d+lgFCJmNpEfAZgxdFYzqfzy3O1MgS2b'
  .'iZjUL8w0GWeql+qP0hWnXsBe6A/ZJO05hJQopH2D2AjpimM8VWUlr71nd953u4wAyq1S+s'
  .'vMdcKi16/cfmy/KUIpn6TT55NT28N+h26/UP6ukcrrXqj1d8uv9TPo2ZQhQxiujVim9SZb'
  .'NQaQOXNAZ1mVu8pn5XXTZAO/T4jw3p0lKXKP2+iIzSTLIQfgm7rdb1CPc+GuE5T/buw8UJ'
  .'U/6VVGyKn9vymMcsuD4Rx07XDpwzG0Yqd+NjY+6OVOHpwOkFjx6A4uGPEr6DWq1m3tRHyo'
  .'rmp3w8OaJKj6rDr38Ne/fr8Hegv3XFvPhU8NZsQhv9jcRcakhcWbut1sq+JK2FAtP70e6j'
  .'95fcAg2H7z568ODBt3uPWq3F+h+ykcgYDBL+skDZ/7b1Lor1x01mzcQPtZohpaknC3912F'
  .'l15ycyGHGQrgJnewVHJ0D9WgI8+GgCPKGXFC7MRFrhLMtYolDljMcxlysJgNslTPVb+A4+'
  .'PuD3pDl8t3xrJWx+OONxxLJaHQPzc4ZyE4aYusHCH+r0TOw8URh5rmlCz8PWDNStISJrX5'
  .'YcPPwoB3kURRGF/pWamPPMNfpX3a/V352bE6Y6SzZqdb0DPvHdHpzRNOXJmBBwEvPGXB40'
  .'dJFb4ekqZderGNB8j87PmAReFDv4H7gR56YsCLA2cNkwMOYtGtt6jUX0zc7rqUjU5M3O64'
  .'hevQleT8Qse3PwesqTNwevJQvfvLBeY2OAifzmh+dbBOYTljEwoxGIxnN6JYG9xMZCLur+'
  .'SMwyiPiYK4kVPmaQW2qANtUgYIw1QFtr6GqlTepK/IplYielUWROsWouCjRGwwnGxRYdC4'
  .'0X1b2RtxNYCscCZqkutMXQmq765uXuh/uaeoNo+yI1yMbS1vMtkLPRiL/EZouHFBsLnEXM'
  .'A2yzoLY1CDpb9cfX3hIkKGN/O+MZiyxog77l2TPJIPXVAH/FMpATMYujgsqZZLq1qlG5sB'
  .'bB8IqgG3WcgAQP44nK+6t3UwmJpNdMpTSTSzNDRkB3MUoADUOWKhgKNdE2cay5uyhikO/5'
  .'ATQBMRpJZur9sciAmbXWgK37rd1vcc/cfRi0dg/2Wge7D63W7vOtPLslaHmx6aZUKgJaU9'
  .'sXCTyhyYxmV7D7sAGIZuULiF5SP8x4qhrY+l1rdihg0QAx/C3DwizMVUae7Ct9qFQUu8kI'
  .'Xijh+K6v11itvlxTi7s5aype8TimenGxZGfgNyMRyuY5GzaXnjQ9NmIZS0LWPInFkMa/cb'
  .'ULson+NFeM/KBv0CYisjAWs9E09DLPPbrAzky30cXDRREPRjpkRbAMm9APRfjiQqpspEeu'
  .'BCRCaaVmX8NQ7jdjPsxodqXvUK2JmsZ39FMxtk4WV1RmX8xtyJSFcG/72c72dGc7CrZPD7'
  .'bPDrZ9a3v0/J4FXf4jm3PJGrhhIT96joh2HdMZ0Z6IiOpUvSfhxYXju0WhPzZbVZSLtfrF'
  .'DzVzXZrvcr8VkZkIfNhBr5o05Xo+irc6nKbxtfk+to6zMLCzQ6COHIqhvqKkeYyK4Ukp1U'
  .'tDjGDMEpZRs8iKBSbNhryg3iL6V1nHA92rm1+QfyqR9XV9tH9b/urWP5bAWx7bipwXI53q'
  .'ml3Jk3C15yAfbjrgbCYVJoGuWx85UJAPnSieA0/CeCb5JbMI+ZRsoHfr1fW35Vf60I3iBn'
  .'q7WUilauXtzc8LqVKtvK1+Sf7bxFWqrv+uVK7e+s8S9ESyk7AxVfySXT870jxSwOPTh/ZY'
  .'C3r5wGLfhksaz5g0qbcE03e4UvE4hgm9ZJCs2tTQ+UBizkChmCUKpwZPisXx+F3y8qNXI/'
  .'8j1wj6TEddWq9u/K5UfvtVTlhpQ8e9WYiahpufFmIFxT/7YnjD7Ln/FwAA///YyYRu';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
