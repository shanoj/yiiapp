
USE `domianfo_marrydoor`;

-- ---------- Table for users --------------- 

create table users(userId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, marryId VARCHAR(100) UNIQUE, 
emailId VARCHAR(100) NOT NULL,  password VARCHAR(100) NOT NULL, name VARCHAR(250) NOT NULL, 
dob DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00', gender char(1) NOT NULL DEFAULT 'M', motherTounge int(10) NOT NULL, createdOn DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
active TINYINT(5) NOT NULL, handicapped TINYINT(5) NOT NULL, highlighted TINYINT(5) NOT NULL, userType TINYINT NOT NULL, PRIMARY KEY(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------Table for userLoggedDetails-------------

create table userloggeddetails(logId BIGINT
UNIQUE NOT NULL AUTO_INCREMENT,userId BIGINT NOT NULL, loggedIn DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00', 
loggedOut DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00', 
profileUpdage TINYINT(1) DEFAULT 0, PRIMARY KEY(logId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0
DEFAULT CHARSET=utf8;

-- ------Table for userPersonalDetails------------

create table userpersonaldetails(personalDetailsId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, casteId INT(10) NOT NULL DEFAULT 0, religionId INT(10) NOT NULL DEFAULT 0, countryId INT(10) NOT NULL DEFAULT 0, stateId INT(10) NOT NULL DEFAULT 0, distictId INT(10) NOT NULL DEFAULT 0, placeId INT(10) NOT NULL DEFAULT 0, mobilePhone INT(10) NOT NULL, landPhone INT(15) NOT NULL, intercasteable TINYINT NOT NULL DEFAULT 0, createdBy TINYINT NOT NULL DEFAULT 0, maritalStatus TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(personalDetailsId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --------Table for userContactDetails--------------

create table usercontactdetails(contactDetailsId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, mobileNo INT(10) NOT NULL, landLine INT(15) NOT NULL, alternativeNo VARCHAR(20) NOT NULL, facebookUrl VARCHAR(255), skypeId VARCHAR(255), googleIM VARCHAR(255), yahooIM VARCHAR(255), visibility TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(contactDetailsId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ------Table for address---------

create table address(addressId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, houseName VARCHAR(255) NOT NULL, place VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, postoffice VARCHAR(255) NOT NULL, district VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, pincode INT(10) NOT NULL, addresType TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(addressId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;



-- ---Table for physicalDetails------

create table physicaldetails(physicalId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, heightId BIGINT NOT NULL, weight INT NOT NULL, bodyType TINYINT NOT NULL DEFAULT 0, complexion TINYINT NOT NULL DEFAULT 0, physicalStatus TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(physicalId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ---- Tale for education----------

create table education(edId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, educationId BIGINT NOT NULL, occupationId BIGINT NOT NULL, employedIn TINYINT NOT NULL DEFAULT 0, yearlyIncome DOUBLE(8,2) NOT NULL, PRIMARY KEY(edId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ---- Table for habit------

create table habit(habitId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, food TINYINT NOT NULL DEFAULT 0, smoking TINYINT NOT NULL DEFAULT 0, drinking TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(habitId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ---Table for familyProfile-----

create table familyprofile(familyProfileID BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, familyStatus TINYINT NOT NULL DEFAULT 0, familyType TINYINT NOT NULL DEFAULT 0, familyValues TINYINT NOT NULL DEFAULT 0, brothers INT NOT NULL, sisters INT NOT NULL, brotherMarried INT NOT NULL, SisterMarried INT NOT NULL, familyPic VARCHAR(255), visibility TINYINT NOT NULL DEFAULT 0, familyDesc TEXT NOT NULL, userDesc TEXT NOT NULL, PRIMARY KEY(familyProfileID), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- --Table for hobiesAndInterests-----

create table hobiesandinterests(hobiesId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, hobies TEXT NOT NULL, interests TEXT NOT NULL, musics TEXT NOT NULL, reading TEXT NOT NULL, movies TEXT NOT NULL, activities TEXT NOT NULL, cuisine TEXT NOT NULL, languages TEXT NOT NULL, languageOther VARCHAR(100) NOT NULL, PRIMARY KEY(hobiesId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- -------Table for partnerPreferences--------

create table partnerpreferences(preferenceId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, 
userId BIGINT NOT NULL,ageFrom INT(10) NOT NULL DEFAULT 0, ageTo INT(10) NOT NULL DEFAULT 0,
 maritalStatus TINYINT, haveChildren TINYINT , heightFrom INT(10),
heightTo INT(10), physicalStatus TINYINT, religion INT(10) ,caste INT(10) ,
subcaste TEXT , manglik TINYINT ,dosham INT(100) , sudham INT(100) ,star TEXT , 
eatingHabits TEXT , drinkingHabits TEXT , smokingHabits TEXT , languages TEXT , countries TEXT , 
states TEXT , districts TEXT , places TEXT , citizenship TEXT , occupation TEXT , 
annualIncome INT , partnerDescription TEXT , PRIMARY KEY(preferenceId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- ----Table for photos-----

create table photos(photoId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, imageName VARCHAR(100) NOT NULL, profileImage TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(photoId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --TABLE FOR documents

create table documents(documentId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, documentName VARCHAR(100) NOT NULL, documentType TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(documentId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;	


-- ---TABLE FOR horoscopes-----

create table horoscopes(horoscopeId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, sign INT NOT NULL,time VARCHAR(250), astrodate INT NOT NULL,country VARCHAR(250) NOT NULL, state VARCHAR(250) NOT NULL,city VARCHAR(250) NOT NULL, horoscopeFile VARCHAR(100), grahanilaFile VARCHAR(100), visibility INT(100) NOT NULL DEFAULT 0, dosham INT(100) NOT NULL DEFAULT 0, sudham INT(100) NOT NULL DEFAULT 0, PRIMARY KEY(horoscopeId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- --TABLE FOR reference----

create table reference(referenceId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL, relation VARCHAR(250) NOT NULL, referName VARCHAR(250) NOT NULL, referHouseName VARCHAR(250) NOT NULL, referPlace VARCHAR(250) NOT NULL, referCity VARCHAR(250) NOT NULL, referState VARCHAR(250) NOT NULL, referPostcode INT(10) NOT NULL, referPostOffice VARCHAR(250) NOT NULL, referDistrict VARCHAR(250) NOT NULL, referCountry VARCHAR(250) NOT NULL, referEmail VARCHAR(250) NOT NULL, referOccupation vARCHAR(250) NOT NULL, referCallFrom VARCHAR(50) NOT NULL, referCallTo INT(10) NOT NULL, referCallTime CHAR(2) NOT NULL, visibility TINYINT NOT NULL DEFAULT 0, PRIMARY KEY(referenceId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --TABLE FOR messages

create table messages(messageId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, senderId BIGINT NOT NULL, receiverId BIGINT NOT NULL, message TEXT NOT NULL,
 status TINYINT NOT NULL DEFAULT 0, sendDate DATE NOT NULL, PRIMARY KEY(messageId),FOREIGN KEY (senderId) REFERENCES users(userId), FOREIGN KEY (receiverId) REFERENCES users(userID))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
 


-- ---table for interests------

 create table interests (interestId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, senderId BIGINT NOT NULL, receiverId BIGINT NOT NULL, status TINYINT NOT NULL DEFAULT 0, sendDate DATETIME NOT NULL,statusChange DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00', PRIMARY KEY(interestId),FOREIGN KEY (senderId) REFERENCES users(userId), FOREIGN KEY (receiverId) REFERENCES users(userID))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;



-- --table for shortlist----

create table shortlist(shortlistId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userID BIGINT NOT NULL, profileID text NOT NULL, PRIMARY KEY(shortlistId),FOREIGN KEY (userID) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --table for profileViews---

create table profileviews(profileViewId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userID BIGINT NOT NULL, visitedId text NOT NULL, PRIMARY KEY(profileViewId),FOREIGN KEY (userID) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --table for country

create table country(countryId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(countryId))ENGINE=InnoDB DEFAULT CHARSET=utf8;	

-- -table for states----

create table states(stateId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, countryId BIGINT NOT NULL, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(stateId), FOREIGN KEY (countryId) REFERENCES country(countryId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for districts---


create table districts(districtId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, stateId BIGINT NOT NULL, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(districtId), FOREIGN KEY (stateId) REFERENCES states(stateId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for places---

create table places(placeId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, districtId BIGINT NOT NULL, name VARCHAR(250) NOT NULL, type BIGINT NOT NULL DEFAULT 0, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(placeId), FOREIGN KEY (districtId) REFERENCES districts(districtId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for languages--

create table languages(languageId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(languageId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for religion---

create table religion(religionId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(religionId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for caste----

create table caste(casteId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, religionId BIGINT NOT NULL, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(casteId), FOREIGN KEY (religionId) REFERENCES religion(religionId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for sub caste----

create table subcaste(subcasteId BIGINT UNIQUE NOT NULL AUTO_INCREMENT,casteId BIGINT NOT NULL, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(subcasteId), FOREIGN KEY (casteId) REFERENCES caste(casteId))ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- -table for education_master---

create table education_master(educationId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(educationId))ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --table for occupation_master---

create table occupation_master(occupationId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(occupationId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --table for hobies_master---

create table hobies_master(hobiesId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(hobiesId))ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ---table for interests_master---

create table interests_master(interestId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(interestId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for musics_master---

create table musics_master(musicId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(musicId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for reading_master----

create table reading_master(musicId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(musicId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for movies_master---

create table movies_master(moviesId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(moviesId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -table for activities_master---

create table activities_master(activitiesId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(activitiesId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -tables for cuisines_master---

create table cuisines_master(cuisineId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(cuisineId))ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- tables for signs_master---

create table signs_master(signId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, image VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(signId))ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- -table for astrodate_master---

create table astrodate_master(astrodateId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(astrodateId))ENGINE=InnoDB  DEFAULT CHARSET=utf8;


-- -table for admin_users---

create table admin_users(adminId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, username VARCHAR(250) NOT NULL, password VARCHAR(250) NOT NULL, email VARCHAR(250) NOT NULL,adminTypeId BIGINT NOT NULL, lastLogin DATETIME NOT NULL, status BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(adminId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -table for admin_types---

create table admin_types(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, type VARCHAR(10) NOT NULL, PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- -tables for coupon---

create table coupon(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, couponCode VARCHAR(15) UNIQUE NOT NULL, creationDate DATETIME NOT NULL, startDate DATE NOT NULL, endDate DATE NOT NULL, validity INT(2), status TINYINT NOT NULL DEFAULT 0, isUsed TINYINT NOT NULL DEFAULT 0, batchNo VARCHAR(10) NOT NULL, serialNo INT (8) NOT NULL, couponId INT(10) NOT NULL, couponType ENUM( 'normal', 'promo' ) NOT NULL DEFAULT 'normal', PRIMARY KEY(id))ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;	

-- -table for coupon_logs---

create table coupon_logs(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, adminUserId INT(10) NOT NULL, batchNo INT(10) UNIQUE NOT NULL, creationTime DATETIME NOT NULL, PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- -table for bodyType_master--

create table bodytype_master(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- -table for complexion_master--

create table complexion_master(id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, active BIGINT NOT NULL DEFAULT 1, PRIMARY KEY(id))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- table for privacy
create table privacy (id BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userId BIGINT NOT NULL,items ENUM('album', 'family', 'documents','astro','reference','contact'),privacy SET('all', 'subscribers', 'member', 'request'), PRIMARY KEY(id),FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- TABLE FOR album

create table album(albumId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, senderId BIGINT NOT NULL, receiverId BIGINT NOT NULL, status TINYINT NOT NULL DEFAULT 0, sendDate DATE NOT NULL, PRIMARY KEY(albumId), FOREIGN KEY (senderId) REFERENCES users(userId), FOREIGN KEY (receiverId) REFERENCES users(userID))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Table for documentRequest

create table documentrequest(documentRequestId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, senderId BIGINT NOT NULL, receiverId BIGINT NOT NULL, status TINYINT NOT NULL DEFAULT 0, sendDate DATE NOT NULL, PRIMARY KEY(documentRequestId), FOREIGN KEY (senderId) REFERENCES users(userId), FOREIGN KEY (receiverId) REFERENCES users(userID))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Table for contactRequest

create table contactrequest(contactRequestId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, senderId BIGINT NOT NULL, receiverId BIGINT NOT NULL, status TINYINT NOT NULL DEFAULT 0, sendDate DATE NOT NULL, PRIMARY KEY(contactRequestId), FOREIGN KEY (senderId) REFERENCES users(userId), FOREIGN KEY (receiverId) REFERENCES users(userID))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Table for familyAlbum

create table familyalbum(familyAlbumId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, senderId BIGINT NOT NULL, receiverId BIGINT NOT NULL, status TINYINT NOT NULL DEFAULT 0, sendDate DATE NOT NULL, PRIMARY KEY(familyAlbumId), FOREIGN KEY (senderId) REFERENCES users(userId), FOREIGN KEY (receiverId) REFERENCES users(userID))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- alter the photos table

ALTER TABLE photos ADD active TINYINT(4) DEFAULT 0 AFTER profileImage;

-- alter the documents table

ALTER TABLE documents ADD active TINYINT(4) DEFAULT 0 AFTER documentType;


create table search(searchId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, searchText text NOT NULL, searchQquery text NOT NULL, userId BIGINT NOT NULL, PRIMARY KEY(searchId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --table for bookmark----

create table bookmark(bookMarkId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userID BIGINT NOT NULL, profileIDs text NOT NULL, PRIMARY KEY(bookMarkId),FOREIGN KEY (userID) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- table for payment --
create table payment(paymentId BIGINT NOT NULL, userID bigint not null, couponcode varchar(15) NOT NULL, startdate datetime NOT NULL, actionItem enum('highlight','membership'), PRIMARY KEY(paymentId), FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- --table for addressbook ---
create table addressbook(addressbookId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, userID BIGINT NOT NULL, visitedId text NOT NULL, PRIMARY KEY(addressbookId),FOREIGN KEY (userID) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


RENAME TABLE album TO albumrequest;

-- table album --

CREATE TABLE IF NOT EXISTS album (
  albumId bigint(20) NOT NULL AUTO_INCREMENT,
  userId bigint(20) NOT NULL,
  imageName varchar(100) NOT NULL,
  description varchar(200) NULL,
  active tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (albumId),
  FOREIGN KEY (userId) REFERENCES users(userId),
  UNIQUE KEY albumId (albumId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=0;

-- table for profile udpate logging --
CREATE TABLE IF NOT EXISTS `profileupdates` (
  `profileId` bigint(20) NOT NULL auto_increment,
  `userId` bigint(20) NOT NULL,
  `profile` enum('personal','education','partner','hobby','profile','album','documents') default NULL,
  `status` text NOT NULL,
  `statusTime` datetime NOT NULL,
  PRIMARY KEY  (`profileId`),
  UNIQUE KEY `profileId` (`profileId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;


-- table for profile blocking --
create table profileblock(profileBlockId BIGINT UNIQUE NOT NULL AUTO_INCREMENT, 
userId BIGINT NOT NULL, profileIDs text NOT NULL, PRIMARY KEY(profileBlockId)
,FOREIGN KEY (userId) REFERENCES users(userId))ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP VIEW IF EXISTS view_users;

CREATE VIEW view_users AS SELECT U.*, FLOOR( DATEDIFF( CURRENT_DATE, U.dob) /365 ) as age,UC.mobileNo,UC.landLine,UC.alternativeNo,UC.facebookUrl,UC.skypeId,UC.googleIM,UC.yahooIM,UC.visibility,
UP.casteId as casteId,C.name as caste,UP.religionId as religionId, R.name as religion,UP.countryId,CO.name as country,UP.stateId,S.name as state,UP.distictId,D.name as district,UP.placeId as placeId, PL.name as place,UP.mobilePhone,UP.landPhone,UP.intercasteable,UP.createdBy,UP.maritalStatus,
P.heightId,P.weight,P.bodyType,P.complexion,P.physicalstatus,PB.profileIDs as profileBlocked,
H.dosham as dosham,H.sudham as sudham,HA.food,HA.smoking,HA.drinking,HI.languages, 
EL.educationId as educationId,EM.name as educationName,EL.occupationId as occupationId,OM.name as occupationName,EL.yearlyIncome as annualIncome
FROM users U
LEFT JOIN usercontactdetails UC ON U.userId = UC.userId
LEFT JOIN userpersonaldetails UP ON U.userId = UP.userId
LEFT JOIN physicaldetails P ON U.userId = P.userId
LEFT JOIN caste C ON UP.casteId = C.casteId
LEFT JOIN religion R ON UP.religionId = R.religionId
LEFT JOIN country CO ON UP.countryId = CO.countryId
LEFT JOIN states S ON UP.stateId = S.stateId
LEFT JOIN districts D ON UP.distictId = D.districtId
LEFT JOIN places PL ON UP.placeId = PL.placeId
LEFT JOIN education EL ON U.userId = EL.userId
LEFT JOIN profileblock PB ON U.userId = PB.userId
LEFT JOIN horoscopes H ON U.userId = H.userId
LEFT JOIN hobiesandinterests HI on U.userId = HI.userId 
LEFT JOIN habit HA ON U.userId = HA.userId
LEFT JOIN education_master EM ON EL.educationId = EM.educationId
LEFT JOIN occupation_master OM ON EL.occupationId  = OM.occupationId;

-- view to get the messages

DROP VIEW IF EXISTS view_messages;

CREATE VIEW view_messages AS SELECT M.*, SU.userId as senderUserId, SU.marryId as senderMarryId,SU.emailId as senderEmailId, SU.name as senderName, FLOOR( DATEDIFF( CURRENT_DATE, SU.dob) /365 ) as senderAge,
SU.gender senderGender, SU.motherTounge as senderMotherTounge, SU.userType as senderUserType, RU.userId as receiverUserId, RU.marryId as receiverMarryId,RU.emailId as receiverEmailId, RU.name as receiverName, FLOOR( DATEDIFF( CURRENT_DATE, RU.dob) /365 ) as receiverAge,
RU.gender receiverGender, RU.motherTounge as receiverMotherTounge, RU.userType as receiverUserType,SP.photoId as senderPhotoId, SP.imageName as senderImageName, RP.photoId as receiverPhotoId, RP.imageName as receiverImageName
FROM messages M
JOIN users SU ON M.senderId = SU.userId
JOIN users RU ON M.receiverId = RU.userId
LEFT JOIN photos SP ON (M.senderId = SP.userId AND SP.profileImage = 1)
LEFT JOIN photos RP ON (M.receiverId = RP.userId AND RP.profileImage = 1);

