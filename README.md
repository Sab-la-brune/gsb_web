# gsb_web par Sabrina Cos
Client léger développé pour l'épreuve U4 du BTS SIO SLAM 2019

Contexte GSB
https://www.reseaucerta.org/content/contexte-%C2%AB-laboratoire-gsb-%C2%BB


L'application web est programmée en PHP, HTML avec l’aide de la librairie Bootstrap.
Elle fait appel à la même base de données que pour l’application lourde intervenant dans le même contexte.

Elle se constitue de 3 pages 

CONNEXION :

Le visiteur se connecte avec son nom et son matricule.


MENU :

Regroupe la liste des praticiens dans un tableau.
Bouton Déconnexion  avec un retour à la page de connexion.
Bouton Ajout d’un praticien qui ouvre la page Détail vierge.
Bouton Recherche avec un champs de recherche à remplir, qui va afficher les praticiens selon ce critère.
Si clic sur un des praticiens ouverture de la page Détail.

DETAIL :

Après clic sur Ajout d’un Praticien :

Affiche la fiche vierge à remplir avec les informations de ce nouveau praticien.
Bouton Enregistrer, afin d’enregistrer les modifications dans la BDD, et qui ne se fera que lorsque les champs obligatoires seront remplis sinon mise en avant des champs incorrects et pop-up informative.
Bouton Retour, afin de revenir à la page Menu, entraînant un rechargement de la liste de praticiens après modification.


Après clic sur un des praticiens : 

Affiche la fiche du praticien sélectionné regroupant les informations le concernant.
Bouton Modifier, afin de rendre les champs modifiables.
Bouton Enregistrer, afin d’enregistrer dans la BDD les modifications apportées à la fiche.
Bouton Suppression, qui supprimera le praticien de la fiche sélectionnée.
Cela supprime le praticien et ses liens dans la BDD après l’apparition d’un pop-up qui demandera la confirmation. Il fait, si la suppression a été effectuée, un retour automatique au Menu avec une mise à jour de la liste de praticiens. 
Bouton Retour, pour revenir à la page Menu, entraînant un rechargement de la liste de praticiens.
