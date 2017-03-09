# vim /etc/bind/wt4.ephec-ti.be/db.wt4.ephec-ti.be

; ZONE : wt4.ephec-ti.be
; ------------------------------------------------------------------
# Durée de validité en seconde (2min)
$TTL 7200 

@       IN      SOA    ns1.ephec-ti.be. admin.wt4.ephec-ti.be. (
                                        2017022301 ; Serial
                                        14400      ; Refresh
                                        3600       ; Retry
                                        1209600    ; Expire - 1 week
                                        86400 )    ; Minimum

; NAMESERVERS

@
@                   IN                NS                   ephec-ti.be.
@					IN				  AAAA				   151.80.119.137


; Sous-domaines - Serveurs Web
www					IN 				  CNAME				   www.wt4.ephec-ti.be
b2b					IN				  CNAME				   b2b.wt4.ephec-ti.be
intranet			        IN 				  CNAME				   intranet.wt4.ephec-ti.be

; Serveur mails     

; MX

; Serveur de fichiers
