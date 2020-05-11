#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: T_typeuser
#------------------------------------------------------------

CREATE TABLE T_typeuser(
        id_typeuser  Int  Auto_increment  NOT NULL ,
        nom_typeuser Varchar (100) NOT NULL
	,CONSTRAINT T_typeuser_PK PRIMARY KEY (id_typeuser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: T_user
#------------------------------------------------------------

CREATE TABLE T_user(
        id_user          Int  Auto_increment  NOT NULL ,
        pseudo_user      Varchar (100) NOT NULL ,
        password_user    Varchar (255) NOT NULL ,
        mail_user        Varchar (255) NOT NULL ,
        nom_user         Varchar (100) ,
        prenom_user      Varchar (100) ,
        birth_user       Date ,
        adresse_user     Varchar (255) ,
        ville_user       Varchar (255) ,
        pays_user        Varchar (255) ,
        avatar_user      Varchar (255) NOT NULL ,
        lastlog_user     Datetime ,
        token_user       Varchar (255) NOT NULL ,
        etat_user        Int NOT NULL ,
        raisonduban_user Varchar (510) ,
        id_typeuser      Int NOT NULL
	,CONSTRAINT T_user_PK PRIMARY KEY (id_user)

	,CONSTRAINT T_user_T_typeuser_FK FOREIGN KEY (id_typeuser) REFERENCES T_typeuser(id_typeuser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: T_articlenum
#------------------------------------------------------------

CREATE TABLE T_articlenum(
        id_articlenum Int  Auto_increment  NOT NULL
	,CONSTRAINT T_articlenum_PK PRIMARY KEY (id_articlenum)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: T_numcommentaire
#------------------------------------------------------------

CREATE TABLE T_numcommentaire(
        id_numcommentaire Int  Auto_increment  NOT NULL ,
        id_articlenum     Int NOT NULL
	,CONSTRAINT T_numcommentaire_PK PRIMARY KEY (id_numcommentaire)

	,CONSTRAINT T_numcommentaire_T_articlenum_FK FOREIGN KEY (id_articlenum) REFERENCES T_articlenum(id_articlenum)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: T_commentaire
#------------------------------------------------------------

CREATE TABLE T_commentaire(
        id_commentaire      Int  Auto_increment  NOT NULL ,
        contenu_commentaire Varchar (510) NOT NULL ,
        date_commentaire    Date NOT NULL ,
        id_user             Int NOT NULL ,
        id_numcommentaire   Int NOT NULL
	,CONSTRAINT T_commentaire_PK PRIMARY KEY (id_commentaire)

	,CONSTRAINT T_commentaire_T_user_FK FOREIGN KEY (id_user) REFERENCES T_user(id_user)
	,CONSTRAINT T_commentaire_T_numcommentaire0_FK FOREIGN KEY (id_numcommentaire) REFERENCES T_numcommentaire(id_numcommentaire)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: T_categorie
#------------------------------------------------------------

CREATE TABLE T_categorie(
        id_categorie  Int  Auto_increment  NOT NULL ,
        nom_categorie Varchar (510) NOT NULL
	,CONSTRAINT T_categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: T_article
#------------------------------------------------------------

CREATE TABLE T_article(
        id_article           Int  Auto_increment  NOT NULL ,
        nom_article          Varchar (100) NOT NULL ,
        datecreation_article Datetime NOT NULL ,
        texte_article        Varchar (5000) NOT NULL ,
        numero_article       Int NOT NULL ,
        dateparution_article Datetime NOT NULL ,
        publie_article       Bool NOT NULL ,
        image_article        Varchar (51) NOT NULL ,
        id_user              Int NOT NULL ,
        id_articlenum        Int NOT NULL ,
        id_categorie         Int NOT NULL
	,CONSTRAINT T_article_PK PRIMARY KEY (id_article)

	,CONSTRAINT T_article_T_user_FK FOREIGN KEY (id_user) REFERENCES T_user(id_user)
	,CONSTRAINT T_article_T_articlenum0_FK FOREIGN KEY (id_articlenum) REFERENCES T_articlenum(id_articlenum)
	,CONSTRAINT T_article_T_categorie1_FK FOREIGN KEY (id_categorie) REFERENCES T_categorie(id_categorie)
)ENGINE=InnoDB;

