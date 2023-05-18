<?php

namespace Database\Factories;

use App\Csr;
use App\KeyPair;
use App\KeyPairType;

class Dummies
{
    public static function rsaKeyPair(): KeyPair
    {
        return new KeyPair(
            privateKey: '-----BEGIN PRIVATE KEY-----
MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQC3nAfZHRI6uA4s
ew+Q70gqYlEvJVOrHIBuLY4USYj9yGg5OnDrX/dodwYaS9ww8tpdkP+ETcCahtKb
QiI+EqTYOqnKm3eCd3pBbkx2Nige2DwzlrDVoBuKBvVObPEVJO0qLZ8D+yGAHDFy
okK5RYVV7R3F9+dw7Z2ie/ebBacllhsPAD92XM32v4/Lr9v/mfhQN6451xcwMDcx
ndADT4eSmpGCM1J8FpgtzauHP+nDVWHTSwk55BPHECskNMNOgYalagsdkCs2d237
RCvWYBFWMe8QL4bXL36TQVh4c1+ng1Mc72yNAd1ssqapyOAf1Ckj6HM2o9BIf7oI
uP+GvSwFAgMBAAECggEBAIDzMUPXOfVJTJMKvmzw0EMMF64/zdovwzceAVnYJ0Dt
Hd2LYMC9/lk8tmmDe5pZBOmPqxR1Mt6T75egw8HKgEFoOdUUiMN1O8R2PXcMI/M9
tFIa9AikUJMIvgGdW1eZPoNP1Q0Ls4RwyH2U3b2WyMUHKdDegYn7J6l03Pnf53rq
FjvW3eUxXcV0U4EUqh0D3tWym2WuOhtrp2GTupZlXoGgpiiTH8+2RL7emBYm+1p4
vv7yygtWpCVtP3kWtCISv0kjSD60bghz6m5JG7pyZfUJp3u0Aqlq0gwwjyI9Iheu
9hD+J70Rtgsx37xZ/6Ewm33Y2a8qWAmKgiab+YRWluECgYEA7YkDEdpNBJWEsuju
9jWUKsF/ijLwNrgEHnTwqw4vsGmHdw6GnFx3Eoh9WdibnlTORa/7CLBY4hWVxqwF
QQy7qv1DklrD0XdyD2RDc12iXbq24ZC8nWXABFsCuwGqqWnvbYAYvs5Enk5NKBX7
ci+R4FjehQ4gbWdar0LGQypHXm0CgYEAxeHjeOgxNWexP82FyLrPkbaaAte+gPj/
4VVHbpjaEPoaYpbRrfh6SECNMHe2KCZWsMWOTTPYzvfeM8c8lAMNKQehEO+fs19E
RS/yrTSiW1Y0AcsjhL9ESUkcUXu4uCvrELOL+7BkeLrfD/tzb+l1/XLJDuxzFUHr
bXJ6sQNXJPkCgYEA3erff1JgGiRGcY/FkSjFYJyet1KXsceBsaK3Jlh+nWY6NTTQ
9kw8wofZ9JK18NpyTBD5i0iWAcMAxzf3QKrQuhMbiiRaRdw+J7sYeTPFeaPzMBG0
5agmGOueRXBtLRHXqom+lKTI3s1wsD65SBjBRMRCQDTOfufMhWjxKdbaDpECgYEA
ubL4Q3iy5Uk//34htHQLYtUXxt8r+eCyUIY1GMb8rb3nkOm0MCzkpHVfikJtgVQp
Oo7Ksgybw+68aZ7pbIVIjl6IelpFZpFaggszE/Q3ALvu5lf6JxNPQ+8GUjlm6f7d
A7la/oFUaDAGMPtqI3XVsllL8WNXxHUuOHGcTg2ydBECgYB199U5dKAVDY2il3w9
u4u1qvYfktNckwSyJEmRx5DspxRcDOqJJVu55Qrrq05kUcOTfJMaHyprIrUwIf9y
kWele15w0SRqi5mSCItC8qdMysVhbmPbQ+Mi+2U0WLwyEGLIMTIJ9s18ga7kYvTS
IEl3vx/30vcD4Nayr+XFPPFW6g==
-----END PRIVATE KEY-----
',
            publicKey: '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt5wH2R0SOrgOLHsPkO9I
KmJRLyVTqxyAbi2OFEmI/choOTpw61/3aHcGGkvcMPLaXZD/hE3AmobSm0IiPhKk
2Dqpypt3gnd6QW5MdjYoHtg8M5aw1aAbigb1TmzxFSTtKi2fA/shgBwxcqJCuUWF
Ve0dxffncO2donv3mwWnJZYbDwA/dlzN9r+Py6/b/5n4UDeuOdcXMDA3MZ3QA0+H
kpqRgjNSfBaYLc2rhz/pw1Vh00sJOeQTxxArJDTDToGGpWoLHZArNndt+0Qr1mAR
VjHvEC+G1y9+k0FYeHNfp4NTHO9sjQHdbLKmqcjgH9QpI+hzNqPQSH+6CLj/hr0s
BQIDAQAB
-----END PUBLIC KEY-----
',
            type: KeyPairType::Rsa,
        );
    }

