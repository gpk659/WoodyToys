; /etc/bind/wt4.ephec-ti.be/db.wt4.ephec-ti.be

; ZONE : wt4.ephec-ti.be
; ------------------------------------------------------------------
$ORIGIN wt4.ephec-ti.be.
; empèche un utilisateur malveillant de récupérer la version de bind et de faire une attaque par après
; version "woodytoys"
; Durée de validité en seconde (10 min)
$TTL 60

@       IN      SOA    ns1.wt4.ephec-ti.be. admin.wt4.ephec-ti.be. (
                                            2017041701 ; Serial
                                            14400      ; Refresh (après 4h)
                                            3600       ; Retry (après 1 heure)
                                            1209600    ; Expire (après 1 semaine)
                                            600 )    ; Minimum TTL (10 minutes)

; Serveur de nom
wt4.ephec-ti.be.        IN          NS              ns1.wt4.ephec-ti.be.
wt4.ephec-ti.be.        IN          NS              ns2.wt4.ephec-ti.be.
ns1.wt4.ephec-ti.be.    IN          A				151.80.119.134
ns2.wt4.ephec-ti.be.    IN          A               151.80.119.157

; Sous-domaines - Serveurs Web
wt4.ephec-ti.be.             IN          A           151.80.119.134
b2b.wt4.ephec-ti.be.         IN          A			 151.80.119.134

www                         IN          CNAME       wt4.ephec-ti.be.

; MX
wt4.ephec-ti.be.            IN          MX      10      smtp.wt4.ephec-ti.be.

; Serveurs mail
smtp.wt4.ephec-ti.be.        IN          A           151.80.119.157

; OpenDKIM -- DKIM key mail for wt4.ephec-ti.be
mail._domainkey	   IN	  TXT    ( "v=DKIM1; k=rsa;""p=MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDJmgmIDPT3IKd3K+XGqrZy4gr7N/TNbtcf2pcCwCadSHi46iXMIweadtlst2mK1rJ7hO4v1oIyx2L1fjnC6gdn9P6MEyy5jB3qqz65IlNg6BPMRrSTKDZ2er+8I9Ai5FHrAnPP5h7PpPhsKps/oKNTWi9vDQUqi/LH9j10a/AqrQIDAQAB" )
