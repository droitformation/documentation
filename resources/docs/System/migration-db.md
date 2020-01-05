Migration DB
============

**Système en test sur [](http://hubwebdroit.ch)**[staging.hubwebdroit.ch](http://staging.hubwebdroit.ch)

========== Utilisé pour l'environnement staging ===========

**Système d'attrapage des emails**  **<span style="color: rgb(149, 55, 52);">Attention tous les emails se retrouvent ici, même les récupérations de mots de passe!</span>**

<http://mailtrap.io/>

 ```

Login: droitformation.web@gmail.com
Mot de passe:9j2YB<Pj
```

**======================================**

**Monitor website**

<https://uptimerobot.com>

 ```

Login: droitformation.web@gmail.com
Mot de passe: 9j2YB<Pj
APIKEY: m778701402-0740289f13ea5f33337ee07c
```

UpTime status page

[https://stats.uptimerobot.com/yo0Gnf2BD  ](https://stats.uptimerobot.com/yo0Gnf2BD)

[](https://stats.uptimerobot.com/yo0Gnf2BD)

### Calendrier

![](https://library.test/images/qBtf7lwhGjBdjWcJkCdBiWujpjcw6EdxC03kCU0R.png)

====================== Pour webmaster ============================

Préparation de la migration des données via le pont-bridge

**Pont**

1. php 5.3.29
2. DB publications-droit + npa + organisateurs + shop\_shipping

**Bridge**

1. php 7.0.10
2. Migrations + seed + npa
3. Inclure: cantons, pays, civilités, spécialisations, membres, professions, domaines, newsletter

**Installer Noms de domaines**

- Installer emails
- Lier email mailjet
- Changer DNS
- Installer htaccess

**Données à basculer**

- Lier les livres aux catégories
- Vérifier les endroits dans les colloques
- Lier les abonnements et mettre les attributs aux livres
- Vérifier les bloc de contenus (matrimonial news)
- Retailler les éventuelles images trop lourdes
- Vérifier les programmes et documents, illustrations (Colloques)
- Vérifier lien internes (documents contenus)
- Recréer comptes pour secrétariat

Préparer les listes des newsletters

**Emails à créer**

- info@publications-droit.ch
- bounce@publications-droit.ch
- info@bail.ch
- bounce@bail.ch
- info@droitmatrimonial.ch
- bounce@droitmatrimonial.ch<span class="redactor-invisible-space"></span>