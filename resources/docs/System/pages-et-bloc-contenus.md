Pages et bloc contenus
======================

 Les contenus **générés** proviennent des contributions comme les arrêts, analyses, revues, newsletters etc..

Les **pages** normales avec titre, texte et éventuellemen des contenus spéciaux ou la faq.

<span style="color: rgb(75, 172, 198);">**1**</span> les caractéristique de la page, si elle est visible sur le site, le titre dans le menu, à quel site elle appartient, dans quel menu elle apparaît, de quel type de page il s'agit.

![](https://library.test/images/98eteEnGjl1BQRoHVHm9r7GQ7BC3vX80CAZS2Pxf.png)

Sur le site:

- En <span style="color: rgb(89, 89, 89);">**gris**</span> le titre et texte.
- En <span style="color: rgb(128, 100, 162);">**violet**</span> les blocs de contenus.

![](https://library.test/images/xFRYVnIgrByRFAPzti94fuTeewFetoRjthqv6g1H.png)
**Bloc contenus**  
Divers type de contenus surtout utilisés pour le site bail, peuvent être ajouté dans une page.  
  
Sur bail.ch

- Page bibliographie =&gt; blocs "Autorité"
- Page autorités =&gt; blocs "Autorité"
- Page lois =&gt; blocs "Lois"
- Page liens utiles =&gt; blocs "Lien"

**Autorité**: Titre, image d'illustration, texte

 ![](https://library.test/images/JZ8ojsF1dKYyD9HaBwEnUL45EPMr6YQCzkr5wOPg.png)
 Lien: Titre et texte, lien, fichier etc..

 ![](https://library.test/images/kAGvjTjMKouNufwzotaWCRoUx01iTqff3SCB9mLI.png)
 Loi: Texte, lien, fichier etc..

![](https://library.test/images/g2pQbgqSGYD6bWpXsvFpFNGZhcs8ZhYaalzApHnH.png)
Texte: Titre, texte, classe pour style. Voir bloc rouge <span style="color: rgb(149, 55, 52);">Agenda</span> accueil sur bail.ch.  
Il est possible d'ajouter d'autres style si besoin, demander au webmaster.\*

![](https://library.test/images/F6XPM9Dch0jCo4Q2l12ylzvbF6alpolVzCqEKoSB.png)
**<span style="color: rgb(149, 55, 52);">FAQ (cas spécial)</span>**  
La FAQ sur bail est un cas spécial car récupéré et intégré avec les catégories du séminaire sur droit du bail dont les contenus vont probablement être utilisé d'une autre manière. Il n'existe pas de FAQ pour publications-droit ou droitmatrimonial mais il serait possible d'ajouter des blocs de contenus faq si on ajoutait les catégorie du droitmatrimonial à ces catégories spéciales du séminaire.

### ===========================================

### \*\* Pour webmaster \*\*

\* Dans la view *resources/views/backend/pages/create/text.blade.php* ajouter un choix de style et le créer dans la feuille de style *public/frontend/bail/css/main.css* (ici bail, si besoin mettre dans la feuille de style du site qui as besoin de la classe)
