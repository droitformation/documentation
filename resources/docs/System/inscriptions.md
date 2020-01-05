Inscriptions
============

### Inscription simple via admin

1\. Choisir si c'est une inscription simple ou une inscription multiple  
2\. Choisir le colloque  
3\. Rechercher et choisir une personne

![](https://library.test/images/CdYYKtJ6qDgPaxN2Qy9wcg9q3QMAStZ0owvGVRap.png)

<span style="color: rgb(89, 89, 89);">*Il faut un minimum de 3 caractères et *peux prendre quelques secondes*.   
La recherche est faite sur nom et/ou prénom.*</span>

![](https://library.test/images/fk4LyReOICykmcohG5wP4yW2u4TzTCNdOqQCaLtu.png)

L'adresse de la personne choisie s'affiche.

4\. Lorsque l'on a choisi colloque et adresse cliquer sur suivant.

![](https://library.test/images/CHkZKNWKYpBCSLxKdoiICmyTatKeUxbFSeyeMPQ5.png)

5-6.Choisir le prix ainsi que les options éventuelles

7\. Finaliser l'inscription

### Inscription multiple via admin

![](https://library.test/images/DwOog4xBMrJXX1CDVPSOmcGowjwRs32Y1L7oZOCT.png)

Même procédure que pour une inscription simple.

Lorsque l'on a choisi le colloque et la **personne/entité** à qui facturer les inscriptions, indiquer les différents participants et leur informations.

5\. Il suffit de cliquer sur le bouton bleu pour ajouter un participant.

6\. Pour supprimer cliquer sur la croix rouge du participant correspondant.

7\. Finaliser l'inscription


### Liste des inscriptions pour un colloque

La première partie permet d'ajouter (**<span style="color: rgb(155, 187, 89);">bouton vert</span>**) une inscription. Tout en haut de l'écran à droite un <span style="color: rgb(151, 72, 6);">**bouton brun**</span> permet d'aller directement vers tous les **rappels** et tout en bas de la liste un **<span style="color: rgb(242, 195, 20);">bouton jaune</span>** donne accès à la liste des désinscription.

![](https://library.test/images/hY8ngqqbRQdfeGvcKwhaMZ9sbxLEIAIrT83AXYss.png)

![](https://library.test/images/dLm4Gn02rLIhQ6P5FpKiKhYeOMvPxrsqjbclZfnW.png)

La listes des inscription comporte les inscriptions simple et groupés.  
Il est possible de modifier toutes les inscriptions (<span style="color: rgb(75, 172, 198);">**bouton bleu clair**</span>), de désinscrire (<span style="color: rgb(192, 80, 77);">**bouton rouge**</span>), d'ajouter des participants à un groupe (<span style="color: rgb(155, 187, 89);">**bouton vert**</span>) et de changer le détenteur des inscriptions groupés.

La liste affiche aussi le statut et permet de marquer l'inscription (simple et groupe) comme payé avec la date.  
Il est possible d'aller directement sur un compte utilisateur en cliquant sur le nom de la personne ou de rechercher une inscription par le numéro d'inscription ou le nom/prénom.

![](https://library.test/images/Fi0sU23Jjcwkbsi3fHEXhlO6maT0gGuLlI0Kajiq.png)

**Exporter en format excel**

Permet de trier les options à choix, choisir les infos des participants (nom, prénom, adresse, etc...) ainsi que trier les salles ou conférences ou exporter une liste des salle/conférence une par une.

1. Permet de choisir que les informations pertinentes
2. Pas de tri =&gt; Liste complète des inscriptions avec les toutes les options dans la dernière colonne.  
  Trier par options =&gt; Trier par les choix optionnel (ex: repas)  
   Trier par choix obligatoires=&gt; Liste des inscriptions par trié par les options à choix **obligatoires** et les option facultatives dans la dernière colonne. (ex: choix conférence)
3. Trier par conférences/salles ou ne choisir qu'une conférence/salle

Les filtres sont cumulables.

![](https://library.test/images/FuothSzsI3VgHPgNuKWeEmlSCOj2wK08ExMVwCYB.png)
<span style="color: rgb(31, 73, 125);">**<span style="color: rgb(54, 96, 146);">Générer un pdf avec les badges</span>**</span> formaté par le nombre et la taille des étiquettes.Le logo sur le badge est celui d el'oganisateur indiqué dans la colloque.

![](https://library.test/images/FqZqQ7ozBieyQYVwMguLT3Yhkv4Y4U8l9ygZdmEe.png)

**<span style="color: rgb(151, 72, 6);">Exporter les qrcodes</span>** (+ nom et numéro d'inscription) pour scanner les participants ayant oublié leurs bon de participation (pas de filtres).

###   
Désinscriptions

Pour restaurer une inscription il suffit de cliquer sur le bouton restaurer.  
Les documents sont remis en place et si l'inscription faisait partie d'un groupe (lui aussi supprimé) le groupe est restauré.

**Note:** *Le système ne permettra pas la restauration si une autre inscription pour la même personne et pour le même colloque a été crée entre-temps.*

![](https://library.test/images/V2jWv4yBdbIVeM3T8K3KAxKHyHpShFFMq3wg94kW.png)

### Voir une inscription

Cliquer sur le bouton

![](https://library.test/images/1SMbiedP5DsU51PXKAnmKTHkakw3nZHNTP8hd8JI.png)

Une fenêtre s'ouvre et permet de voir toutes les infos ainsi que les documents

![](https://library.test/images/CqewkiP03RDTOMJGGaQspzHeiBOADXk3LDKyXOhV.png)

### Éditer une inscription

Cliquer sur le bouton

![](https://library.test/images/DxY93v4ivgguGcrCvJLtPkgXZETpC9f9n1Fs777q.png)

Une fenêtre s'ouvre et permet d'éditer l'inscription

![](https://library.test/images/5eKQxEs8enhgasOYi0t19DsXj611ONvYEnlPdwq9.png)

========================================================

#### \*\* Pour webmaster \*\*

Le controller (Backend\\InscriptionController) va aller filtrer la liste des inscriptions pour éviter les erreurs si une/des inscription(s) n'est pas valable(s). Deux listes sont retournées une avec les inscriptions valides l'autre non valides.

 ```

list($inscriptions_filter, $invalid) = $inscriptions->partition(function ($inscription) {    
    $display = new \App\Droit\Inscription\Entities\Display($inscription);    
    return $display->isValid();
});
```

 L'entitié "Display" va valider l'inscription dans le cas ou par exemple l'adresse principale ou le compte a été supprimé.

Si une inscription est non valide on obtient quelques informations en dessus de la liste des inscriptions. Si il est possible de restaurer le système va tenter de le faire (avec AccountWorker) en restaurant le compte et éventuellement l'adresse de contact si elle a aussi été supprimée.

![](https://library.test/images/FKD9KZEHN92El4gloaLlyuAs7upjx1VMBpiJdL15.png)
### Nom des fichiers

#### Inscription simple

**Dossier** : files/colloques<span style="color: rgb(31, 73, 125);"></span>

<span style="color: rgb(31, 73, 125);">**<span style="color: rgb(0, 0, 0);">Types de docs:</span> bon**</span>**<span style="color: rgb(31, 73, 125);">, bv</span>****<span style="color: rgb(31, 73, 125);">, facture, </span>**<span style="color: rgb(31, 73, 125);">**rappel**</span>

<span style="color: rgb(31, 73, 125);"></span>**<span style="color: rgb(31, 73, 125);">typededoc</span>\_<span style="color: rgb(155, 187, 89);">colloque\_id</span>-<span style="color: rgb(75, 172, 198);">inscription\_id</span>.pdf**

#### Inscriptions multiples

Facture, BV****<span style="color: rgb(31, 73, 125);">  
typededoc</span>**\_<span style="color: rgb(155, 187, 89);">colloque\_id</span>-<span style="color: rgb(49, 133, 155);">group\_id</span>.pdf**

Bon**<span style="color: rgb(31, 73, 125);">  
typededoc</span>\_<span style="color: rgb(155, 187, 89);">colloque\_id</span><span style="color: rgb(155, 187, 89);"></span>-<span style="color: rgb(247, 150, 70);">user\_id</span>-<span style="color: rgb(99, 36, 35);">participant</span>.pdf**

#### Rappel

**<span style="color: rgb(31, 73, 125);">rappel</span>\_<span style="color: rgb(192, 80, 77);">rappel\_id</span><span style="color: rgb(192, 80, 77);"></span><span style="color: rgb(99, 36, 35);"></span>.pdf**
