Rappels inscriptions
====================

### Liste des rappels

Les inscriptions qui ne sont pas marquées comme payées sont affichées dans la liste des rappels.

Il est possible de générer des rappels pour chacune et d'en créer plusieurs si besoin. Le système indique automatiquement du combientième il s'agit dans la liste et le pdf.

Exemple pour le rappel du 14/11/2016 de Cindy:

![](https://library.test/images/O503erVDjyvcAuwW0plvcGTIpyONL4fuJqtFT76a.png)  
  
Il est possible de générer tous les rappels (+pdf) grâce au **<span style="color: rgb(149, 55, 52);">bouton rouge</span>** et de les envoyer directement aux détenteurs de l'inscription via email grâce au **bouton noir**.

S'il manque un ou des rappels (aucun n'a été généré auparavant) et que l'on envoie les rappels, le système va automatiquement aller créer les rappels manquant avant l'envoi.

Pour créer une liste des rappels en pdf avec possibilité d'imprimer sur feuille avec BV il suffit de cliquer sur le <span style="color: rgb(31, 73, 125);">**bouton Bleu**</span>. Le système va alors générer des rappels avec BV dans un seul fichier téléchargeable. Ici en bleu en haut à droite "<span style="color: rgb(49, 133, 155);">Télécharger Rappels + BV</span>".

![](https://library.test/images/3JrqkLfJZ2yKHBPrOQxHTtKwPoTiGNutHs6n7ERX.png)
**Note:**  
Lorsqu'il existe des conférences le rappel pour une inscription ne s'affichent que si la/les conférences attaché à l'inscription est terminé.

```

// Filter for occurrences
$inscriptions = !$colloque->occurrences->isEmpty() ? $inscriptions->reject(function ($inscription, $key) {    
    return isset($inscription->occurrence_done) && $inscription->occurrence_done->isEmpty();
}) : $inscriptions;<br></br>
```

Lors que l'on clique sur "<span style="color: rgb(63, 63, 63);">**Confirmer la liste et envoyer**</span>" et il est possible de sélectionner les rappels à envoyer et de voir l'email envoyé pour le rappel.

![](https://library.test/images/bZbLxUEGSr4BzH2oyyfP8Y9xv6QtSuVNiZEJeF4J.png)
**Note:**  
*Attention cela ne créera pas un rappel en plus si la personne à besoin d'un 2ème ou Nème rappel il faudra lui en créer un nouveau. Par contre il est possible de créer à ceux qui en ont déjà un et qui n'ont toujours pas payé, un Nème si l'on génère à nouveau tous les rappels avec **<span style="color: rgb(149, 55, 52);">bouton rouge</span>****.*

Il est aussi possible de supprimer un rappel.

Comme dans la liste des inscriptions il est possible de marquer comme payé l'inscription. Ils ne seront alors plus pris en compte dans la liste ni lors de l'envoi par email.   
  
Lorsque les inscription sont marquées comme payées les rappels sont toujours existants, au secrétariat de me dire si on a besoin de la liste.

====================================================================

**\*\* WEBMASTER \*\***

La génération des rappels/facture (bouton noir) sont fait grâce à un composant VueJs.

Pour la facture (shop, colloque, abo) =&gt; **Generate.vue**  
pour le rappel (shop,colloque) =&gt; **Rappel.vue**

![](https://library.test/images/oWQDi256Dbkkq0Hrd3V2RzEFBfwEBYsjjbxUfAgq.png)
