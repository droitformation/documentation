Services externe
================

#### Mail

Les envois d'email normaux pour les confirmations d'inscriptions, commande et abonnements sont envoyés via la fonction mail de php.

\---------------------------------------------------

#### Cloudmailin

Dû à un conflit de configuration entre le serveur exchange unine.ch et le Mail Delivery System de l'hébergeur (cyon.ch) les email rejetés ne sont pas acheminés sur l'adresse droit.formation@unine.ch. Pour contourner le problème un service externe reçoit les emails arrivant sur l'adresse info@publications.ch et les converti en format json qui est ensuite envoyé via une requéte POST sur la route **/incoming** (TrackingController.  
Si la requéte envoyé concerne une adresse email non valide, un email est alors crée avec les infos et transmis à droit.formation@unine.ch.

Il est possible de filtrer d'autres types d'emails si besoin.

<https://www.cloudmailin.com/>

 ```

droitformation.web@gmail.com
password: 9j2YB<Pj
```

\---------------------------------------------------

**NOTE**  
*Deux systèmes externe s'occupent d'envoyer le plus gros des emails depuis publications-droit.ch*

#### Mailjet

Envois des newsletters principales **"Campagne"** (Bail, Droitmatrimonial, Publications-droit et PI2) via l'API

Même chose pour les sites:

- droitdutravail.ch
- rcassurances.ch

[https://www.mailjet.com  
https://dev.mailjet.com](https://www.mailjet.com/)

 ```

Login: droitformation@droitne.ch
Mot de passe: SnKYZ9Ay7zGE4A.1QC
```

Les listes (Bail, Droitmatrimonial, Publications-droit) sont synchronisés via l'API  
 Si on ajoute le tag pi2 à une adresse avec un email cet email est automatiquement ajouté inhouse et synchonisé sur Mailjet, même chose si on retire le tag l'email est désinscrit de la liste inhouse et Mailjet.

Tant que la campagne n'a pas été envoyé les test sont eux aussi envoyés via Mailjet.

<span style="color: rgb(89, 89, 89);">\* mot de passe mis à jour juillet 18</span>

\---------------------------------------------------

#### Mailgun

Les newsletters **"hors campagne"** qui sont envoyés à des listes d'email provenant de divers sources sont envoyés par Mailgun par batch de 200 emails avec un job "**SendBulkEmail**".

[https://mailgun.com](https://mailgun.com/)

 ```

Login: droitformation.web@gmail.com
Mot de passe: 9j2YB<Pj
```

#### =========================================== 

#### \*\* Pour webmaster \*\*

**Note:**  
Outlook montre les infos du header si on ne spécifie pas le sender. Bien ajouter -&gt;sender('info@publications-droit.ch')

**Mailjet**:  
  
Account 30'000 emails par mois  
Domaines configurés DNS:

- droitdutravail.ch
- droitne.ch
- rcassurances.ch
- droitmatrimonial.ch
- hubwebdroit.ch
- publications-droit.ch
- bail.ch

**Mailgun**:  
  
Account 10'000 emails par mois  
Domaines configurés DNS:

- mg.droitne.ch
- mg.publications-droit.ch (principal pour le système)