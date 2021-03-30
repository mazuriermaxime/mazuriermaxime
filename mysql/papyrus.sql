-- 1 Quelles sont les commandes du fournisseur 09120 ?

SELECT  numcom as "numéro de commande", numfou as "numéro de fournisseur"
FROM    entcom 
WHERE   entecom.numfou= 09120

-- 2.	Afficher le code des fournisseurs pour lesquels des commandes ont été passées.

SELECT DISTINCT entcom.numfou as "numéro fournisseur", nomfou as "nom fournisseur"
FROM            entcom 
JOIN            fournis 
ON              entcom.numfou = fournis.numfou

-- 3.	Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.

SELECT  COUNT(numcom) as "nombre_commandes", count(distinct numfou) as "nombre_fournisseurs" 
FROM    entcom

-- 4.	Editer les produits ayant un stock inférieur ou égal au stock dalerte et dont la quantité annuelle est inférieur est inférieure à1000 (informations à fournir : n° produit, libelléproduit, stock, stockactuel dalerte, quantitéannuelle).

SELECT      codart as "numero article", 
            libart as "libelle article", 
            stkphy as "stock physique", 
            stkale as "stock d'alerte",    
            qteann as "quantite annuelle"
FROM        produit

WHERE      stkphy<=stkale 
AND         qteann<1000

-- 5.	Quels sont les fournisseurs situés dans les départements 75 78 92 77 ? L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique .

SELECT      left(posfou,2) as "département", nomfou as "nom fournisseur"
FROM       fournis
WHERE       posfou like "92%" 
OR         posfou like "75%" 
OR          posfou like "78%"
OR          posfou like "77%"
ORDER BY    posfou DESC, nomfou ASC

-- 6.	Quelles sont les commandes passées au mois de mars et avril?

SELECT  numcom as 'commandes entre mars et avril'
       FROM    entcom 
WHERE   month(datcom) between 03 and 04

-- 7.	Quelles sont les commandes du jourqui ont des observations particulières ?(Affichage numéro de commande, date de commande).

SELECT  numcom as "numéro de commande", datcom as "date de commande"
FROM   entcom 
WHERE   obscom is not null 
AND     obscom <> " "
AND     obscom <> ""

-- 8.	Lister le total de chaque commande par total décroissant (Affichage numéro de commande et total).

SELECT      nomfou as "nom fournisseur", ligcom.numcom, SUM(QTECDE * PRIUNI) as "Total des commandes"
FROM        ligcom
JOIN        entcom on ligcom.numcom = entcom.numcom
JOIN        fournis on entcom.numfou = fournis.numfou
GROUP BY    ligcom.numcom
ORDER BY    SUM(QTECDE * PRIUNI) DESC

-- 9.	Lister les commandes dont le total est supérieur à 10000€; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.(Affichage numéro de commande et total).

SELECT      nomfou as "nom fournisseur", ligcom.numcom as "numéro de commande", SUM(QTECDE * PRIUNI) as "TOTAL"
FROM        ligcom
JOIN      entcom on ligcom.numcom = entcom.numcom
JOIN      fournis on entcom.numfou = fournis.numfou
WHERE     qtecde<1000  
GROUP BY    ligcom.numcom
HAVING      TOTAL>10000
ORDER  BY    TOTAL DESC

-- 10.	Lister les commandes par nom fournisseur (Afficher le nom du fournisseur, le numéro de commande et la date).

SELECT      nomfou as "nom fournisseur", entcom.numcom as "numéro de commande", datcom as "date de commande"
FROM      entcom
JOIN       fournis on entcom.numfou = fournis.numfou
GROUP BY    numcom
ORDER BY 	nomfou

-- 11.	Sortir les produits des commandes ayant le mot "urgent" en observation (Afficher le numéro de commande, le nom du fournisseur, le libellé du produit et le sous total= quantité commandée * Prix unitaire).

SELECT      nomfou as "nom fournisseur", 
            libart as "libellé article", ligcom.codart as "code article", 
            ligcom.numcom as "numéro commande", sum(qtecde*priuni) as "sous-total"
FROM        ligcom
JOIN        entcom on ligcom.numcom = entcom.numcom
JOIN        fournis on entcom.numfou = fournis.numfou
JOIN       produit on ligcom.codart = produit.codart
WHERE       obscom LIKE "%urgent%"
GROUP BY 	ligcom.numcom, nomfou, libart

-- 12.	Coder de 2manières différentes la requête suivante:Lister lenom desfournisseurs susceptibles de livrer au moins un article.

1ere
SELECT DISTINCT     nomfou as "nom fournisseur"
FROM               fournis
JOIN               entcom on fournis.numfou = entcom.numfou
JOIN              ligcom on entcom.numcom = ligcom.numcom
WHERE              qteliv < qtecde