    public static function csr(): Csr
    {
        return new Csr(
            csr: '-----BEGIN CERTIFICATE REQUEST-----
MIIC0jCCAboCAQAwSjESMBAGA1UEAwwJYXBwbGUuY29tMQswCQYDVQQGEwJVUzET
MBEGA1UECAwKQ2FsaWZvcm5pYTESMBAGA1UEBwwJQ3VwZXJ0aW5vMIIBIjANBgkq
hkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt5wH2R0SOrgOLHsPkO9IKmJRLyVTqxyA
bi2OFEmI/choOTpw61/3aHcGGkvcMPLaXZD/hE3AmobSm0IiPhKk2Dqpypt3gnd6
QW5MdjYoHtg8M5aw1aAbigb1TmzxFSTtKi2fA/shgBwxcqJCuUWFVe0dxffncO2d
onv3mwWnJZYbDwA/dlzN9r+Py6/b/5n4UDeuOdcXMDA3MZ3QA0+HkpqRgjNSfBaY
Lc2rhz/pw1Vh00sJOeQTxxArJDTDToGGpWoLHZArNndt+0Qr1mARVjHvEC+G1y9+
k0FYeHNfp4NTHO9sjQHdbLKmqcjgH9QpI+hzNqPQSH+6CLj/hr0sBQIDAQABoEMw
QQYJKoZIhvcNAQkOMTQwMjAOBgNVHQ8BAf8EBAMCBaAwIAYDVR0lAQH/BBYwFAYI
KwYBBQUHAwEGCCsGAQUFBwMCMA0GCSqGSIb3DQEBCwUAA4IBAQBu5wpFC+oFCsj8
5LhnrvoyhRkp6hBX9tSMInP9KKKRrJTm+ko4mTDb8p7pbggQbdkaGgXd9ilsCYjR
9fLSfeeJb6YPK6CVZiNC4j41XhKxaCyE5GQUmk5BeAgiwFmKWKeYLoLvG33mCHXL
4wxZayi9F5gsXpO5zH6HKx1MW6zhBLCRhn6QpOfwnzv4/RVq01/auj1Ccehw3NqU
mLcQnGlKKcrs/tqCm7A4v66xFWIqtvEIFKLkW8uEKidWBE4nvLaproMGwjk5KRUX
iSalP9NO0wpoU0f7jQaNRkVTBPxSbOEGSAboyBTj86T1T1Tdo5cY9x6hRUSEDvjk
KlXEzrtR
-----END CERTIFICATE REQUEST-----
',
            keyPair: self::rsaKeyPair()
        );
    }

