# DBPRJCT

---

Le but du projet est de créer une plateforme de mise en relation entre étudiants ( actuels ou récemment diplômés ) et recruteurs.
Les étudiants doivent pouvoir rentrer toutes leurs informations pour créer leur profil / générer dynamiquement leur CV et passer des annonces pour rechercher un emploi ( que ce soit un stage, un CDD, CDI, etc... ).
Les recruteurs doivent pouvoir parcourir les profils des étudiants en les filtrant par compétences, par zone géographique, etc...
Ils doivent également pouvoir passer des annonces pour proposer des postes à pourvoir.

Je vous demande :
- d'écrire un court cahier des charges pour présenter l'ensemble du projet à développer,
- d'identifier l'ensemble des objets que vous aurez à modéliser,
- de faire le schéma relationnel de la base de données,
- de définir l'arborescence des pages du site.

Pensez à la fois au côté backoffice et au côté public et pensez aux différentes options qui pourraient être utiles.




---
Les entitées qui ressortent :

Utilisateur / Etudiant / Recruteur / Compétence / Entreprise / Annonce / Emploi /association ( utilisateur / compétence ) / Association ( Recruteur / Entreprise )

----

Etude de faisabilité
specs
cnoception generale
conception détaillée
codage
tests
maintenance 

---

- [USER]
  - ID
  - EMAIL
  - PASSWORD
  - DATE_INSCRIPTION
  
- [ETUDIANT]
  - ID
  - PRENOM
  - NOM
  - ADRESSE
  - PAYS / REGION
  - CODE POSTAL
  - NUM
  - DESCRIPTION
  - PHOTO
- [RECRUTEUR]
  - ID
  - PRENOM
  - NOM
- [ENTREPRISE]
  - ID
  - NOM
  - SECTEUR

- [ASSOCIATION_ENTREPRISE_RECRUTEUR]
  - ID_RECRUTEUR
  - ID_ENTREPRISE
  
- [ANNONCE]
  - ID
  - TYPE_POSTE
  - DATE_PUBLICATION
  - DATE_EMBAUCHE
  
- [COMPETENCES]
  - ID
  - NOM
  - VALIDEE


- [ASSOCIATION_COMPETENCE_UTILISATEUR]
  - ID
  - ID_USER
  - ID_COMP
  
- [POSTE]
  - ID
  - TYPE_POSTE
  - NOM_POSTE