2eme
SELECT DISTINCT     nomfou as "nom fournisseur"
FROM               fournis,entcom,ligcom
WHERE               fournis.numfou=entcom.numfou
AND      entcom.numfou = (
                                SELECT     entcom.numfou
                                FROM        entcom
                                WHERE       entcom.numcom = 70210
                            )

-- 13.	Coder de 2 manières différentes la requête suivante Lister les commandes (Numéro et date) dont le fournisseur est celui de la commande 70210.

1ere
SELECT     numcom as "numéro de commande", datcom as "date de commande"
FROM       entcom 
WHERE     numfou = (
                        SELECT          numfou 
                        FROM           entcom 
                       WHERE   numcom = 70210
)
2eme
SELECT    numcom as "numéro de commande", datcom as "date de commande"
FROM       entcom
JOIN        fournis on entcom.numfou = fournis.numfou
WHERE      entcom.numfou = (
                                SELECT      entcom.numfou
                                FROM       entcom
                                WHERE       entcom.numcom = 70210
                            )

-- 14.	Dans les articles susceptibles d’être vendus, lister les articles moins chers (basés sur Prix1) que le moins cher des rubans (article dont le premier caractère commence par R). On affichera le libellé de l’article et prix1.

SELECT      vente.codart, libart, prix1
FROM        vente, produit
WHERE       produit.codart=vente.codart
AND         vente.prix1 < 
                            (
                                SELECT      MIN(prix1)
                                FROM       vente
                                WHERE      vente.codart like "R%"
                            )
GROUP BY    codart

-- 15.	Editer la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock dalerte. La liste est triée par produit puis fournisseur.

SELECT      fournis.nomfou as "nom fournisseur", 
            vente.numfou as "numéro fournisseur", 
                  produit.libart as "libellé article", 
            vente.codart as "code article"

FROM        fournis, produit, vente
WHERE	    fournis.numfou = vente.numfou
AND	    produit.codart = vente.codart
AND	        produit.stkphy<=1.5*produit.stkale
GROUP BY    vente.codart, nomfou
ORDER BY    vente.codart, nomfou

-- 16.	Éditer la liste des fournisseurs susceptibles de livrer les produit dont le stock est inférieur ou égal à 150 % du stock dalerte et un délai de livraison dau plus 30 jours. La liste est triée par fournisseur puis produit.

SELECT      fournis.nomfou as "nom fournisseur", 
            vente.numfou as "numéro fournisseur", 
            produit.libart as "libellé article", 
            vente.codart as "code article"
FROM        fournis, produit, vente
WHERE 	    fournis.numfou = vente.numfou
AND	    produit.codart = vente.codart
AND	        produit.stkphy<=1.5*produit.stkale
AND	    delliv<=30
GROUP BY    vente.codart, nomfou
ORDER BY    vente.codart, nomfou

-- 17.	Avec le même type de sélection que ci-dessus, sortir un total des stocks par fournisseur trié par total décroissant.

SELECT     sum(produit.stkphy) as stock, fournis.nomfou as "nom fournisseur", fournis.numfou as "numéro fournisseur"
FROM       vente, fournis, produit
WHERE     produit.codart=vente.codart
AND         vente.numfou = fournis.numfou		
GROUP BY    nomfou
ORDER BY    stock DESC

-- 18.	En fin dannée, sortir la liste des produits dont la quantité réellement commandée dépasse 90% de la quantité annuelle prévue.

SELECT      ligcom.codart as "produits avec quantitécommandée >90% de la quantité annuelle", 
            produit.libart as "libellé de l'article"
FROM       ligcom, produit
WHERE      qtecde>0.9*qteann
AND         ligcom.codart=produit.codart
GROUP BY    ligcom.codart

-- 19. Calculer le chiffre daffaire par fournisseur pour lannée 93 sachant que les prix indiqués sont hors taxes et que le taux de TVA est 20%.

SELECT     sum(qtecde*priuni*1.2) as total, nomfou as "nom fournisseur"
FROM        ligcom, fournis, entcom
WHERE     ligcom.numcom = entcom.numcom
AND        entcom.numfou = fournis.numfou
AND       year(datcom) = 2018
GROUP BY    nomfou
ORDER BY 	total desc

-- 1.Application dune augmentation de tarif de 4% pour le prix 1, 2% pour le prix2 pour le fournisseur 9180.

UPDATE  vente
SET     prix1 = prix1*1.04 , prix2= prix2*1.02
WHERE   numfou=9180

-- 2. Dans la table vente, mettre à jour le prix2 des articles dont le prix2 est null, en affectant a valeur de prix.

UPDATE      vente
SET         prix2=prix1
WHERE      prix2=0

-- 3. Mettre à jour le champ obscom en positionnant '*****' pour toutes les commandes dont le fournisseur a un indice de satisfaction <5

UPDATE      entcom, fournis
SET       obscom="*****"
WHERE       entcom.numfou = fournis.numfou
AND        fournis.satisf<5

-- 4. Suppression du produit I110.

DELETE FROM     produit
WHERE           codart = "I110";