    public static function certificate(): string
    {
        return '-----BEGIN CERTIFICATE-----
MIIDljCCAn6gAwIBAgIUFoR4SFF7SJui6Li+9+e9NV/x1O4wDQYJKoZIhvcNAQEL
BQAwSjESMBAGA1UEAwwJYXBwbGUuY29tMQswCQYDVQQGEwJVUzETMBEGA1UECAwK
Q2FsaWZvcm5pYTESMBAGA1UEBwwJQ3VwZXJ0aW5vMB4XDTIzMDExMjE5MTE0M1oX
DTI0MDExMjE5MTE0M1owSjESMBAGA1UEAwwJYXBwbGUuY29tMQswCQYDVQQGEwJV
UzETMBEGA1UECAwKQ2FsaWZvcm5pYTESMBAGA1UEBwwJQ3VwZXJ0aW5vMIIBIjAN
BgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt5wH2R0SOrgOLHsPkO9IKmJRLyVT
qxyAbi2OFEmI/choOTpw61/3aHcGGkvcMPLaXZD/hE3AmobSm0IiPhKk2Dqpypt3
gnd6QW5MdjYoHtg8M5aw1aAbigb1TmzxFSTtKi2fA/shgBwxcqJCuUWFVe0dxffn
cO2donv3mwWnJZYbDwA/dlzN9r+Py6/b/5n4UDeuOdcXMDA3MZ3QA0+HkpqRgjNS
fBaYLc2rhz/pw1Vh00sJOeQTxxArJDTDToGGpWoLHZArNndt+0Qr1mARVjHvEC+G
1y9+k0FYeHNfp4NTHO9sjQHdbLKmqcjgH9QpI+hzNqPQSH+6CLj/hr0sBQIDAQAB
o3QwcjAdBgNVHQ4EFgQUkvR5AFCTfTy9PGXujCAjTIsCf8MwHwYDVR0jBBgwFoAU
kvR5AFCTfTy9PGXujCAjTIsCf8MwDgYDVR0PAQH/BAQDAgWgMCAGA1UdJQEB/wQW
MBQGCCsGAQUFBwMBBggrBgEFBQcDAjANBgkqhkiG9w0BAQsFAAOCAQEAAXqWSEI4
6ICx4566WqPLjBFmRbD3fkNvaQzRfsjQqezWs3BAuEBDIkN8YtK19ZJwgL1xaK/i
r4B+ixHc5epuacTFVxDvcWtN+oxfVXdQX96Jx42yrpIhJq3BH++w0P3TIDySO376
Bc9CvLrPnYwn/0eQVGMvHEkNYJHjkN8GmdOqJDwclyD1299sAVTDCTE74Jy/8WWd
IM+o3aU+UDLFCponDntNHpX/E9oEbgYM+QgnZ2RXD/cvSY6shTPmuP05CYaeBASS
DagFITQQlIjBW9FsFFXQb425w+gIBPvbro4RT7jDwny5e4E0bPnkZ8zbggPJHxVQ
ThJK0y+FPoONrw==
-----END CERTIFICATE-----
';
    }

    public static function ed25519KeyPair(): KeyPair
    {
        return new KeyPair(
            privateKey: '-----BEGIN OPENSSH PRIVATE KEY-----
b3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAAAMwAAAAtzc2gtZW
QyNTUxOQAAACAG+TO75bLZQTj8ejaHFwHsMc38V/ALow4n0dJa0H/jpwAAAJi5D4sRuQ+L
EQAAAAtzc2gtZWQyNTUxOQAAACAG+TO75bLZQTj8ejaHFwHsMc38V/ALow4n0dJa0H/jpw
AAAECfx82V4HmzOrhOL/7//ZjRt8Az4CDGEKFVf87GwAAyUAb5M7vlstlBOPx6NocXAewx
zfxX8AujDifR0lrQf+OnAAAAE2NhZGR5QHByb3RvbmUubWVkaWEBAg==
-----END OPENSSH PRIVATE KEY-----
',
            publicKey: 'ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIAb5M7vlstlBOPx6NocXAewxzfxX8AujDifR0lrQf+On eddy@protone.media',
            type: KeyPairType::Ed25519
        );
    }
}
